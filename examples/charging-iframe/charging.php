<?php
include dirname(__FILE__)."/../common/header.php";
require dirname(__FILE__)."/../../payzippy-sdk/ChargingRequest.php";

// Convert the "transaction_amount" to Paisa.
$transaction_amount = $_POST["transaction_amount"];

// Get an instance of ChargingRequest.
$pz_charging = new ChargingRequest();

// Set all the parameters that you want to send in the request.
// You can also overwrite the default parameters set in the Config.php file.
$pz_charging->set_buyer_email_address($_POST["buyer_email_address"])
    ->set_merchant_transaction_id($_POST["merchant_transaction_id"])
    ->set_transaction_amount($transaction_amount)
    ->set_payment_method($_POST["payment_method"])
    ->set_bank_name($_POST["bank_name"])
    ->set_ui_mode($_POST["ui_mode"]);

// Finally, call the charge function, to get the charging_arr.
// It has the keys - "status", "error_message", "url", "params".
$charging_object = $pz_charging->charge();

// If there was an error while getting the $charging_object, the value
// "error" will be set to "ERROR".
if ($charging_object["status"] != "OK") {
    echo '<p>Error: ', $charging_object["error_message"], "</p>";
    exit();
}
?>

<!--
For integration using IFRAME mode, create a new HTML IFRAME element
and set its "src" attribute to $charging_object["url"]
 -->
<h3>Integration using iframe</h3>
<iframe src="<?php echo $charging_object["url"]; ?>" height="60%" width="100%"></iframe>

<?php
include "../common/footer.php";
?>
