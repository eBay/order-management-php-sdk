<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class PurchaseQuoteRef
{
    public function __construct(
        public ?string $purchaseQuoteId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
        );
    }
}
