<?php

declare(strict_types=1);

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
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Psr\Http\Message\RequestInterface;

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
 *
 *   // Per-call custom headers
 *   use EBay\OrderManagement\Configuration\RequestOptions;
 *   $opts = new RequestOptions(['X-Correlation-ID' => 'abc-123']);
 *   $order = $sdk->fulfillment->getOrder('12-34567-89012', requestOptions: $opts);
 *
 *   // Diagnostic logging (logs to error_log)
 *   $config->diagnosticLogging = true;
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
        $guzzle ??= $this->buildGuzzleClient($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $fulfillmentAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $fulfillmentAdapter->setBaseUrl($config->fulfillmentBaseUrl);
        $this->fulfillment = new FulfillmentClient(new FulfillmentApiClient($fulfillmentAdapter), $config);

        $logisticsAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $logisticsAdapter->setBaseUrl($config->logisticsBaseUrl);
        $this->logistics = new LogisticsClient(new LogisticsApiClient($logisticsAdapter), $config);

        $this->graphQL = new OrderManagementGraphQLClient(
            new DynamicGraphQLClient($guzzle, $config)
        );
    }

    private function buildGuzzleClient(OrderManagementConfiguration $config): GuzzleClient
    {
        $stack = HandlerStack::create();

        if ($config->diagnosticLogging) {
            $stack->push(Middleware::tap(
                before: static function (RequestInterface $request): void {
                    error_log(sprintf(
                        '[OrderManagement][REST] %s %s',
                        $request->getMethod(),
                        (string) $request->getUri()
                    ));
                },
            ), 'diagnostic_logging');
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
