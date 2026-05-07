<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

/**
 * Slim purchase quote returned in partial/complete failure variants
 * (only purchaseQuoteId, createdAt, updatedAt).
 */
readonly class SlimPurchaseQuote
{
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            createdAt:       $data['createdAt'] ?? null,
            updatedAt:       $data['updatedAt'] ?? null,
        );
    }
}
