<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderLineItemsByIdsPartialFailure extends OrderLineItemsByIdsOutput
{
    /**
     * @param OrderLineItemData[] $orderLineItems
     * @param GraphQLError[]      $errors
     */
    public function __construct(
        public array $orderLineItems = [],
        public array $errors = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderLineItems: array_map(
                static fn(array $i) => OrderLineItemData::fromArray($i),
                $data['orderLineItems'] ?? []
            ),
            errors: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['errors'] ?? []
            ),
        );
    }
}
