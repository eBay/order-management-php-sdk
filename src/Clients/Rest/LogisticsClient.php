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

namespace EBay\OrderManagement\Clients\Rest;

use EBay\OrderManagement\Configuration\KiotaAuthProvider;
use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\Generated\Logistics\LogisticsApiClient;
use EBay\OrderManagement\Generated\Logistics\Models\CreateShipmentFromQuoteRequest;
use EBay\OrderManagement\Generated\Logistics\Models\Shipment;
use EBay\OrderManagement\Generated\Logistics\Models\ShippingQuote;
use EBay\OrderManagement\Generated\Logistics\Models\ShippingQuoteRequest;
use EBay\OrderManagement\Generated\Logistics\Shipment\Create_from_shipping_quote\Create_from_shipping_quoteRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Logistics\Shipment\Item\Cancel\CancelRequestBuilderPostRequestConfiguration;
use EBay\OrderManagement\Generated\Logistics\Shipment\Item\Download_label_file\Download_label_fileRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Logistics\Shipment\Item\WithShipmentItemRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Logistics\Shipping_quote\Item\WithShippingQuoteItemRequestBuilderGetRequestConfiguration;
use EBay\OrderManagement\Generated\Logistics\Shipping_quote\Shipping_quoteRequestBuilderPostRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class LogisticsClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly OrderManagementConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function cancelShipment(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipment
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->shipment()->byShipmentId($shipmentId)->cancel()->post(
                new CancelRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createFromShippingQuote(
        CreateShipmentFromQuoteRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?Shipment
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipment()->create_from_shipping_quote()->post(
                $body,
                new Create_from_shipping_quoteRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function downloadLabelFile(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        $this->call($accessToken, fn($api) =>
            $api->shipment()->byShipmentId($shipmentId)->download_label_file()->get(
                new Download_label_fileRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShipment(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipment
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->shipment()->byShipmentId($shipmentId)->get(
                new WithShipmentItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function createShippingQuote(
        ShippingQuoteRequest $body,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): ?ShippingQuote
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        return $this->call($accessToken, fn($api) =>
            $api->shipping_quote()->post(
                $body,
                new Shipping_quoteRequestBuilderPostRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    public function getShippingQuote(string $shippingQuoteId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingQuote
    {
        $headers = $this->mergedHeaders($requestOptions);
        return $this->call($accessToken, fn($api) =>
            $api->shipping_quote()->byShippingQuoteId($shippingQuoteId)->get(
                new WithShippingQuoteItemRequestBuilderGetRequestConfiguration(headers: $headers)
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set OrderManagementConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): LogisticsApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->logisticsBaseUrl);
        return new LogisticsApiClient($adapter);
    }
}
