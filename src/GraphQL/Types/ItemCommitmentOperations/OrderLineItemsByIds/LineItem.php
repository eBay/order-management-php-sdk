<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds;

readonly class LineItem
{
    public function __construct(
        public ?string $orderLineItemId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderLineItemId: $data['orderLineItemId'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
        );
    }
}
