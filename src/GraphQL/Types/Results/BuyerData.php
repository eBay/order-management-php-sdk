<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BuyerData
{
    public function __construct(
        public ?string $legacyUserId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            legacyUserId: $data['legacyUserId'] ?? null,
        );
    }
}
