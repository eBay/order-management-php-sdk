<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input;

final readonly class ShipmentTrackingDetails
{
    public function __construct(
        public string $shipmentTrackingNumber,
        public string $shippingCarrierCode,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
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
