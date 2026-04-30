<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesSuccess extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param PurchaseQuoteData[] $updatedPurchaseQuotes
     */
    public function __construct(
        public array $updatedPurchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            updatedPurchaseQuotes: array_map(
                static fn(array $q) => PurchaseQuoteData::fromArray($q),
                $data['updatedPurchaseQuotes'] ?? []
            ),
        );
    }
}
