<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

readonly class PartialFailure extends Output
{
    /**
     * @param SlimLineItem[] $purchaseQuoteLineItems
     * @param Failure[]      $failures
     */
    public function __construct(
        public array $purchaseQuoteLineItems = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'PurchaseQuoteLineItemsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItems: array_map(
                fn(array $li) => SlimLineItem::fromArray($li),
                $data['purchaseQuoteLineItems'] ?? [],
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? [],
            ),
        );
    }
}
