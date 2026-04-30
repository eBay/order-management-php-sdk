<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesPartialFailure extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param PurchaseQuoteData[] $updatedPurchaseQuotes
     * @param GraphQLError[]      $failures
     */
    public function __construct(
        public array $updatedPurchaseQuotes = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            updatedPurchaseQuotes: array_map(
                static fn(array $q) => PurchaseQuoteData::fromArray($q),
                $data['updatedPurchaseQuotes'] ?? []
            ),
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
        );
    }
}
