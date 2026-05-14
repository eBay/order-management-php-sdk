<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input;

final readonly class FulfillmentDetails
{
    /**
     * @param ShipmentTrackingDetails[] $shipmentTrackingDetails
     */
    public function __construct(
        public array $shipmentTrackingDetails,
        public ?string $shippedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            shipmentTrackingDetails: array_map(
                static fn($x) => ShipmentTrackingDetails::fromArray($x),
                $data['shipmentTrackingDetails'] ?? []
            ),
            shippedAt: $data['shippedAt'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'shipmentTrackingDetails' => array_map(fn($x) => $x->toArray(), $this->shipmentTrackingDetails),
            'shippedAt' => $this->shippedAt,
        ], static fn($v) => $v !== null);
    }
}
