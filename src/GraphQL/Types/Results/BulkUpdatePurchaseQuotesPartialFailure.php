<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesPartialFailure extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param PurchaseQuoteData[]         $successfulPurchaseQuotes
     * @param FailedPurchaseQuoteResult[] $failedPurchaseQuotes
     */
    public function __construct(
        public array $successfulPurchaseQuotes = [],
        public array $failedPurchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            successfulPurchaseQuotes: array_map(
                static fn(array $q) => PurchaseQuoteData::fromArray($q),
                $data['successfulPurchaseQuotes'] ?? []
            ),
            failedPurchaseQuotes: array_map(
                static fn(array $q) => FailedPurchaseQuoteResult::fromArray($q),
                $data['failedPurchaseQuotes'] ?? []
            ),
        );
    }
}
