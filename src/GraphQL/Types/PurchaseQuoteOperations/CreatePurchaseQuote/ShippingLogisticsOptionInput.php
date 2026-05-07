<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class ShippingLogisticsOptionInput
{
    public function __construct(
        public AmountInput $cost,
        public string $shippingServiceCode,
    ) {}

    public function toArray(): array
    {
        return [
            'cost'                => $this->cost->toArray(),
            'shippingServiceCode' => $this->shippingServiceCode,
        ];
    }
}
