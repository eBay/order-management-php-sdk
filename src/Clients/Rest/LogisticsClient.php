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

use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\Configuration\TokenContext;
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
use Psr\Http\Message\StreamInterface;

final class LogisticsClient
{
    public function __construct(
        private readonly LogisticsApiClient $kiota,
        private readonly OrderManagementConfiguration $config,
    ) {}

    // ── Shipping Quotes ───────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createShippingQuote(ShippingQuoteRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingQuote
    {
        $rc = new Shipping_quoteRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipping_quote()->post($body, $rc)->wait());
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingQuote(string $shippingQuoteId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?ShippingQuote
    {
        $rc = new WithShippingQuoteItemRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipping_quote()->byShippingQuoteId($shippingQuoteId)->get($rc)->wait());
    }

    // ── Shipments ─────────────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createFromShippingQuote(CreateShipmentFromQuoteRequest $body, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipment
    {
        $rc = new Create_from_shipping_quoteRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipment()->create_from_shipping_quote()->post($body, $rc)->wait());
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShipment(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipment
    {
        $rc = new WithShipmentItemRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipment()->byShipmentId($shipmentId)->get($rc)->wait());
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function cancelShipment(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?Shipment
    {
        $rc = new CancelRequestBuilderPostRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipment()->byShipmentId($shipmentId)->cancel()->post($rc)->wait());
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function downloadLabelFile(string $shipmentId, ?string $accessToken = null, ?RequestOptions $requestOptions = null): ?StreamInterface
    {
        $rc = new Download_label_fileRequestBuilderGetRequestConfiguration(headers: $this->mergeHeaders($requestOptions));
        return TokenContext::runWith($accessToken, fn() => $this->kiota->shipment()->byShipmentId($shipmentId)->download_label_file()->get($rc)->wait());
    }

    // ── Internal ──────────────────────────────────────────────────────────────

    /**
     * Merges default and per-call headers; per-request headers take precedence
     * over defaults.
     *
     * @return array<string,string>
     */
    private function mergeHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }
}
