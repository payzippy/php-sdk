<?php
include dirname(__FILE__)."/../common/header.php";

$order_id = "MT" . (string)rand(100000, 999999);
?>

<div class="span10">
    <p class="text-info">This page corresponds to your final checkout page.</p>
    <p class="text-info">
        This examples includes the all parameters that can be sent in the Charging Request. The required ones
        are in bold.
    </p>
</div>

<div class="clearfix"></div>

<form class="form-horizontal" method="post" action="./charging.php">
<fieldset>
<div class="well well-small span6">
    <legend>Merchant Details</legend>
    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Terminal Id</label>

        <div class="controls">
            <input id="terminal_id" name="terminal_id" type="text" value="tid" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label required">Merchant Transaction Id</label>

        <div class="controls">
            <input id="merchant_transaction_id" name="merchant_transaction_id" type="text"
                   value="<?php echo $order_id; ?>" class="input-xlarge" required="">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">UDF 1</label>

        <div class="controls">
            <input id="udf1" name="udf1" type="text" value="udf1" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">UDF 2</label>

        <div class="controls">
            <input id="udf2" name="udf2" type="text" value="udf2" class="input-xlarge">
        </div>
    </div>
    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">UDF 3</label>

        <div class="controls">
            <input id="udf3" name="udf3" type="text" value="udf3" class="input-xlarge">
        </div>
    </div>
    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">UDF 4</label>

        <div class="controls">
            <input id="udf4" name="udf4" type="text" value="udf4" class="input-xlarge">
        </div>
    </div>
    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">UDF 5</label>

        <div class="controls">
            <input id="udf5" name="udf5" type="text" value="udf5" class="input-xlarge">
        </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
        <label class="control-label required">UI Integration Mode</label>

        <div class="controls">
            <select id="ui_mode" name="ui_mode" class="input-xlarge">
                <option value="IFRAME">IFRAME</option>
            </select>
        </div>
    </div>
</div>

<div class="well well-small span6">
    <legend>Buyer Details</legend>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label required">Buyer Email Address</label>

        <div class="controls">
            <input id="buyer_email_address" name="buyer_email_address" type="text" value="user@domain.com"
                   class="input-xlarge" required="">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Buyer Phone Number</label>

        <div class="controls">
            <input id="buyer_phone_no" name="buyer_phone_no" type="text" value="9999999999" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Buyer Unique Id</label>

        <div class="controls">
            <input id="buyer_unique_id" name="buyer_unique_id" type="text" value="BID123" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Shipping Address</label>

        <div class="controls">
            <input id="shipping_address" name="shipping_address" type="text" value="Payzippy, Koramangala"
                   class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Shipping City</label>

        <div class="controls">
            <input id="shipping_address" name="shipping_city" type="text" value="Bangalore" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Shipping State</label>

        <div class="controls">
            <input id="shipping_state" name="shipping_state" type="text" placeholder="" value="Karnataka" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Shipping Zip</label>

        <div class="controls">
            <input id="shipping_zip" name="shipping_zip" type="text" placeholder="" value="560034" class="input-xlarge">

        </div>
    </div>


    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Shipping Country</label>

        <div class="controls">
            <input id="shipping_country" name="shipping_country" type="text" placeholder="" value="India"
                   class="input-xlarge">
        </div>
    </div>

</div>


<div class="clearfix"></div>

<div class="well well-small span6">
    <legend>Billing Details</legend>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing Name</label>

        <div class="controls">
            <input id="billing_name" name="billing_name" type="text" class="input-xlarge" value="Biller Name">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing Address</label>

        <div class="controls">
            <input id="billing_address" name="billing_address" type="text" class="input-xlarge"
                   value="Payzippy, Koramangala">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing City</label>

        <div class="controls">
            <input id="billing_city" name="billing_city" type="text" class="input-xlarge" value="Bangalore">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing State</label>

        <div class="controls">
            <input id="billing_state" name="billing_state" type="text" placeholder="" value="Karnataka" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing Zip</label>

        <div class="controls">
            <input id="billing_zip" name="billing_zip" type="text" class="input-xlarge" value="560034">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Billing Country</label>

        <div class="controls">
            <input id="billing_country" name="billing_country" type="text" class="input-xlarge" value="India">
        </div>
    </div>


</div>

<div class="well well-small span6">
    <legend>Transaction Details</legend>

    <!-- Select Basic -->
    <div class="control-group">
        <label class="control-label required">Transaction Type</label>

        <div class="controls">
            <select id="transaction_type" name="transaction_type" class="input-xlarge">
                <option>SALE</option>
                <option>PRE_AUTH</option>
            </select>
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label required">Transaction Amount (in Paisa)</label>

        <div class="controls">
            <input id="transaction_amount" name="transaction_amount" type="text" value="100" class="input-xlarge"
                   required="">

        </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
        <label class="control-label required">Payment Method</label>

        <div class="controls">
            <select id="payment_method" name="payment_method" class="input-xlarge">
                <option>PAYZIPPY</option>
                <option>CREDIT</option>
                <option>DEBIT</option>
                <option>EMI</option>
                <option>NET</option>
            </select>
        </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
        <label class="control-label">Emi Months</label>

        <div class="controls">
            <select id="emi_months" name="emi_months" class="input-xlarge">
                <option value="0">0</option>
                <option value="3">3</option>
                <option value="6">6</option>
                <option value="9">9</option>
                <option value="12">12</option>
            </select>
        </div>
    </div>

    <!-- Select Basic -->
    <div class="control-group">
        <label class="control-label required">Currency</label>

        <div class="controls">
            <select id="currency" name="currency" class="input-xlarge">
                <option>INR</option>
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

</div>


<div class="well well-small span6">
    <legend>PayZippy Fraud Parameters</legend>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Minimum SLA</label>

        <div class="controls">
            <input id="min_sla" name="min_sla" type="text" value="4" class="input-xlarge">
        </div>
    </div>


    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">User Logged In</label>

        <div class="controls">
            <select id="is_user_logged_in" name="is_user_logged_in" class="input-xlarge">
                <option>true</option>
                <option>false</option>
            </select>
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Address Count</label>

        <div class="controls">
            <input id="address_count" name="address_count" type="text" value="3" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Sales Channel</label>

        <div class="controls">
            <input id="sales_channel" name="sales_channel" type="text" value="Mobile" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Item Total</label>

        <div class="controls">
            <input id="item_total" name="item_total" type="text" value="2000,1200" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Item Vertical</label>

        <div class="controls">
            <input id="item_vertical" name="item_vertical" type="text" value="books,sports" class="input-xlarge">
        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">SMS Notify Number</label>

        <div class="controls">
            <input id="sms_notify_number" name="sms_notify_number" type="text" value="9999999999" class="input-xlarge">
        </div>
    </div>

</div>

<div class="well well-small span6">
    <legend>Other Details</legend>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Source</label>

        <div class="controls">
            <input id="source" name="source" type="text" value="testpage" class="input-xlarge">

        </div>
    </div>


    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Product Info 1</label>

        <div class="controls">
            <input id="product_info1" name="product_info1" type="text" value="physical" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Product Info 2</label>

        <div class="controls">
            <input id="product_info2" name="product_info2" type="text" value="mobile" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label">Product Info 3</label>

        <div class="controls">
            <input id="product_info3" name="product_info3" type="text" value="samsung galaxy" class="input-xlarge">

        </div>
    </div>

    <!-- Text input-->
    <div class="control-group">
        <label class="control-label required">Hash Method</label>

        <div class="controls">
            <input id="hash_method" name="hash_method" type="text" placeholder="Hash Method" value="SHA256"
                   class="input-xlarge" required="">

        </div>
    </div>
</div>

<!-- Button -->
<div class="control-group span12">
    <input type="submit" id="button" class="btn btn-info" value="Pay with PayZippy">
</div>

</fieldset>
</form>
<?php
include "../common/footer.php";
?>
