<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Top-level result for the orders query.
 * Shape: { orders { sellerOrders(input:{}) { orders { ... } pagination { ... } } } }
 */
readonly class OrdersOutput
{
    public function __construct(
        public ?SellerOrdersResult $sellerOrders = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerOrders: isset($data['sellerOrders'])
                ? SellerOrdersResult::fromArray($data['sellerOrders'])
                : null,
        );
    }
}
