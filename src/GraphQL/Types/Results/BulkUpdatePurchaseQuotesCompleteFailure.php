<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class BulkUpdatePurchaseQuotesCompleteFailure extends BulkUpdatePurchaseQuotesOutput
{
    /**
     * @param GraphQLError[] $failures
     */
    public function __construct(
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdatePurchaseQuotesCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
        );
    }
}
