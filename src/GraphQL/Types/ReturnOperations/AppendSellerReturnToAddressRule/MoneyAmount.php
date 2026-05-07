<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class MoneyAmount
{
    public function __construct(
        public ?string $currency = null,
        public ?string $value = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            currency: $data['currency'] ?? null,
            value:    $data['value'] ?? null,
        );
    }
}
