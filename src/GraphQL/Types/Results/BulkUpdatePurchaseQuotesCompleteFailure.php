<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesCompleteFailure extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param FailedPurchaseQuoteResult[] $failedPurchaseQuotes
     */
    public function __construct(
        public array $failedPurchaseQuotes = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failedPurchaseQuotes: array_map(
                static fn(array $q) => FailedPurchaseQuoteResult::fromArray($q),
                $data['failedPurchaseQuotes'] ?? []
            ),
        );
    }
}
