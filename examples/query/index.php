<?php
include dirname(__FILE__)."/../common/header.php";
?>

<form class="form-horizontal" method="get" action="../response/query_response.php">
    <fieldset>
        <div class="well span10">
        <!-- Form Name -->
            <legend>Payzippy Query</legend>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Payzippy Transaction Id</label>
                <div class="controls">
                    <input id="payzippy_transaction_id" name="payzippy_transaction_id" type="text" placeholder="Payzippy Transaction ID" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Merchant Transaction Id</label>
                <div class="controls">
                    <input id="merchant_transaction_id" name="merchant_transaction_id" type="text" placeholder="Merchant Transaction Id" class="input-xlarge">
                </div>
            </div>

            <!-- Select Basic -->
            <div class="control-group">
                <label class="control-label required">Transaction Type</label>
                <div class="controls">
                    <select id="transaction_type" name="transaction_type" class="input-xlarge">
                        <option>SALE</option>
                        <option>REFUND</option>
                    </select>
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Merchant Key Id</label>
                <div class="controls">
                    <input id="merchant_key_id" name="merchant_key_id" type="text" value="payment" class="input-xlarge" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label required">Hash Method</label>
                <div class="controls">
                    <input id="hash_method" name="hash_method" type="text" placeholder="Hash Method" value="SHA256" class="input-xlarge" required="">
                </div>
            </div>

            <!-- Button -->
            <div class="control-group">
                <div class="controls">
                    <input type="submit" id="button" class="btn btn-info" value="Submit Query">
                </div>
            </div>
        </div>
    </fieldset>
</form>
<?php
include "../common/footer.php";
?>
