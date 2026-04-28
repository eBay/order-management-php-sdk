<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerOrdersResult
{
    /**
     * @param OrderData[] $orders
     */
    public function __construct(
        public array $orders = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                static fn(array $o) => OrderData::fromArray($o),
                $data['orders'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
