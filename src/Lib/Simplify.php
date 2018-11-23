<?php

namespace Lib;

require_once(dirname(__FILE__) . '/Simplify/Constants.php');

class Simplify
{
    /**
     * @var string $publicKey public API key used to authenticate requests.
     */
    public static $publicKey;

    /**
     * @var string $privateKey private API key used to authenticate requests.
     */
    public static $privateKey;


    /**
     * @var string $apiBaseLiveUrl URL of the live API endpoint
     */
    public static $apiBaseLiveUrl = Simplify_Constants::API_BASE_LIVE_URL;

    /**
     * @var string $apiBaseSandboxUrl URL of the sandbox API endpoint
     */
    public static $apiBaseSandboxUrl = Simplify_Constants::API_BASE_SANDBOX_URL;

    /**
     * @var string $userAgent User-agent string send with requests.
     */
    public static $userAgent = null;

}

require_once(dirname(__FILE__) . '/Simplify/Object.php');
require_once(dirname(__FILE__) . '/Simplify/AccessToken.php');
require_once(dirname(__FILE__) . '/Simplify/Authentication.php');
require_once(dirname(__FILE__) . '/Simplify/PaymentsApi.php');
require_once(dirname(__FILE__) . '/Simplify/Exceptions.php');
require_once(dirname(__FILE__) . '/Simplify/Http.php');
require_once(dirname(__FILE__) . '/Simplify/ResourceList.php');
require_once(dirname(__FILE__) . '/Simplify/Authorization.php');
require_once(dirname(__FILE__) . '/Simplify/CardToken.php');
require_once(dirname(__FILE__) . '/Simplify/Chargeback.php');
require_once(dirname(__FILE__) . '/Simplify/Coupon.php');
require_once(dirname(__FILE__) . '/Simplify/Customer.php');
require_once(dirname(__FILE__) . '/Simplify/DataToken.php');
require_once(dirname(__FILE__) . '/Simplify/Deposit.php');
require_once(dirname(__FILE__) . '/Simplify/Event.php');
require_once(dirname(__FILE__) . '/Simplify/FraudCheck.php');
require_once(dirname(__FILE__) . '/Simplify/Invoice.php');
require_once(dirname(__FILE__) . '/Simplify/InvoiceItem.php');
require_once(dirname(__FILE__) . '/Simplify/Tax.php');
require_once(dirname(__FILE__) . '/Simplify/Payment.php');
require_once(dirname(__FILE__) . '/Simplify/Plan.php');
require_once(dirname(__FILE__) . '/Simplify/Refund.php');
require_once(dirname(__FILE__) . '/Simplify/Subscription.php');
require_once(dirname(__FILE__) . '/Simplify/TransactionReview.php');
require_once(dirname(__FILE__) . '/Simplify/Webhook.php');
