<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderLineItemData
{
    public function __construct(
        public ?string $lineItemId = null,
        public ?string $orderId = null,
        public ?int $quantity = null,
        public ?string $status = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            lineItemId: $data['lineItemId'] ?? null,
            orderId:    $data['orderId'] ?? null,
            quantity:   isset($data['quantity']) ? (int) $data['quantity'] : null,
            status:     $data['status'] ?? null,
        );
    }
}
