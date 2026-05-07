<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds;

readonly class Success extends Output
{
    /**
     * @param Order[] $orders
     */
    public function __construct(
        public array $orders = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrdersByIdsSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                fn(array $o) => Order::fromArray($o),
                $data['orders'] ?? []
            ),
        );
    }
}
