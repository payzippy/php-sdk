<?php
require_once(dirname(__FILE__).'/Config.php');
require_once(dirname(__FILE__).'/Utils.php');
require_once(dirname(__FILE__).'/Constants.php');
require_once(dirname(__FILE__).'/QueryResponse.php');

class QueryRequest
{
    private $params = array();
    private $query_api_url;

    function __construct()
    {
        $this->set_merchant_id(PZ_Config::MERCHANT_ID);
        $this->set_merchant_key_id(PZ_Config::MERCHANT_KEY_ID);
        $this->set_hash_method(PZ_Config::HASH_METHOD);

        $this->query_api_url = PZ_Config::API_BASE . PZ_Config::API_QUERY . "/" . PZ_Config::API_VERSION;
    }

    public function set_merchant_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_ID] = $value;
        return $this;
    }

    public function set_merchant_key_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_KEY_ID] = $value;
        return $this;
    }

    public function set_merchant_transaction_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_TRANSACTION_ID] = $value;
        return $this;
    }

    public function set_payzippy_transaction_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_PAYZIPPY_TRANSACTION_ID] = $value;
        return $this;
    }

    public function set_transaction_type($value)
    {
        $this->params[PZ_Constants::PARAMETER_TRANSACTION_TYPE] = $value;
        return $this;
    }

    public function set_hash_method($value)
    {
        $this->params[PZ_Constants::PARAMETER_HASH_METHOD] = $value;
        return $this;
    }

    public function set_hash($value)
    {
        $this->params[PZ_Constants::PARAMETER_HASH] = $value;
        return $this;
    }

    private function validate()
    {
        $return_obj = array(
            "status" => FALSE,
            "message" => NULL,
        );

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_MERCHANT_ID],
            PZ_Constants::MAX_LEN_MERCHANT_ID)
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_MERCHANT_ID;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_MERCHANT_KEY_ID],
            PZ_Constants::MAX_LEN_MERCHANT_KEY_ID)
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_MERCHANT_KEY_ID;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_HASH_METHOD])
            || !in_array($this->params[PZ_Constants::PARAMETER_HASH_METHOD],
                PZ_Constants::PARAMETER_REQUIREMENTS(PZ_Constants::PARAMETER_HASH_METHOD))
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_HASH_METHOD;
            return $return_obj;
        }

        $pz_transaction_id_set = TRUE;
        $merchant_transaction_id_set = TRUE;

        if (!array_key_exists(PZ_Constants::PARAMETER_PAYZIPPY_TRANSACTION_ID, $this->params)
            || !PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_PAYZIPPY_TRANSACTION_ID])
        ) {
            $pz_transaction_id_set = FALSE;
        }

        if (!array_key_exists(PZ_Constants::PARAMETER_MERCHANT_TRANSACTION_ID, $this->params)
            || !PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_MERCHANT_TRANSACTION_ID])
        ) {
            $merchant_transaction_id_set = FALSE;
        }

        if (!($pz_transaction_id_set || $merchant_transaction_id_set)) {
            $return_obj["message"] = PZ_Constants::INVALID_TRANSACTION_ID;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_TRANSACTION_TYPE, $this->params)
            && (strlen($this->params[PZ_Constants::PARAMETER_TRANSACTION_TYPE]) > PZ_Constants::MAX_LEN_TRANSACTION_TYPE
            || !in_array($this->params[PZ_Constants::PARAMETER_TRANSACTION_TYPE],
                    PZ_Constants::PARAMETER_REQUIREMENTS(PZ_Constants::PARAMETER_TRANSACTION_TYPE))
            )
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_TRANSACTION_TYPE;
            return $return_obj;
        }

        $return_obj["status"] = TRUE;
        return $return_obj;
    }

    private function get_query_url()
    {
        $this->params = PZ_Utils::params_filter($this->params);
        $validate_result = $this->validate();
        if (empty($validate_result["status"])) {
            throw new Exception("Invalid params : " . $validate_result["message"]);
        }

        $hash = PZ_Utils::generate_hash($this->params);
        $this->set_hash($hash);
        $url = $this->query_api_url . "?" . http_build_query($this->params);
        return $url;
    }

    public function get_request_params()
    {
        return $this->params;
    }

    public function query()
    {
        $url = $this->get_query_url();
        $json_response_string = file_get_contents($url);
        return new QueryResponse($json_response_string);
    }
}

?>