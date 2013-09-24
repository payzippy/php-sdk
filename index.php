<html>
<head>
    <title>Payzippy SDK</title>
    <link href="./examples/css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="#">PayZippy SDK</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="./examples/charging-master/">SDK Integration Examples</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>Structure of the SDK</h3>

    <pre>

    |- php-sdk
        |- index.php
        |- examples/
            |- charging-iframe/
            |- charging-master/
            |- charging-redirect/
        |- payzippy-sdk/
            |- ChargingRequest.php
            |- ChargingResponse.php
            |- Config.php
            |- QueryRequest.php
            |- QueryResponse.php
            |- QueryTransactionResponse.php
            |- RefundRequest.php
            |- RefundResponse.php
            |- RefundTransactionResponse.php
            |- Utils.php
    </pre>

    <hr/>

    <h3>Setup</h3>

    <p>
        To run the examples
    <ol>
        <li>Use <code>payzippy</code> folder as the web server root.</li>
        <li>To set up your config details, fill the details provided by PayZippy, in <code>Config.php</code> file.
            <ul>
                <li><code>MERCHANT_ID</code> Your Merchant ID</li>
                <li><code>SECRET_KEY</code> Your Secret Key for the Payzippy API. Do not share this!</li>
                <li><code>CALLBACK_URL</code> The URL that the Charging API would call on transaction completion. For
                    the examples provided,
                    this should point to <code>php-sdk/examples/response/charging_response.php</code></li>
            </ul>
        </li>
    </ol>
    </p>

    <hr/>

    <h3>Examples</h3>

    <p>To check out the sample SDK integrations, go the <a href="./examples/charging-master/">SDK Integration
            Examples</a> page.</p>
    <hr/>
</div>

</body>
</html>

		