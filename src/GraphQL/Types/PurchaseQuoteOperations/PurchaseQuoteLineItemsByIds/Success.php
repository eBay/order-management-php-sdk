<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class Success extends Output
{
    /**
     * @param PurchaseQuoteLineItem[] $purchaseQuoteLineItems
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
            purchaseQuoteLineItems: array_map(
                fn(array $li) => PurchaseQuoteLineItem::fromArray($li),
                $data['purchaseQuoteLineItems'] ?? [],
            ),
        );
    }
}
