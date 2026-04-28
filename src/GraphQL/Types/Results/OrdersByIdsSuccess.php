<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrdersByIdsSuccess extends OrdersByIdsOutput
{
    /**
     * @param OrderData[] $orders
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
                static fn(array $o) => OrderData::fromArray($o),
                $data['orders'] ?? []
            ),
        );
    }
}
