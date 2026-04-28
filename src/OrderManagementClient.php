<?php

namespace EBay\OrderManagement;

use EBay\OrderManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\OrderManagement\Clients\GraphQL\OrderManagementGraphQLClient;
use EBay\OrderManagement\Clients\Rest\FulfillmentClient;
use EBay\OrderManagement\Clients\Rest\LogisticsClient;
use EBay\OrderManagement\Configuration\KiotaAuthProvider;
use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Generated\Fulfillment\FulfillmentApiClient;
use EBay\OrderManagement\Generated\Logistics\LogisticsApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

/**
 * Entry point for the eBay Order Management PHP SDK.
 *
 * Usage:
 *   $config = new OrderManagementConfiguration();
 *   $config->accessToken = 'v^1.1#...';
 *   $sdk = new OrderManagementClient($config);
 *
 *   // REST (Fulfillment API)
 *   $order = $sdk->fulfillment->getOrder('12-34567-89012');
 *
 *   // REST (Logistics API)
 *   $quote = $sdk->logistics->createShippingQuote($shippingQuoteRequest);
 *
 *   // GraphQL — typed wrappers
 *   $result = $sdk->graphQL->createOrderCancellation(['orderId' => '...', ...]);
 *
 *   // GraphQL — escape hatch
 *   $raw = $sdk->graphQL->executeRaw('{ orders { sellerOrders(input: {}) { orders { orderId } } } }');
 */
final class OrderManagementClient
{
    public readonly FulfillmentClient $fulfillment;
    public readonly LogisticsClient $logistics;
    public readonly OrderManagementGraphQLClient $graphQL;

    public function __construct(
        OrderManagementConfiguration $config,
        ?GuzzleClient $guzzle = null,
    ) {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $fulfillmentAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $fulfillmentAdapter->setBaseUrl($config->fulfillmentBaseUrl);
        $this->fulfillment = new FulfillmentClient(new FulfillmentApiClient($fulfillmentAdapter));

        $logisticsAdapter = new GuzzleRequestAdapter($auth, client: $guzzle);
        $logisticsAdapter->setBaseUrl($config->logisticsBaseUrl);
        $this->logistics = new LogisticsClient(new LogisticsApiClient($logisticsAdapter));

        $this->graphQL = new OrderManagementGraphQLClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }
}
