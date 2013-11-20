<?php
include dirname(__FILE__)."/../common/header.php";
require dirname(__FILE__)."/../../payzippy-sdk/RefundRequest.php";

try {
    $pz_refund_request = new RefundRequest();
    $pz_refund_request->set_merchant_key_id($_POST["merchant_key_id"])
        ->set_payzippy_sale_transaction_id($_POST["payzippy_sale_transaction_id"])
        ->set_merchant_transaction_id($_POST["merchant_transaction_id"])
        ->set_hash_method($_POST["hash_method"])
        ->set_refund_amount($_POST["refund_amount"])
        ->set_refund_reason($_POST["refund_reason"])
        ->set_refunded_by($_POST["refunded_by"])
        ->set_udf1($_POST["udf1"])
        ->set_udf2($_POST["udf2"])
        ->set_udf3($_POST["udf3"])
        ->set_udf4($_POST["udf4"])
        ->set_udf5($_POST["udf5"]);

    $pz_refund_response = $pz_refund_request->refund();
    $hash_match = $pz_refund_response->validate();
    if ($hash_match) {
        echo "<p class='text-success'><b>Hash matches. The response is valid.</b></p>";
    } else {
        echo "<p class='text-error'><b>Hash mismatch. Response is invalid</b></p>";
    }

    echo "Status Code: {$pz_refund_response->get_status_code()}<br/>";
    echo "Status Message: {$pz_refund_response->get_status_message()}<br/>";
    echo "Error Code: {$pz_refund_response->get_error_code()}<br/>";
    echo "Error Message: {$pz_refund_response->get_error_message()}<br/>";
    echo "Merchant ID: {$pz_refund_response->get_merchant_id()}<br/>";
    echo "Merchant Key ID: {$pz_refund_response->get_merchant_key_id()}<br/>";
    echo "Hash Method: {$pz_refund_response->get_hash_method()}<br/>";
    echo "Hash: {$pz_refund_response->get_hash()}<br/>";
    echo "<br/>";

    echo "<h4>Refund Response</h4>";
    $response = $pz_refund_response->get_transaction_response();

    echo "Merchant Transaction ID: {$response->get_merchant_transaction_id()}<br/>";
    echo "Payzippy Transaction ID: {$response->get_payzippy_transaction_id()}<br/>";
    echo "Refund Amount: {$response->get_refund_amount()}<br/>";
    echo "Refund Status: {$response->get_refund_status()}<br/>";
    echo "Refund Response Code: {$response->get_refund_response_code()}<br/>";
    echo "Refund Response Message: {$response->get_refund_response_message()}<br/>";
    echo "Bank ARN: {$response->get_bank_arn()}<br/>";
    echo "Currency: {$response->get_currency()}<br/>";
    echo "Transaction Time: {$response->get_transaction_time()}<br/>";
    echo "UDF1: {$response->get_udf1()}<br/>";
    echo "UDF2: {$response->get_udf2()}<br/>";
    echo "UDF3: {$response->get_udf3()}<br/>";
    echo "UDF4: {$response->get_udf4()}<br/>";
    echo "UDF5: {$response->get_udf5()}<br/>";
    echo "<hr/>";
} catch (Exception $e) {
    echo '<p>Caught exception: ', $e->getMessage(), "</p>";
}

include "../common/footer.php";
?>