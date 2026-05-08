<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class ReturnShippingCarrierInput
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
        $data = ['carrierCode' => $this->carrierCode];
        if ($this->unsupportedCarrierName !== null) {
            $data['unsupportedCarrierName'] = $this->unsupportedCarrierName;
        }
        return $data;
    }
}
