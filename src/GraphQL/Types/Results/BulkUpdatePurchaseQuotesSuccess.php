<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesSuccess extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param PurchaseQuoteData[] $purchaseQuotes
     */
    public function __construct(
        public array $purchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuotes: array_map(
                static fn(array $q) => PurchaseQuoteData::fromArray($q),
                $data['purchaseQuotes'] ?? []
            ),
        );
    }
}
