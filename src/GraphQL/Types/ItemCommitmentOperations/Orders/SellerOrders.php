<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class SellerOrders
{
    /**
     * @param Order[] $orders
     */
    public function __construct(
        public array $orders = [],
        public ?Pagination $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                fn(array $o) => Order::fromArray($o),
                $data['orders'] ?? []
            ),
            pagination: isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
        );
    }
}
