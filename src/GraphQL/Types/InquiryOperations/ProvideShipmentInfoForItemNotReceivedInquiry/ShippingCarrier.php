<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class ShippingCarrier
{
    public function __construct(
        public ?string $carrierCode = null,
        public ?string $unsupportedCarrierName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            carrierCode: $data['carrierCode'] ?? null,
            unsupportedCarrierName: $data['unsupportedCarrierName'] ?? null,
        );
    }
}
