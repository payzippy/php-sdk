<?php
require_once("Utils.php");
require_once("Constants.php");
require_once("RefundTransactionResponse.php");

class RefundResponse
{
    private $params = array();
    private $transaction_response = array();

    function __construct($response)
    {
        $this->params = json_decode($response, true);
        $this->transaction_response = new RefundTransactionResponse($this->params["data"]);
    }

    public function get_status_code()
    {
        return $this->params[Constants::PARAMETER_STATUS_CODE];
    }

    public function get_status_message()
    {
        return $this->params[Constants::PARAMETER_STATUS_MESSAGE];
    }

    public function get_error_code()
    {
        return $this->params[Constants::PARAMETER_ERROR_CODE];
    }

    public function get_error_message()
    {
        return $this->params[Constants::PARAMETER_ERROR_MESSAGE];
    }

    public function get_merchant_id()
    {
        return $this->params[Constants::PARAMETER_MERCHANT_ID];
    }

    public function get_merchant_key_id()
    {
        return $this->params[Constants::PARAMETER_MERCHANT_KEY_ID];
    }

    public function get_hash_method()
    {
        return $this->params[Constants::PARAMETER_HASH_METHOD];
    }

    public function get_hash()
    {
        return $this->params[Constants::PARAMETER_HASH];
    }

    public function validate()
    {
        $hash = Utils::generate_hash($this->get_response_params());
        $hash_match = $hash == $this->get_hash() ? TRUE : FALSE;
        return $hash_match;
    }

    public function get_transaction_response()
    {
        return $this->transaction_response;
    }

    public function get_response_params()
    {
        return $this->params;
    }
}

?>