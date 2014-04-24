<?php
include dirname(__FILE__)."/../common/header.php";
require dirname(__FILE__)."/../../payzippy-sdk/ChargingResponse.php";

// This file corresponds to your Charging Response Callback URL.

// Create an instance of the ChargingResponse using the GET parameters
// returned to the callback URL.
$pz_charging_response = new ChargingResponse(array_merge($_POST,$_GET));

$transaction_success = $pz_charging_response->is_transaction_successful();
$transaction_status = $pz_charging_response->get_transaction_status();
$transaction_response_message = $pz_charging_response->get_transaction_response_message();
$transaction_response_code = $pz_charging_response->get_transaction_response_code();

if ($transaction_success) {
    echo "<p class='text-success'><b>";
} else {
    echo "<p class='text-error'><b>";
}

echo "Transaction Status : {$transaction_status}<br/>";
echo "Transaction Response Code : {$transaction_response_code}<br/>";
echo "Transaction Response Message : {$transaction_response_message}<br/>";
echo "</b></p>";

// To check the validity of the response, call the validate function on
// the ChargingResponse object. It verifies the hash returned in the response.
$hash_match = $pz_charging_response->validate();
if ($hash_match) {
    echo "<p class='text-success'><b>Hash matches. The response is valid.</b></p>";
} else {
    echo "<p class='text-error'><b>Hash mismatch. Response is invalid</b></p>";
}

echo "<h4>Charging Response</h4>";
echo "Merchant ID: {$pz_charging_response->get_merchant_id()}<br/>";
echo "Merchant Key ID: {$pz_charging_response->get_merchant_key_id()}<br/>";
echo "Merchant Transaction ID: {$pz_charging_response->get_merchant_transaction_id()}<br/>";
echo "PayZippy Transaction ID: {$pz_charging_response->get_payzippy_transaction_id()}<br/>";
echo "Transaction Status: {$pz_charging_response->get_transaction_status()}<br/>";
echo "Transaction Response Code: {$pz_charging_response->get_transaction_response_code()}<br/>";
echo "Transaction Response Message: {$pz_charging_response->get_transaction_response_message()}<br/>";
echo "Payment Method: {$pz_charging_response->get_payment_method()}<br/>";
echo "Bank Name: {$pz_charging_response->get_bank_name()}<br/>";
echo "EMI Months: {$pz_charging_response->get_emi_months()}<br/>";
echo "Transaction Amount: {$pz_charging_response->get_transaction_amount()}<br/>";
echo "Transaction Currency: {$pz_charging_response->get_transaction_currency()}<br/>";
echo "Transaction Time: {$pz_charging_response->get_transaction_time()}<br/>";
echo "Fraud Action: {$pz_charging_response->get_fraud_action()}<br/>";
echo "Fraud Details: {$pz_charging_response->get_fraud_details()}<br/>";
echo "is international : {$pz_charging_response->get_is_international()}<br/>";
echo "Version: {$pz_charging_response->get_version()}<br/>";
echo "UDF1: {$pz_charging_response->get_udf1()}<br/>";
echo "UDF2: {$pz_charging_response->get_udf2()}<br/>";
echo "UDF3: {$pz_charging_response->get_udf3()}<br/>";
echo "UDF4: {$pz_charging_response->get_udf4()}<br/>";
echo "UDF5: {$pz_charging_response->get_udf5()}<br/>";
echo "Hash Method: {$pz_charging_response->get_hash_method()}<br/>";
echo "Hash: {$pz_charging_response->get_hash()}<br/>";

include "../common/footer.php";
?>
