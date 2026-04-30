<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteData
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
