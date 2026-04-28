<?php

namespace EBay\OrderManagement\Clients\Rest;

use EBay\OrderManagement\Configuration\TokenContext;
use EBay\OrderManagement\Generated\Logistics\LogisticsApiClient;
use EBay\OrderManagement\Generated\Logistics\Models\CreateShipmentFromQuoteRequest;
use EBay\OrderManagement\Generated\Logistics\Models\Shipment;
use EBay\OrderManagement\Generated\Logistics\Models\ShippingQuote;
use EBay\OrderManagement\Generated\Logistics\Models\ShippingQuoteRequest;
use Psr\Http\Message\StreamInterface;

final class LogisticsClient
{
    public function __construct(private readonly LogisticsApiClient $kiota) {}

    // ── Shipping Quotes ───────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createShippingQuote(ShippingQuoteRequest $body, ?string $accessToken = null): ?ShippingQuote
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipping_quote()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShippingQuote(string $shippingQuoteId, ?string $accessToken = null): ?ShippingQuote
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipping_quote()->byShippingQuoteId($shippingQuoteId)->get()->wait();
    }

    // ── Shipments ─────────────────────────────────────────────────────────────

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function createFromShippingQuote(CreateShipmentFromQuoteRequest $body, ?string $accessToken = null): ?Shipment
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipment()->create_from_shipping_quote()->post($body)->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function getShipment(string $shipmentId, ?string $accessToken = null): ?Shipment
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipment()->byShipmentId($shipmentId)->get()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function cancelShipment(string $shipmentId, ?string $accessToken = null): ?Shipment
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipment()->byShipmentId($shipmentId)->cancel()->post()->wait();
    }

    /**
     * @param string|null $accessToken Per-call token; overrides configuration fallback.
     */
    public function downloadLabelFile(string $shipmentId, ?string $accessToken = null): ?StreamInterface
    {
        TokenContext::set($accessToken);
        return $this->kiota->shipment()->byShipmentId($shipmentId)->download_label_file()->get()->wait();
    }
}
