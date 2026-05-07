<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds;

readonly class PartialFailure extends Output
{
    /**
     * @param Order[] $orders
     * @param Failure[] $failures
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
                fn(array $o) => Order::fromArray($o),
                $data['orders'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
