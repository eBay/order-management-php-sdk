<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns;

readonly class ExchangeAmount extends ExchangeScenario
{
    public function __construct(
        public ?MoneyAmount $amount = null,
        public ?string $exchangeRate = null,
        public ?string $exchangeAt = null,
    ) {}

    public function getTypename(): string
    {
        return 'ExchangeAmount';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            amount:       isset($data['amount']) ? MoneyAmount::fromArray($data['amount']) : null,
            exchangeRate: $data['exchangeRate'] ?? null,
            exchangeAt:   $data['exchangeAt'] ?? null,
        );
    }
}
