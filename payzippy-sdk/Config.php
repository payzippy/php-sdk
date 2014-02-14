<?php

final class PZ_Config
{
    const MERCHANT_ID = ""; // Your Merchant ID
    const SECRET_KEY = ""; // Your Secret Key. Do not share this.
    const TRANSACTION_TYPE = "SALE";
    const CURRENCY = "INR";
    const UI_MODE = "REDIRECT"; // UI Integration - REDIRECT or IFRAME
    const HASH_METHOD = "SHA256"; // MD5 or SHA256
    const MERCHANT_KEY_ID = ""; // Your Merchant Key ID
    const CALLBACK_URL = ""; // Your callback URL

    const API_BASE = "https://www.payzippy.com/payment/api/";
    const API_CHARGING = "charging";
    const API_QUERY = "query";
    const API_REFUND = "refund";
    const API_VERSION = "v1";
    const VERIFY_SSL_CERTS = TRUE;
}
?>
