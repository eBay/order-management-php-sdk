<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class UpdatedPurchaseQuote
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
