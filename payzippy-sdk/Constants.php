<?php
class PZ_Constants
{
    private static $PARAMETER_REQUIREMENTS = array(
        "transaction_type" => array("SALE", "REFUND"),
        "hash_method" => array("SHA256", "MD5"),
        "payment_method" => array("CREDIT", "DEBIT", "NET", "EMI", "PAYZIPPY", "CARD_CAPTURE"),
        "ui_mode" => array("REDIRECT", "IFRAME"),
        "currency" => array("INR")
    );

    public static function PARAMETER_REQUIREMENTS($parameter_name)
    {
        return self::$PARAMETER_REQUIREMENTS[$parameter_name];
    }

    private static $PARAMETER_VALIDREGEX = array(
        "merchant_transaction_id" => "[A-Za-z0-9_:\\*\\|\\.\\-\\#$@]+"
    );

    private static $blacklisted_params = array(
       // "blacklist_parameter_1",
       // "blacklist_parameter_2",
    );

    public static function blacklisted_params()
    {
        return self::$blacklisted_params;
    }

    const INVALID_BANK_NAME = "BANK NAME NOT SET";
    const INVALID_CURRENCY = "CURRENCY NOT SET";
    const INVALID_EMAIL_ADDRESS = "INVALID EMAIL ADDRESS";
    const INVALID_EMI_MONTHS = "INVALID EMI MONTHS";
    const INVALID_HASH_METHOD = "INVALID HASH METHOD";
    const INVALID_MERCHANT_ID = "INVALID MERCHANT ID";
    const INVALID_MERCHANT_TRANSACTION_ID = "INVALID MERCHANT TRANSACTION ID";
    const INVALID_PAYMENT_METHOD = "INVALID PAYMENT METHOD";
    const INVALID_REFUND_AMOUNT = "INVALID REFUND AMOUNT";
    const INVALID_TRANSACTION_AMOUNT = "INVALID TRANSACTION AMOUT";
    const INVALID_TRANSACTION_ID = "TRANSACTION ID NOT SET";
    const INVALID_MERCHANT_KEY_ID = "INVALID MERCHANT KEY ID";
    const INVALID_UI_MODE = "INVALID UI MODE";
    const INVALID_BUYER_PHONE_NO = "INVALID_BUYER_PHONE_NO";
    const INVALID_BUYER_UNIQUE_ID = "INVALID_BUYER_UNIQUE_ID";
    const INVALID_SHIPPING_ADDRESS = "INVALID_SHIPPING_ADDRESS";
    const INVALID_SHIPPING_CITY = "INVALID_SHIPPING_CITY";
    const INVALID_SHIPPING_STATE = "INVALID_SHIPPING_STATE";
    const INVALID_SHIPPING_ZIP = "INVALID_SHIPPING_ZIP";
    const INVALID_SHIPPING_COUNTRY = "INVALID_SHIPPING_COUNTRY";
    const INVALID_SOURCE = "INVALID_SOURCE";
    const INVALID_CALLBACK_URL = "INVALID_CALLBACK_URL";
    const INVALID_BILLING_NAME = "INVALID_BILLING_NAME";
    const INVALID_BILLING_ADDRESS = "INVALID_BILLING_ADDRESS";
    const INVALID_BILLING_CITY = "INVALID_BILLING_CITY";
    const INVALID_BILLING_STATE = "INVALID_BILLING_STATE";
    const INVALID_BILLING_ZIP = "INVALID_BILLING_ZIP";
    const INVALID_MIN_SLA = "INVALID_MIN_SLA";
    const INVALID_ADDRESS_COUNT = "INVALID_ADDRESS_COUNT";
    const INVALID_ITEM_TOTAL = "INVALID_ITEM_TOTAL";
    const INVALID_ITEM_VERTICAL = "INVALID_ITEM_VERTICAL";
    const INVALID_TIMEGMT = "INVALID_TIMEGMT";
    const INVALID_UDF1 = "INVALID_UDF1";
    const INVALID_UDF2 = "INVALID_UDF2";
    const INVALID_UDF3 = "INVALID_UDF3";
    const INVALID_UDF4 = "INVALID_UDF4";
    const INVALID_UDF5 = "INVALID_UDF5";
    const INVALID_TERMINAL_ID = "INVALID_TERMINAL_ID";
    const INVALID_TRANSACTION_TYPE = "INVALID_TRANSACTION_TYPE";
    const INVALID_REFUND_REASON = "INVALID_REFUND_REASON";
    const INVALID_REFUNDED_BY = "INVALID_REFUNDED_BY";
    const INVALID_CARD_NUMBER = "INVALID_CARD_NUMBER";
    const INVALID_CVV = "INVALID_CVV";
    const INVALID_EXPIRY_MONTH = "INVALID_EXPIRY_MONTH";
    const INVALID_EXPIRY_YEAR = "INVALID_EXPIRY_YEAR";

    const MAX_LEN_MERCHANT_ID = 30;
    const MAX_LEN_MERCHANT_KEY_ID = 20;
    const MAX_LEN_MERCHANT_TRANSACTION_ID = 100;
    const MAX_LEN_EMAIL = 100;
    const MAX_LEN_TRANSACTION_ID = 100;
    const MAX_LEN_BUYER_PHONE_NO = 50;
    const MAX_LEN_BUYER_UNIQUE_ID = 100;
    const MAX_LEN_SHIPPING_ADDRESS = 100;
    const MAX_LEN_SHIPPING_CITY = 50;
    const MAX_LEN_SHIPPING_STATE = 50;
    const MAX_LEN_SHIPPING_ZIP = 50;
    const MAX_LEN_SHIPPING_COUNTRY = 50;
    const MAX_LEN_SOURCE = 20;
    const MAX_LEN_CALLBACK_URL = 256;
    const MAX_LEN_BANK_NAME = 100;
    const MAX_LEN_BILLING_NAME = 255;
    const MAX_LEN_BILLING_ADDRESS = 100;
    const MAX_LEN_BILLING_CITY = 50;
    const MAX_LEN_BILLING_STATE = 50;
    const MAX_LEN_BILLING_ZIP = 50;
    const MAX_LEN_BUYER_EMAIL_ADDRESS = 100;
    const MAX_LEN_MIN_SLA = 100;
    const MAX_LEN_ADDRESS_COUNT = 100;
    const MAX_LEN_ITEM_TOTAL = 100;
    const MAX_LEN_ITEM_VERTICAL = 100;
    const MAX_LEN_TIMEGMT = 13;
    const MAX_LEN_UDF1 = 100;
    const MAX_LEN_UDF2 = 100;
    const MAX_LEN_UDF3 = 100;
    const MAX_LEN_UDF4 = 100;
    const MAX_LEN_UDF5 = 100;
    const MAX_LEN_TERMINAL_ID = 6;
    const MAX_LEN_TRANSACTION_TYPE = 20;
    const MAX_LEN_REFUND_REASON = 512;
    const MAX_LEN_REFUNDED_BY = 100;
    const MAX_LEN_CARD_NUMBER = 20;
    const MAX_LEN_CVV = 4;
    const MAX_LEN_EXPIRY_MONTH = 2;
    const MAX_LEN_EXPIRY_YEAR = 4;
    const MAX_LEN_NAME_ON_CARD = 100;

    const PARAMETER_ADDRESS_COUNT = "address_count";
    const PARAMETER_BANK_NAME = "bank_name";
    const PARAMETER_BILLING_ADDRESS = "billing_address";
    const PARAMETER_BILLING_CITY = "billing_city";
    const PARAMETER_BILLING_COUNTRY = "billing_country";
    const PARAMETER_BILLING_NAME = "billing_name";
    const PARAMETER_BILLING_STATE = "billing_state";
    const PARAMETER_BILLING_ZIP = "billing_zip";
    const PARAMETER_BUYER_EMAIL_ADDRESS = "buyer_email_address";
    const PARAMETER_BUYER_PHONE_NO = "buyer_phone_no";
    const PARAMETER_BUYER_UNIQUE_ID = "buyer_unique_id";
    const PARAMETER_CALLBACK_URL = "callback_url";
    const PARAMETER_CURRENCY = "currency";
    const PARAMETER_EMI_MONTHS = "emi_months";
    const PARAMETER_HASH_METHOD = "hash_method";
    const PARAMETER_IS_USER_LOGGED_IN = "is_user_logged_in";
    const PARAMETER_ITEM_TOTAL = "item_total";
    const PARAMETER_ITEM_VERTICAL = "item_vertical";
    const PARAMETER_MERCHANT_ID = "merchant_id";
    const PARAMETER_MERCHANT_KEY_ID = "merchant_key_id";
    const PARAMETER_MERCHANT_TRANSACTION_ID = "merchant_transaction_id";
    const PARAMETER_MIN_SLA = "min_sla";
    const PARAMETER_PAYMENT_METHOD = "payment_method";
    const PARAMETER_PRODUCT_INFO1 = "product_info1";
    const PARAMETER_PRODUCT_INFO2 = "product_info2";
    const PARAMETER_PRODUCT_INFO3 = "product_info3";
    const PARAMETER_SALES_CHANNEL = "sales_channel";
    const PARAMETER_SHIPPING_ADDRESS = "shipping_address";
    const PARAMETER_SHIPPING_CITY = "shipping_city";
    const PARAMETER_SHIPPING_COUNTRY = "shipping_country";
    const PARAMETER_SHIPPING_STATE = "shipping_state";
    const PARAMETER_SHIPPING_ZIP = "shipping_zip";
    const PARAMETER_SMS_NOTIFY_NUMBER = "sms_notify_number";
    const PARAMETER_SOURCE = "source";
    const PARAMETER_TERMINAL_ID = "terminal_id";
    const PARAMETER_TRANSACTION_AMOUNT = "transaction_amount";
    const PARAMETER_TRANSACTION_TYPE = "transaction_type";
    const PARAMETER_UDF1 = "udf1";
    const PARAMETER_UDF2 = "udf2";
    const PARAMETER_UDF3 = "udf3";
    const PARAMETER_UDF4 = "udf4";
    const PARAMETER_UDF5 = "udf5";
    const PARAMETER_UI_MODE = "ui_mode";
    const PARAMETER_TIMEGMT = "timegmt";
    const PARAMETER_HASH = "hash";

    const PARAMETER_CARD_NUMBER = "card_number";
    const PARAMETER_CREATE_PAYZIPPY_ACCOUNT = "create_payzippy_account";
    const PARAMETER_CVV = "cvv";
    const PARAMETER_EXPIRY_MONTH = "expiry_month";
    const PARAMETER_EXPIRY_YEAR = "expiry_year";
    const PARAMETER_NAME_ON_CARD = "name_on_card";

    const PARAMETER_BANK_ARN = "bank_arn";
    const PARAMETER_ERROR_CODE = "error_code";
    const PARAMETER_ERROR_MESSAGE = "error_message";
    const PARAMETER_FRAUD_ACTION = "fraud_action";
    const PARAMETER_FRAUD_DETAILS = "fraud_details";
    const PARAMETER_IS_INTERNATIONAL = "is_international";
    const PARAMETER_PAYZIPPY_SALE_TRANSACTION_ID = "payzippy_sale_transaction_id";
    const PARAMETER_PAYZIPPY_TRANSACTION_ID = "payzippy_transaction_id";
    const PARAMETER_REFUND_AMOUNT = "refund_amount";
    const PARAMETER_REFUND_REASON = "refund_reason";
    const PARAMETER_REFUNDED_BY = "refunded_by";
    const PARAMETER_STATUS_CODE = "status_code";
    const PARAMETER_STATUS_MESSAGE = "status_message";
    const PARAMETER_TRANSACTION_CURRENCY = "transaction_currency";
    const PARAMETER_TRANSACTION_RESPONSE_CODE = "transaction_response_code";
    const PARAMETER_TRANSACTION_RESPONSE_MESSAGE = "transaction_response_message";
    const PARAMETER_TRANSACTION_STATUS = "transaction_status";
    const PARAMETER_TRANSACTION_TIME = "transaction_time";
    const PARAMETER_VERSION = "version";

    const PAYMENT_MODE_EMI = "EMI";
    const PAYMENT_MODE_NET = "NET";
    const PAYMENT_MODE_CARD_CAPTURE = "CARD_CAPTURE";
    const RESPONSE_SUCCESS = "SUCCESS";

    const UI_MODE_IFRAME = "IFRAME";
    const UI_MODE_REDIRECT = "REDIRECT";
}

?>
