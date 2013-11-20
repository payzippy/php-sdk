<?php
include dirname(__FILE__)."/../common/header.php";
?>

<form class="form-horizontal" method="post" action="../response/refund_response.php">

    <fieldset>
        <div class="well span10">
        <!-- Form Name -->
            <legend>Payzippy Refund</legend>
            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Merchant Transaction Id</label>
                <div class="controls">
                    <input id="merchant_transaction_id" name="merchant_transaction_id" type="text" placeholder="Merchant Transaction Id" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Payzippy Sale Transaction Id</label>
                <div class="controls">
                    <input id="payzippy_sale_transaction_id" name="payzippy_sale_transaction_id" type="text" placeholder="Payzippy Transaction Id" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label required">Refund Amount (in Paisa)</label>
                <div class="controls">
                    <input id="refund_amount" name="refund_amount" type="text" placeholder="Refund Amount" class="input-xlarge" required="">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Refund Reason</label>
                <div class="controls">
                    <input id="refund_reason" name="refund_reason" type="text" placeholder="Refund Reason" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Refunded By</label>
                <div class="controls">
                    <input id="refunded_by" name="refunded_by" type="text" placeholder="Refunded By" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">UDF 1</label>
                <div class="controls">
                    <input id="udf1" name="udf1" type="text" placeholder="UDF1" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">UDF 2</label>
                <div class="controls">
                    <input id="udf2" name="udf2" type="text" placeholder="UDF2" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">UDF 3</label>
                <div class="controls">
                    <input id="udf3" name="udf3" type="text" placeholder="UDF3" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">UDF 4</label>
                <div class="controls">
                    <input id="udf4" name="udf4" type="text" placeholder="UDF4" class="input-xlarge">
                </div>
            </div>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">UDF 5</label>
                <div class="controls">
                    <input id="udf5" name="udf5" type="text" placeholder="UDF5" class="input-xlarge">
                </div>
            </div>


            <!-- Text input-->
            <div class="control-group">
                <label class="control-label required">Merchant Key Id</label>
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
                <label class="control-label">Issue Refund</label>
                <div class="controls">
                    <input type="submit" id="button" class="btn btn-info" value="Submit">
                </div>
            </div>
        </div>
    </fieldset>
</form>
<?php
include "../common/footer.php";
?>
