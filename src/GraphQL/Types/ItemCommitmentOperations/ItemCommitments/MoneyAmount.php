<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class MoneyAmount
{
    public function __construct(
        public ?string $value = null,
        public ?string $currency = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            value: $data['value'] ?? null,
            currency: $data['currency'] ?? null,
        );
    }
}
