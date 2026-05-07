<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class RefundAmount
{
    public function __construct(
        public ?MoneyAmount $original = null,
        public ?ExchangeScenario $exchangeScenario = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original:        isset($data['original'])
                ? MoneyAmount::fromArray($data['original'])
                : null,
            exchangeScenario: isset($data['exchangeScenario'])
                ? ExchangeScenario::fromArray($data['exchangeScenario'])
                : null,
        );
    }
}
