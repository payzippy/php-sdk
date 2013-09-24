<?php
require_once("Utils.php");
require_once("Constants.php");

class QueryTransactionResponse
{
    private $params = array();

    function __construct($response)
    {
        $this->params = $response;
    }

    public function get_merchant_transaction_id()
    {
        return $this->params[Constants::PARAMETER_MERCHANT_TRANSACTION_ID];
    }

    public function get_payzippy_transaction_id()
    {
        return $this->params[Constants::PARAMETER_PAYZIPPY_TRANSACTION_ID];
    }

    public function get_bank_arn()
    {
        return $this->params[Constants::PARAMETER_BANK_ARN];
    }

    public function get_transaction_amount()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_AMOUNT];
    }

    public function get_transaction_currency()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_CURRENCY];
    }

    public function get_transaction_time()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_TIME];
    }

    public function get_payment_method()
    {
        return $this->params[Constants::PARAMETER_PAYMENT_METHOD];
    }

    public function get_emi_months()
    {
        return $this->params[Constants::PARAMETER_EMI_MONTHS];
    }

    public function get_transaction_status()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_STATUS];
    }

    public function get_transaction_type()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_TYPE];
    }

    public function get_transaction_response_code()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_RESPONSE_CODE];
    }

    public function get_transaction_response_message()
    {
        return $this->params[Constants::PARAMETER_TRANSACTION_RESPONSE_MESSAGE];
    }

    public function get_fraud_action()
    {
        return $this->params[Constants::PARAMETER_FRAUD_ACTION];
    }

    public function get_fraud_details()
    {
        return $this->params[Constants::PARAMETER_FRAUD_DETAILS];
    }

    public function get_response_params()
    {
        return $this->params;
    }
}

?>