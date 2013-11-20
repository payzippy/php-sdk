<?php
require dirname(__FILE__)."/../../payzippy-sdk/ChargingRequest.php";

// Get an instance of ChargingRequest.
$pz_charging = new ChargingRequest();

// Set all the parameters that you want to send in the request.
// You can also overwrite the default parameters set in the Config.php file.
$pz_charging->set_buyer_email_address($_POST["buyer_email_address"])
    ->set_merchant_transaction_id($_POST["merchant_transaction_id"])
    ->set_transaction_amount($_POST["transaction_amount"])
    ->set_payment_method($_POST["payment_method"])
    ->set_ui_mode($_POST["ui_mode"]);

// Finally, call the charge function, to get the charging_object.
// It has the keys - "status", "error_message", "url", "params".
$charging_object = $pz_charging->charge();

// If there was an error while getting the $charging_object, the value
// "error" will be set to "ERROR".
if ($charging_object["status"] != "OK"){
    echo '<p>Error: ', $charging_object["error_message"], "</p>";
    exit();
}
?>

<html>
    <head>
        <title>Payzippy Integration Example</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <style>
            .main-info {
                background-color: #fcf8e3;
                border: 2px solid #fbeed5;
                color: #c09853;
                padding: 25px;
                width: 670px;
                -moz-border-radius: 10px;
                -webkit-border-radius: 10px;
                -ms-border-radius: 10px;
                border-radius: 10px;
                -moz-text-shadow: 0 1px 0 rgba(255,255,255,0.5);
                -webkit-text-shadow: 0 1px 0 rgba(255,255,255,0.5);
                -ms-text-shadow: 0 1px 0 rgba(255,255,255,0.5);
                text-shadow: 0 1px 0 rgba(255,255,255,0.5);
                margin: 120px auto 0 auto;
                text-align: center;
                font: 25px/110% "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
            }
            .progress {
                width: 400px;
                margin: 30px auto 0 auto;
            }
            .no-re-warn{
                margin: 0 auto;
                text-align: center;
                width: 670px;
                font: 18px/100% "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
                padding: 25px;
            }
        </style>
    </head>
    <body>
        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand">PayZippy Integration Examples</a>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="wrap inter-content" id="detect-iframe" style="display: block;">
            <section class="main-info">
                Processing your payment request...
                <div class="progress progress-striped active">
                    <div class="bar" style="width: 100%;"></div>
                </div>
            </section>
            <p class="no-re-warn not">Please do not press stop, refresh or back button</p>
        </div>

        <!--
        For integration using RIDIRECT mode, create a new HTML form, with hidden elements.
        Set its "action" attribute to $charging_object["url"].
        Create hidden input elements for every key, value pair in $charging_object["params"].
        -->
        <form method="POST" action="<?php echo $charging_object["url"]?>" id="payzippyForm">
            <?php
            foreach($charging_object["params"] as $key => $value) {
                echo "<input type='hidden' name='{$key}' value='$value'>";
            }
            ?>
        </form>
    </div>
    <script>
        document.getElementById("payzippyForm").submit();
    </script>
    </body>
</html>
