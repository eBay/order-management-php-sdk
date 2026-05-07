<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class PurchaseQuoteLineItem
{
    public function __construct(
        public ?string $purchaseQuoteLineItemId = null,
        public ?LineItemSource $lineItemSource = null,
        public ?LineItemTotals $totals = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItemId: $data['purchaseQuoteLineItemId'] ?? null,
            lineItemSource:         isset($data['lineItemSource']) ? LineItemSource::fromArray($data['lineItemSource']) : null,
            totals:                 isset($data['totals']) ? LineItemTotals::fromArray($data['totals']) : null,
        );
    }
}
