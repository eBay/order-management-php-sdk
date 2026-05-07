<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference;

readonly class RmaPreference
{
    public function __construct(
        public ?string $preferenceStatus = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(preferenceStatus: $data['preferenceStatus'] ?? null);
    }
}
