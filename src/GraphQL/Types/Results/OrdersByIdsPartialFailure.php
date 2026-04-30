<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrdersByIdsPartialFailure extends OrdersByIdsOutput
{
    /**
     * @param OrderData[]    $orders
     * @param GraphQLError[] $failures
     */
    public function __construct(
        public array $orders = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrdersByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                static fn(array $o) => OrderData::fromArray($o),
                $data['orders'] ?? []
            ),
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
        );
    }
}
