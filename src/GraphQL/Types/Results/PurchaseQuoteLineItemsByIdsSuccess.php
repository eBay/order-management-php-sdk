<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PurchaseQuoteLineItemsByIdsSuccess extends PurchaseQuoteLineItemsByIdsOutput
{
    /**
     * Each element is a raw array with at least:
     *   purchaseQuoteLineItemId, lineItemSource, totals
     *
     * @param array[] $purchaseQuoteLineItems
     */
    public function __construct(
        public array $purchaseQuoteLineItems = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteLineItemsByIdsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItems: $data['purchaseQuoteLineItems'] ?? [],
        );
    }
}
