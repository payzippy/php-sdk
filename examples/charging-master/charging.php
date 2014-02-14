<?php
include dirname(__FILE__)."/../common/header.php";
require dirname(__FILE__)."/../../payzippy-sdk/ChargingRequest.php";

// Get an instance of ChargingRequest.
$pz_charging = new ChargingRequest();

// Set all the parameters that you want to send in the request.
// You can also overwrite the default parameters set in the Config.php file.
$pz_charging->set_terminal_id($_POST["terminal_id"])
    ->set_merchant_transaction_id($_POST["merchant_transaction_id"])
    ->set_udf1($_POST["udf1"])
    ->set_udf2($_POST["udf2"])
    ->set_udf3($_POST["udf3"])
    ->set_udf4($_POST["udf4"])
    ->set_udf5($_POST["udf5"])
    ->set_ui_mode($_POST["ui_mode"])
    ->set_buyer_email_address($_POST["buyer_email_address"])
    ->set_buyer_phone_no($_POST["buyer_phone_no"])
    ->set_buyer_unique_id($_POST["buyer_unique_id"])
    ->set_shipping_address($_POST["shipping_address"])
    ->set_shipping_city($_POST["shipping_city"])
    ->set_shipping_state($_POST["shipping_state"])
    ->set_shipping_zip($_POST["shipping_zip"])
    ->set_shipping_country($_POST["shipping_country"])
    ->set_billing_name($_POST["billing_name"])
    ->set_shipping_address($_POST["shipping_address"])
    ->set_billing_city($_POST["billing_city"])
    ->set_billing_state($_POST["billing_state"])
    ->set_billing_zip($_POST["billing_zip"])
    ->set_billing_country($_POST["billing_country"])
    ->set_transaction_type($_POST["transaction_type"])
    ->set_transaction_amount($_POST["transaction_amount"])
    ->set_payment_method($_POST["payment_method"])
    ->set_emi_months($_POST["emi_months"])
    ->set_currency($_POST["currency"])
    ->set_bank_name($_POST["bank_name"])
    ->set_min_sla($_POST["min_sla"])
    ->set_is_user_logged_in($_POST["is_user_logged_in"])
    ->set_address_count($_POST["address_count"])
    ->set_sales_channel($_POST["sales_channel"])
    ->set_item_total($_POST["item_total"])
    ->set_sms_notify_number($_POST["sms_notify_number"])
    ->set_source($_POST["source"])
    ->set_product_info1($_POST["product_info1"])
    ->set_product_info2($_POST["product_info2"])
    ->set_product_info3($_POST["product_info3"])
    ->set_hash_method($_POST["hash_method"]);

// Finally, call the charge function, to get the charging_object.
// It has the keys - "status", "error_message", "url", "params".
$charging_arr = $pz_charging->charge();

// If there was an error while getting the $charging_object, the value
// "error" will be set to "ERROR".
if ($charging_arr["status"] != "OK"){
    echo '<p>Error: ', $charging_arr["error_message"], "</p>";
    exit();
}
?>

<!--
For integration using IFRAME mode, create a new HTML IFRAME element
and set its "src" attribute to $charging_object["url"]
 -->
<h3>Integration using iframe</h3>
<iframe src="<?php echo $charging_arr["url"]; ?>" height="60%" width="100%"></iframe>

<?php
include dirname(__FILE__)."/../common/footer.php";
?>
