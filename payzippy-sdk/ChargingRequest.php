<?php
require_once(dirname(__FILE__).'/Config.php');
require_once(dirname(__FILE__).'/Utils.php');
require_once(dirname(__FILE__).'/Constants.php');

class ChargingRequest
{
    private $params = array();
    private $charging_api_url;

    function __construct()
    {
        $this->set_merchant_id(PZ_Config::MERCHANT_ID);
        $this->set_merchant_key_id(PZ_Config::MERCHANT_KEY_ID);
        $this->set_transaction_type(PZ_Config::TRANSACTION_TYPE);
        $this->set_ui_mode(PZ_Config::UI_MODE);
        $this->set_hash_method(PZ_Config::HASH_METHOD);
        $this->set_currency(PZ_Config::CURRENCY);
        $this->set_callback_url(PZ_Config::CALLBACK_URL);
        $this->charging_api_url = PZ_Config::API_BASE . PZ_Config::API_CHARGING . "/" . PZ_Config::API_VERSION;
    }

    public function set_merchant_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_ID] = $value;
        return $this;
    }

    public function set_terminal_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_TERMINAL_ID] = $value;
        return $this;
    }

    public function set_buyer_email_address($value)
    {
        $this->params[PZ_Constants::PARAMETER_BUYER_EMAIL_ADDRESS] = $value;
        return $this;
    }

    public function set_timegmt()
    {
        $this->params[PZ_Constants::PARAMETER_TIMEGMT] = round(microtime(true) * 1000);
        return $this;
    }

    public function set_buyer_phone_no($value)
    {
        $this->params[PZ_Constants::PARAMETER_BUYER_PHONE_NO] = $value;
        return $this;
    }

    public function set_buyer_unique_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_BUYER_UNIQUE_ID] = $value;
        return $this;
    }

    public function set_shipping_address($value)
    {
        $this->params[PZ_Constants::PARAMETER_SHIPPING_ADDRESS] = $value;
        return $this;
    }

    public function set_shipping_city($value)
    {
        $this->params[PZ_Constants::PARAMETER_SHIPPING_CITY] = $value;
        return $this;
    }

    public function set_shipping_state($value)
    {
        $this->params[PZ_Constants::PARAMETER_SHIPPING_STATE] = $value;
        return $this;
    }

    public function set_shipping_zip($value)
    {
        $this->params[PZ_Constants::PARAMETER_SHIPPING_ZIP] = $value;
        return $this;
    }

    public function set_shipping_country($value)
    {
        $this->params[PZ_Constants::PARAMETER_SHIPPING_COUNTRY] = $value;
        return $this;
    }

    public function set_merchant_transaction_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_TRANSACTION_ID] = $value;
        return $this;
    }

    public function set_transaction_type($value)
    {
        $this->params[PZ_Constants::PARAMETER_TRANSACTION_TYPE] = $value;
        return $this;
    }

    public function set_transaction_amount($value)
    {
        $this->params[PZ_Constants::PARAMETER_TRANSACTION_AMOUNT] = $value;
        return $this;
    }

    public function set_payment_method($value)
    {
        $this->params[PZ_Constants::PARAMETER_PAYMENT_METHOD] = $value;
        return $this;
    }

    public function set_bank_name($value)
    {
        $this->params[PZ_Constants::PARAMETER_BANK_NAME] = $value;
        return $this;
    }

    public function set_emi_months($value)
    {
        $this->params[PZ_Constants::PARAMETER_EMI_MONTHS] = $value;
        return $this;
    }

    public function set_currency($value)
    {
        $this->params[PZ_Constants::PARAMETER_CURRENCY] = $value;
        return $this;
    }

    public function set_source($value)
    {
        $this->params[PZ_Constants::PARAMETER_SOURCE] = $value;
        return $this;
    }

    public function set_product_info1($value)
    {
        $this->params[PZ_Constants::PARAMETER_PRODUCT_INFO1] = $value;
        return $this;
    }

    public function set_product_info2($value)
    {
        $this->params[PZ_Constants::PARAMETER_PRODUCT_INFO2] = $value;
        return $this;
    }

    public function set_product_info3($value)
    {
        $this->params[PZ_Constants::PARAMETER_PRODUCT_INFO3] = $value;
        return $this;
    }

    public function set_ui_mode($value)
    {
        $this->params[PZ_Constants::PARAMETER_UI_MODE] = $value;
        return $this;
    }

    public function set_callback_url($value)
    {
        $this->params[PZ_Constants::PARAMETER_CALLBACK_URL] = $value;
        return $this;
    }

    public function set_billing_name($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_NAME] = $value;
        return $this;
    }

    public function set_billing_address($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_ADDRESS] = $value;
        return $this;
    }

    public function set_billing_city($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_CITY] = $value;
        return $this;
    }

    public function set_billing_state($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_STATE] = $value;
        return $this;
    }

    public function set_billing_zip($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_ZIP] = $value;
        return $this;
    }

    public function set_billing_country($value)
    {
        $this->params[PZ_Constants::PARAMETER_BILLING_COUNTRY] = $value;
        return $this;
    }

    public function set_min_sla($value)
    {
        $this->params[PZ_Constants::PARAMETER_MIN_SLA] = $value;
        return $this;
    }

    public function set_is_user_logged_in($value)
    {
        $this->params[PZ_Constants::PARAMETER_IS_USER_LOGGED_IN] = $value;
        return $this;
    }

    public function set_address_count($value)
    {
        $this->params[PZ_Constants::PARAMETER_ADDRESS_COUNT] = $value;
        return $this;
    }

    public function set_sales_channel($value)
    {
        $this->params[PZ_Constants::PARAMETER_SALES_CHANNEL] = $value;
        return $this;
    }

    public function set_item_total($value)
    {
        $this->params[PZ_Constants::PARAMETER_ITEM_TOTAL] = $value;
        return $this;
    }

    public function set_item_vertical($value)
    {
        $this->params[PZ_Constants::PARAMETER_ITEM_VERTICAL] = $value;
        return $this;
    }

    public function set_sms_notify_number($value)
    {
        $this->params[PZ_Constants::PARAMETER_SMS_NOTIFY_NUMBER] = $value;
        return $this;
    }

    public function set_udf1($value)
    {
        $this->params[PZ_Constants::PARAMETER_UDF1] = $value;
        return $this;
    }

    public function set_udf2($value)
    {
        $this->params[PZ_Constants::PARAMETER_UDF2] = $value;
        return $this;
    }

    public function set_udf3($value)
    {
        $this->params[PZ_Constants::PARAMETER_UDF3] = $value;
        return $this;
    }

    public function set_udf4($value)
    {
        $this->params[PZ_Constants::PARAMETER_UDF4] = $value;
        return $this;
    }

    public function set_udf5($value)
    {
        $this->params[PZ_Constants::PARAMETER_UDF5] = $value;
        return $this;
    }

    public function set_hash_method($value)
    {
        $this->params[PZ_Constants::PARAMETER_HASH_METHOD] = $value;
        return $this;
    }

    public function set_merchant_key_id($value)
    {
        $this->params[PZ_Constants::PARAMETER_MERCHANT_KEY_ID] = $value;
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

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_BUYER_EMAIL_ADDRESS],
            PZ_Constants::MAX_LEN_EMAIL)
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_EMAIL_ADDRESS;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_MERCHANT_TRANSACTION_ID],
            PZ_Constants::MAX_LEN_TRANSACTION_ID)
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_MERCHANT_TRANSACTION_ID;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_TRANSACTION_TYPE])) {
            $return_obj["message"] = PZ_Constants::INVALID_TRANSACTION_TYPE;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_TRANSACTION_AMOUNT])
            || !ctype_digit($this->params[PZ_Constants::PARAMETER_TRANSACTION_AMOUNT])
            || $this->params[PZ_Constants::PARAMETER_TRANSACTION_AMOUNT] <= 0
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_TRANSACTION_AMOUNT;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_PAYMENT_METHOD])
            || !in_array($this->params[PZ_Constants::PARAMETER_PAYMENT_METHOD],
                PZ_Constants::PARAMETER_REQUIREMENTS(PZ_Constants::PARAMETER_PAYMENT_METHOD))
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_PAYMENT_METHOD;
            return $return_obj;
        }

        if ($this->params[PZ_Constants::PARAMETER_PAYMENT_METHOD] == PZ_Constants::PAYMENT_MODE_EMI
            && (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_EMI_MONTHS])
                || !ctype_digit($this->params[PZ_Constants::PARAMETER_EMI_MONTHS])
                || $this->params[PZ_Constants::PARAMETER_EMI_MONTHS] <= 0
            )
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_EMI_MONTHS;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_CURRENCY])) {
            $return_obj["message"] = PZ_Constants::INVALID_CURRENCY;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_UI_MODE])
            || !in_array($this->params[PZ_Constants::PARAMETER_UI_MODE],
                PZ_Constants::PARAMETER_REQUIREMENTS(PZ_Constants::PARAMETER_UI_MODE))
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UI_MODE;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_HASH_METHOD])
            || !in_array($this->params[PZ_Constants::PARAMETER_HASH_METHOD],
                PZ_Constants::PARAMETER_REQUIREMENTS(PZ_Constants::PARAMETER_HASH_METHOD))
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_HASH_METHOD;
            return $return_obj;
        }

        if (!PZ_Utils::is_valid_parameter($this->params[PZ_Constants::PARAMETER_MERCHANT_KEY_ID],
            PZ_Constants::MAX_LEN_MERCHANT_KEY_ID)
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_MERCHANT_KEY_ID;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_BUYER_PHONE_NO, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_BUYER_PHONE_NO]) > PZ_Constants::MAX_LEN_BUYER_PHONE_NO
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_BUYER_PHONE_NO;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_BUYER_UNIQUE_ID, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_BUYER_UNIQUE_ID]) > PZ_Constants::MAX_LEN_BUYER_UNIQUE_ID
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_BUYER_UNIQUE_ID;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_SHIPPING_ADDRESS, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_SHIPPING_ADDRESS]) > PZ_Constants::MAX_LEN_SHIPPING_ADDRESS
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_SHIPPING_ADDRESS;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_SHIPPING_ZIP, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_SHIPPING_ZIP]) > PZ_Constants::MAX_LEN_SHIPPING_ZIP
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_SHIPPING_ZIP;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_SHIPPING_COUNTRY, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_SHIPPING_COUNTRY]) > PZ_Constants::MAX_LEN_SHIPPING_COUNTRY
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_SHIPPING_COUNTRY;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_SOURCE, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_SOURCE]) > PZ_Constants::MAX_LEN_SOURCE
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_SOURCE;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_CALLBACK_URL, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_CALLBACK_URL]) > PZ_Constants::MAX_LEN_CALLBACK_URL
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_CALLBACK_URL;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_BILLING_NAME, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_BILLING_NAME]) > PZ_Constants::MAX_LEN_BILLING_NAME
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_BILLING_NAME;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_BILLING_ADDRESS, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_BILLING_ADDRESS]) > PZ_Constants::MAX_LEN_BILLING_ADDRESS
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_BILLING_ADDRESS;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_BILLING_ZIP, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_BILLING_ZIP]) > PZ_Constants::MAX_LEN_BILLING_ZIP
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_BILLING_ZIP;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_MIN_SLA, $this->params)
            && (strlen($this->params[PZ_Constants::PARAMETER_MIN_SLA]) > PZ_Constants::MAX_LEN_MIN_SLA
                || !ctype_digit($this->params[PZ_Constants::PARAMETER_MIN_SLA])
                || $this->params[PZ_Constants::PARAMETER_MIN_SLA] <= 0
            )
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_MIN_SLA;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_ADDRESS_COUNT, $this->params)
            && (strlen($this->params[PZ_Constants::PARAMETER_ADDRESS_COUNT]) > PZ_Constants::MAX_LEN_ADDRESS_COUNT
                || !ctype_digit($this->params[PZ_Constants::PARAMETER_ADDRESS_COUNT])
                || $this->params[PZ_Constants::PARAMETER_ADDRESS_COUNT] <= 0
            )
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_ADDRESS_COUNT;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_ITEM_TOTAL, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_ITEM_TOTAL]) > PZ_Constants::MAX_LEN_ITEM_TOTAL
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_ITEM_TOTAL;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_ITEM_VERTICAL, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_ITEM_VERTICAL]) > PZ_Constants::MAX_LEN_ITEM_VERTICAL
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_ITEM_VERTICAL;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_TIMEGMT, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_TIMEGMT]) > PZ_Constants::MAX_LEN_TIMEGMT
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_TIMEGMT;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_UDF1, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_UDF1]) > PZ_Constants::MAX_LEN_UDF1
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UDF1;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_UDF2, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_UDF2]) > PZ_Constants::MAX_LEN_UDF2
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UDF2;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_UDF3, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_UDF3]) > PZ_Constants::MAX_LEN_UDF3
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UDF3;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_UDF4, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_UDF4]) > PZ_Constants::MAX_LEN_UDF4
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UDF4;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_UDF5, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_UDF5]) > PZ_Constants::MAX_LEN_UDF5
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_UDF5;
            return $return_obj;
        }

        if (array_key_exists(PZ_Constants::PARAMETER_TERMINAL_ID, $this->params)
            && strlen($this->params[PZ_Constants::PARAMETER_TERMINAL_ID]) > PZ_Constants::MAX_LEN_TERMINAL_ID
        ) {
            $return_obj["message"] = PZ_Constants::INVALID_TERMINAL_ID;
            return $return_obj;
        }

        $return_obj["status"] = TRUE;
        return $return_obj;
    }

    private function get_charging_api_url()
    {
        return $this->charging_api_url;
    }

    public function charge()
    {
        $response = array(
            "status" => "ERROR",
            "error_message" => "",
            "url" => "",
            "params" => ""
        );

        $this->params = PZ_Utils::params_filter($this->params);
        $validate_result = $this->validate();
        if (empty($validate_result['status'])) {
            $response["error_message"] = $validate_result['message'];
            return $response;
        }

        $hash = PZ_Utils::generate_hash($this->params);
        $this->set_hash($hash);

        switch ($this->params[PZ_Constants::PARAMETER_UI_MODE]) {
            case PZ_Constants::UI_MODE_IFRAME:
                $response["url"] = $this->get_charging_api_url() . "?" . http_build_query($this->params);
                break;
            case PZ_Constants::UI_MODE_REDIRECT:
                $response["url"] = $this->get_charging_api_url();
                $response["params"] = $this->params;
                break;
        }

        $response["status"] = "OK";
        return $response;
    }
}

?>