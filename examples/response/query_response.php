<?php
include dirname(__FILE__)."/../common/header.php";
require dirname(__FILE__)."/../../payzippy-sdk/QueryRequest.php";

try {
    // To perform a query, get an instance of the QueryRequest
    $pz_query_request = new QueryRequest();

    // Set all the parameters that you want to send in the request.
    // You can also overwrite the default parameters set in the Config.php file.
    $pz_query_request->set_merchant_transaction_id($_GET["merchant_transaction_id"])
        ->set_payzippy_transaction_id($_GET["payzippy_transaction_id"])
        ->set_transaction_type($_GET["transaction_type"])
        ->set_merchant_key_id($_GET["merchant_key_id"])
        ->set_hash_method($_GET["hash_method"]);

    // Finally, call the query function. It returns an instance of QueryResponse.
    $pz_query_response = $pz_query_request->query();

    // Call the validate function, to check the integrity of the response
    // by verifying the hash returned
    $hash_match = $pz_query_response->validate();
    if ($hash_match) {
        echo "<p class='text-success'><b>Hash matches. The response is valid.</b></p>";
    } else {
        echo "<p class='text-error'><b>Hash mismatch. Response is invalid</b></p>";
    }

    echo "Status Code: {$pz_query_response->get_status_code()}<br/>";
    echo "Status Message: {$pz_query_response->get_status_message()}<br/>";
    echo "Error Code: {$pz_query_response->get_error_code()}<br/>";
    echo "Error Message: {$pz_query_response->get_error_message()}<br/>";
    echo "Merchant ID: {$pz_query_response->get_merchant_id()}<br/>";
    echo "Merchant Key ID: {$pz_query_response->get_merchant_key_id()}<br/>";
    echo "Hash Method: {$pz_query_response->get_hash_method()}<br/>";
    echo "Hash: {$pz_query_response->get_hash()}<br/>";
    echo "<br/>";

    // Calling get_transaction_responses() on the QueryResponse object
    // returns an array of QueryTransactionResponse objects. QueryTransactionResponse
    // objects corresponds to single/multiple sale/refund transactions.
    echo "<h4>Transaction Response(s)</h4>";
    foreach ($pz_query_response->get_transaction_responses() as $key => $response) {
        echo "Merchant Transaction ID: {$response->get_merchant_transaction_id()}<br/>";
        echo "Payzippy Transaction ID: {$response->get_payzippy_transaction_id()}<br/>";
        echo "Bank ARN: {$response->get_bank_arn()}<br/>";
        echo "Transaction Amount: {$response->get_transaction_amount()}<br/>";
        echo "Transaction Currency: {$response->get_transaction_currency()}<br/>";
        echo "Transaction Time: {$response->get_transaction_time()}<br/>";
        echo "Payment Method: {$response->get_payment_method()}<br/>";
        echo "EMI Months: {$response->get_emi_months()}<br/>";
        echo "Transaction Type: {$response->get_transaction_type()}<br/>";
        echo "Transaction Status: {$response->get_transaction_status()}<br/>";
        echo "Transaction Response Code: {$response->get_transaction_response_code()}<br/>";
        echo "Transaction Response Message: {$response->get_transaction_response_message()}<br/>";
        echo "Fraud Action: {$response->get_fraud_action()}<br/>";
        echo "Fraud Details: {$response->get_fraud_details()}<br/>";
        echo "<hr/>";
    }

} catch (Exception $e) {
    echo '<p>Caught exception: ', $e->getMessage(), "</p>";
}

include "../common/footer.php";
?>
