<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class ShipmentTrackingDetails
{
    public function __construct(
        public string $shipmentTrackingNumber,
        public string $shippingCarrierCode,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            shipmentTrackingNumber: $data['shipmentTrackingNumber'],
            shippingCarrierCode: $data['shippingCarrierCode'],
        );
    }

    public function toArray(): array
    {
        return [
            'shipmentTrackingNumber' => $this->shipmentTrackingNumber,
            'shippingCarrierCode' => $this->shippingCarrierCode,
        ];
    }
}
