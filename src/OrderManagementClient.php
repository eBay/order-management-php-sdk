<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement;

use EBay\OrderManagement\Clients\GraphQL\DynamicGraphQLClient;
use EBay\OrderManagement\Clients\GraphQL\OrderManagementGraphQLClient;
use EBay\OrderManagement\Clients\Rest\FulfillmentClient;
use EBay\OrderManagement\Clients\Rest\LogisticsClient;
use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
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
 *   use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Input as CreateOrderCancellationInput;
 *   $result = $sdk->graphQL->createOrderCancellation(new CreateOrderCancellationInput(contractCancellationReason: 'OUT_OF_STOCK', orderId: '12-34567-89012'));
 *
 *   // GraphQL — escape hatch
 *   $raw = $sdk->graphQL->executeRawUnsafe('{ orders { sellerOrders(input: {}) { orders { orderId } } } }');
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

        $this->fulfillment = new FulfillmentClient($guzzle, $config);
        $this->logistics   = new LogisticsClient($guzzle, $config);
        $this->graphQL     = new OrderManagementGraphQLClient(
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
                        str_replace(["\r", "\n"], ' ', (string) $request->getUri())
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
