<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class AmountInput
{
    public function __construct(
        public string $currency,
        public string $value,
    ) {}

    public function toArray(): array
    {
        return [
            'currency' => $this->currency,
            'value'    => $this->value,
        ];
    }
}
