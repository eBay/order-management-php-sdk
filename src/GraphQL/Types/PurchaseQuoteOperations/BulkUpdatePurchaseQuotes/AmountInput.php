<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class AmountInput
{
    public function __construct(
        public string $currency,
        public string $value,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            currency: $data['currency'],
            value: $data['value'],
        );
    }

    public function toArray(): array
    {
        return [
            'currency' => $this->currency,
            'value'    => $this->value,
        ];
    }
}
