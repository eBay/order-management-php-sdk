<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

/**
 * Represents buyer or seller on a purchase quote (legacyUserId + dataAccessLevel).
 */
readonly class Party
{
    public function __construct(
        public ?string $legacyUserId = null,
        public ?string $dataAccessLevel = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            legacyUserId:    $data['legacyUserId'] ?? null,
            dataAccessLevel: $data['dataAccessLevel'] ?? null,
        );
    }
}
