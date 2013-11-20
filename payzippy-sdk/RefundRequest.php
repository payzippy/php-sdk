<?php
require_once(dirname(__FILE__)."/Utils.php");
require_once(dirname(__FILE__)."/Constants.php");
require_once(dirname(__FILE__)."/Config.php");
require_once(dirname(__FILE__)."/RefundResponse.php");

class RefundRequest
{
    private $params = array();
    private $refund_api_url;

    function __construct()
    {
        $this->set_merchant_id(Config::MERCHANT_ID);
        $this->set_merchant_key_id(Config::MERCHANT_KEY_ID);
        $this->set_hash_method(Config::HASH_METHOD);

        $this->refund_api_url = Config::API_BASE . Config::API_REFUND . "/" . Config::API_VERSION;
    }

    public function set_merchant_id($value)
    {
        $this->params[Constants::PARAMETER_MERCHANT_ID] = $value;
        return $this;
    }

    public function set_merchant_key_id($value)
    {
        $this->params[Constants::PARAMETER_MERCHANT_KEY_ID] = $value;
        return $this;
    }

    public function set_hash_method($value)
    {
        $this->params[Constants::PARAMETER_HASH_METHOD] = $value;
        return $this;
    }

    public function set_hash($value)
    {
        $this->params[Constants::PARAMETER_HASH] = $value;
        return $this;
    }

    public function set_merchant_transaction_id($value)
    {
        $this->params[Constants::PARAMETER_MERCHANT_TRANSACTION_ID] = $value;
        return $this;
    }

    public function set_payzippy_sale_transaction_id($value)
    {
        $this->params[Constants::PARAMETER_PAYZIPPY_SALE_TRANSACTION_ID] = $value;
        return $this;
    }

    public function set_timegmt()
    {
        $this->params[Constants::PARAMETER_TIMEGMT] = round(microtime(true) * 1000);
        return $this;
    }

    public function set_refund_amount($value)
    {
        $this->params[Constants::PARAMETER_REFUND_AMOUNT] = $value;
        return $this;
    }

    public function set_refund_reason($value)
    {
        $this->params[Constants::PARAMETER_REFUND_REASON] = $value;
        return $this;
    }

    public function set_refunded_by($value)
    {
        $this->params[Constants::PARAMETER_REFUNDED_BY] = $value;
        return $this;
    }

    public function set_udf1($value)
    {
        $this->params[Constants::PARAMETER_UDF1] = $value;
        return $this;
    }

    public function set_udf2($value)
    {
        $this->params[Constants::PARAMETER_UDF2] = $value;
        return $this;
    }

    public function set_udf3($value)
    {
        $this->params[Constants::PARAMETER_UDF3] = $value;
        return $this;
    }

    public function set_udf4($value)
    {
        $this->params[Constants::PARAMETER_UDF4] = $value;
        return $this;
    }

    public function set_udf5($value)
    {
        $this->params[Constants::PARAMETER_UDF5] = $value;
        return $this;
    }

    private function validate()
    {
        $return_obj = array(
            "status" => FALSE,
            "message" => NULL,
        );

        if (!Utils::is_valid_parameter($this->params[Constants::PARAMETER_MERCHANT_ID],
            Constants::MAX_LEN_MERCHANT_ID)
        ) {
            $return_obj["message"] = Constants::INVALID_MERCHANT_ID;
            return $return_obj;
        }

        if (!Utils::is_valid_parameter($this->params[Constants::PARAMETER_MERCHANT_KEY_ID],
            Constants::MAX_LEN_MERCHANT_KEY_ID)
        ) {
            $return_obj["message"] = Constants::INVALID_MERCHANT_KEY_ID;
            return $return_obj;
        }

        if (!Utils::is_valid_parameter($this->params[Constants::PARAMETER_HASH_METHOD])
            || !in_array($this->params[Constants::PARAMETER_HASH_METHOD],
                Constants::PARAMETER_REQUIREMENTS(Constants::PARAMETER_HASH_METHOD))
        ) {
            $return_obj["message"] = Constants::INVALID_HASH_METHOD;
            return $return_obj;
        }

        if (!Utils::is_valid_parameter($this->params[Constants::PARAMETER_REFUND_AMOUNT])
            || !ctype_digit($this->params[Constants::PARAMETER_REFUND_AMOUNT])
            || $this->params[Constants::PARAMETER_REFUND_AMOUNT] <= 0
        ) {
            $return_obj["message"] = Constants::INVALID_REFUND_AMOUNT;
            return $return_obj;
        }

        $pz_transaction_id_set = TRUE;
        $merchant_transaction_id_set = TRUE;

        if (!array_key_exists(Constants::PARAMETER_PAYZIPPY_SALE_TRANSACTION_ID, $this->params)
            || !Utils::is_valid_parameter($this->params[Constants::PARAMETER_PAYZIPPY_SALE_TRANSACTION_ID])
        ) {
            $pz_transaction_id_set = FALSE;
        }

        if (!array_key_exists(Constants::PARAMETER_MERCHANT_TRANSACTION_ID, $this->params)
            || !Utils::is_valid_parameter($this->params[Constants::PARAMETER_MERCHANT_TRANSACTION_ID])
        ) {
            $merchant_transaction_id_set = FALSE;
        }

        if (!($pz_transaction_id_set || $merchant_transaction_id_set)) {
            $return_obj["message"] = Constants::INVALID_TRANSACTION_ID;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_TIMEGMT, $this->params)
            && strlen($this->params[Constants::PARAMETER_TIMEGMT]) > Constants::MAX_LEN_TIMEGMT
        ) {
            $return_obj["message"] = Constants::INVALID_TIMEGMT;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_REFUNDED_BY, $this->params)
            && strlen($this->params[Constants::PARAMETER_REFUNDED_BY]) > Constants::MAX_LEN_REFUNDED_BY
        ) {
            $return_obj["message"] = Constants::INVALID_REFUNDED_BY;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_REFUND_REASON, $this->params)
            && strlen($this->params[Constants::PARAMETER_REFUND_REASON]) > Constants::MAX_LEN_REFUND_REASON
        ) {
            $return_obj["message"] = Constants::INVALID_REFUND_REASON;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_UDF1, $this->params)
            && strlen($this->params[Constants::PARAMETER_UDF1]) > Constants::MAX_LEN_UDF1
        ) {
            $return_obj["message"] = Constants::INVALID_UDF1;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_UDF2, $this->params)
            && strlen($this->params[Constants::PARAMETER_UDF2]) > Constants::MAX_LEN_UDF2
        ) {
            $return_obj["message"] = Constants::INVALID_UDF2;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_UDF3, $this->params)
            && strlen($this->params[Constants::PARAMETER_UDF3]) > Constants::MAX_LEN_UDF3
        ) {
            $return_obj["message"] = Constants::INVALID_UDF3;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_UDF4, $this->params)
            && strlen($this->params[Constants::PARAMETER_UDF4]) > Constants::MAX_LEN_UDF4
        ) {
            $return_obj["message"] = Constants::INVALID_UDF4;
            return $return_obj;
        }

        if (array_key_exists(Constants::PARAMETER_UDF5, $this->params)
            && strlen($this->params[Constants::PARAMETER_UDF5]) > Constants::MAX_LEN_UDF5
        ) {
            $return_obj["message"] = Constants::INVALID_UDF5;
            return $return_obj;
        }

        $return_obj["status"] = TRUE;
        return $return_obj;
    }

    public function refund()
    {
        $this->params = Utils::params_filter($this->params);
        $validate_result = (object)$this->validate();
        if ($validate_result->status == false) {
            throw new Exception("Invalid params : " . $validate_result->message);
        }

        $hash = Utils::generate_hash($this->params);
        $this->set_hash($hash);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->refund_api_url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($this->params));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);

        $response = curl_exec($curl);
        if (!$response) {
            throw new Exception ('Curl error: ' . curl_error($curl));
        }
        curl_close($curl);

        return new RefundResponse($response);
    }
}

?>