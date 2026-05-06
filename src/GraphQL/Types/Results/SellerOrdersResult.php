<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerOrdersResult
{
    /**
     * @param SellerOrder[] $orders
     */
    public function __construct(
        public array $orders = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                static fn(array $o) => SellerOrder::fromArray($o),
                $data['orders'] ?? []
            ),
            pagination: isset($data['pagination'])
                ? PaginationOutput::fromArray($data['pagination'])
                : null,
        );
    }
}
