<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class FulfillmentDetails
{
    /**
     * @param ShipmentTrackingDetails[] $shipmentTrackingDetails
     */
    public function __construct(
        public array $shipmentTrackingDetails = [],
        public ?string $shippedAt = null,
    ) {}

    public function toArray(): array
    {
        return array_filter([
            'shipmentTrackingDetails' => array_map(
                static fn(ShipmentTrackingDetails $s) => $s->toArray(),
                $this->shipmentTrackingDetails,
            ) ?: null,
            'shippedAt' => $this->shippedAt,
        ], static fn($v) => $v !== null);
    }
}
