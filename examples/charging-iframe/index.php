<?php
include dirname(__FILE__)."/../common/header.php";
$order_id = "MT" . (string)rand(100000, 999999);
?>

<div class="span10">
    <p class="text-info">This page corresponds to your final checkout page.
        If the UI Mode is set to "IFRAME", the Payzippy charging page will be displayed on your website,
        inside a HTML IFRAME.
    </p>
    <p class="text-info">
        This examples includes the minimum required parameters that must be sent. Bank Name is required only for NET and EMI.
    </p>
</div>

<div class="clearfix"></div>

<form class="form-horizontal" method="post" action="./charging.php">
    <fieldset>
        <div class="well span10">
            <legend>Checkout Details</legend>

            <div class="control-group">
                <label class="control-label">Buyer Email Address</label>

                <div class="controls">
                    <input id="buyer_email_address" name="buyer_email_address" type="text" value="user@domain.com"
                           class="input-xlarge" required="">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Transaction Amount (in Paisa)</label>

                <div class="controls">
                    <input id="transaction_amount" name="transaction_amount" type="text" value="100"
                           class="input-xlarge" required="">

                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Payment Method</label>

                <div class="controls">
                    <select id="payment_method" name="payment_method" class="input-xlarge">
                        <option>PAYZIPPY</option>
                        <option>CREDIT</option>
                        <option>DEBIT</option>
                        <option>NET</option>
                        <option>EMI</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Bank Name</label>

                <div class="controls">
                    <input id="bank_name" name="bank_name" type="text" value="HDFC" class="input-xlarge">

                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Merchant Transaction Id</label>

                <div class="controls">
                    <input id="merchant_transaction_id" name="merchant_transaction_id" type="text"
                           value="<?php echo $order_id; ?>" class="input-xlarge" required="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">UI Mode</label>

                <div class="controls">
                    <select id="ui_mode" name="ui_mode" class="input-xlarge">
                        <option>IFRAME</option>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <input type="submit" id="button" class="btn btn-info" value="Pay with PayZippy">
                </div>
            </div>
        </div>
    </fieldset>
</form>

<?php
include "../common/footer.php";
?>
