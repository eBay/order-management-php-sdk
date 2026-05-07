<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class LineItem
{
    public function __construct(
        public ?string $purchaseQuoteLineItemId = null,
        public ?LineItemSource $lineItemSource = null,
        public ?Cancellation $cancellation = null,
        public ?LineItemReturn $return = null,
        public ?LineItemTotals $totals = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItemId: $data['purchaseQuoteLineItemId'] ?? null,
            lineItemSource:         isset($data['lineItemSource']) ? LineItemSource::fromArray($data['lineItemSource']) : null,
            cancellation:           isset($data['cancellation']) ? Cancellation::fromArray($data['cancellation']) : null,
            return:                 isset($data['return']) ? LineItemReturn::fromArray($data['return']) : null,
            totals:                 isset($data['totals']) ? LineItemTotals::fromArray($data['totals']) : null,
        );
    }
}
