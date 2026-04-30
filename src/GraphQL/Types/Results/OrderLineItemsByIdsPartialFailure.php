<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderLineItemsByIdsPartialFailure extends OrderLineItemsByIdsOutput
{
    /**
     * @param OrderLineItemData[] $lineItems
     * @param GraphQLError[]      $failures
     */
    public function __construct(
        public array $lineItems = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            lineItems: array_map(
                static fn(array $i) => OrderLineItemData::fromArray($i),
                $data['lineItems'] ?? []
            ),
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
        );
    }
}
