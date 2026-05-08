<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry;

readonly class CarrierInput
{
    public function __construct(
        public string $carrierCode,
        public ?string $unsupportedCarrierName = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            carrierCode: $data['carrierCode'],
            unsupportedCarrierName: $data['unsupportedCarrierName'] ?? null,
        );
    }

    public function toArray(): array
    {
        $arr = ['carrierCode' => $this->carrierCode];
        if ($this->unsupportedCarrierName !== null) {
            $arr['unsupportedCarrierName'] = $this->unsupportedCarrierName;
        }

        return $arr;
    }
}
