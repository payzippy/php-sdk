This is the PHP SDK for PayZippy Merchant API.

Setup Instructions
==================

1. Clone the repository to get php-sdk folder having index.php file, examples and payzippy-sdk folders. 

2. To use the sample code, copy the payzippy files & directories to a directory of your choice. It can be server's document root of you web server. (i.e. where your current php files, for your website, are stored)

3. Open php-sdk/payzippy-sdk/Config.php file and set up your config details such as Merchant ID, Secret Key, Callback URL. The examples won't work without setting up the config details. You can also set the UI mode to redirect or iframe (details in point 6).

4. For the examples included, the callback url should point to the charging_response.php file under examples/response folder. So, if you access your site locally as http://localhost/, then callback url http://localhost/php-sdk/examples/response/charging_response.php

5. You can see SDKs brief documentation by browsing to http://localhost/php-sdk. All the example will be available there in the "SDK Integration Examples" link in the header.

6. There are 3 examples included for using the Charging API.

	charging-redirect - Using this example, when the user clicks on Buy button, he would be redirected to Payzippy's website to enter his card details.

	charging-iframe - Using this example, when the user clicks on Buy button, the form to enter his card details would be displayed inside your HTML iframe element.

	charging-master - This is the master example and has all parameters that you can pass to the charging API.

7. Further documentation on creating a charging request, parsing the response are included in the corresponding code files.


```
Sample code snippet to create a charging request object is shown below:

//include the charging ChargingRequest.php
<?php require dirname(__FILE__)."payzippy-sdk/ChargingRequest.php"

//get an instance of ChargingRequest.
$pz_charging = new ChargingRequest();

//Set all the parameters that you want to send in the chargingrequest object.
//You can also overwrite the default parameters set in the Config.php file.
$pz_charging->set_buyer_email_address($_POST["buyer_email_address"])
->set_merchant_transaction_id($_POST["merchant_transaction_id"])
->set_transaction_amount($_POST[transaction_amount])
->set_payment_method($_POST["payment_method"])
->set_bank_name($_POST["bank_name"])
->set_ui_mode($_POST["ui_mode"])
->set_item_total($_POST["item_total"])
->set_item_vertical($_POST["item_vertical])
->set_buyer_phone_no($_POST["buyer_phone_no"])
//similarly set all the mandatory parameters as shown above
//The parameters item_vertical,item_total and buyer_phone_no are now mandatory.Pass these parameters for all the transactions(both domestic and international).

//and to set any optional parameter in the chargingrequest object
->set_buyer_phone_no($_POST["buyer_phone_number"])
->set_shipping_address($_POST["shipping_address"])

//For integration using REDIRECT mode, create a new HTML form, with hidden elements.
//Set its "action" attribute to $charging_object["url"].
//Create hidden input elements for every key, value pair in $charging_object["params"].
<form method="POST" action="<?php echo $charging_object["url"]?>" id="payzippyForm">
<?php
foreach($charging_object["params"] as $key => $value) {
echo "";
}
?>
</form>
//and then the script to submit the form.
<script>
document.getElementById("payzippyForm").submit();
</script>

//For integration using IFRAME mode, create a new HTML IFRAME element
//and set its "src" attribute to $charging_object["url"] 
<iframe src="<?php echo $charging_object["url"]?>" height="60%" width="100%">
</iframe>
```
Further documentation on creating a charging request, parsing the response are included in the corresponding code files
