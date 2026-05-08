<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class ShippingLogisticsOptionInput
{
    public function __construct(
        public AmountInput $cost,
        public string $shippingServiceCode,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            cost: AmountInput::fromArray($data['cost']),
            shippingServiceCode: $data['shippingServiceCode'],
        );
    }

    public function toArray(): array
    {
        return [
            'cost'                => $this->cost->toArray(),
            'shippingServiceCode' => $this->shippingServiceCode,
        ];
    }
}
