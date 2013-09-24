<?php
require_once("Utils.php");

class RefundTransactionResponse
{
    private $params = array();

    function __construct($response)
    {
        $this->params = $response;
    }

    public function get_merchant_transaction_id()
    {
        return $this->params["merchant_transaction_id"];
    }

    public function get_payzippy_transaction_id()
    {
        return $this->params["payzippy_transaction_id"];
    }

    public function get_refund_amount()
    {
        return $this->params["refund_amount"];
    }

    public function get_refund_status()
    {
        return $this->params["refund_status"];
    }

    public function get_refund_response_code()
    {
        return $this->params["refund_response_code"];
    }

    public function get_refund_response_message()
    {
        return $this->params["refund_response_message"];
    }

    public function get_bank_arn()
    {
        return $this->params["bank_arn"];
    }

    public function get_transaction_time()
    {
        return $this->params["transaction_time"];
    }

    public function get_currency()
    {
        return $this->params["currency"];
    }

    public function get_udf1()
    {
        return $this->params["udf1"];
    }

    public function get_udf2()
    {
        return $this->params["udf2"];
    }

    public function get_udf3()
    {
        return $this->params["udf3"];
    }

    public function get_udf4()
    {
        return $this->params["udf4"];
    }

    public function get_udf5()
    {
        return $this->params["udf5"];
    }

    public function get_response_params()
    {
        return $this->params;
    }
}

?>