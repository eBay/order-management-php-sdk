<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class Output
{
    public function __construct(
        public ?SellerOrders $sellerOrders = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerOrders: isset($data['sellerOrders'])
                ? SellerOrders::fromArray($data['sellerOrders'])
                : null,
        );
    }
}
