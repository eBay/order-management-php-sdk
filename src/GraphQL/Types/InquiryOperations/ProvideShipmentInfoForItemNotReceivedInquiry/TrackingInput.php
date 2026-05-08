<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class TrackingInput
{
    public function __construct(
        public CarrierInput $shippingCarrier,
        public string $trackingNumber,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            shippingCarrier: CarrierInput::fromArray($data['shippingCarrier']),
            trackingNumber: $data['trackingNumber'],
        );
    }

    public function toArray(): array
    {
        return [
            'shippingCarrier' => $this->shippingCarrier->toArray(),
            'trackingNumber' => $this->trackingNumber,
        ];
    }
}
