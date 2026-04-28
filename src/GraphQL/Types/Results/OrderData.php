<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderData
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $orderPaymentStatus = null,
        public ?string $orderFulfillmentStatus = null,
        public ?string $creationDate = null,
        public ?string $lastModifiedDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId:                $data['orderId'] ?? null,
            orderPaymentStatus:     $data['orderPaymentStatus'] ?? null,
            orderFulfillmentStatus: $data['orderFulfillmentStatus'] ?? null,
            creationDate:           $data['creationDate'] ?? null,
            lastModifiedDate:       $data['lastModifiedDate'] ?? null,
        );
    }
}
