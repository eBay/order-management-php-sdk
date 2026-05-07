<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

/**
 * Slim line item returned in partial failure (only purchaseQuoteLineItemId).
 */
readonly class SlimLineItem
{
    public function __construct(
        public ?string $purchaseQuoteLineItemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItemId: $data['purchaseQuoteLineItemId'] ?? null,
        );
    }
}
