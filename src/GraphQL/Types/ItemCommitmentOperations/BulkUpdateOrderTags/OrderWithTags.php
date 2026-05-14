<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class OrderWithTags
{
    public function __construct(
        public ?string $orderId = null,
        public ?PurchaseTags $orderTags = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId: $data['orderId'] ?? null,
            orderTags: isset($data['orderTags']) ? PurchaseTags::fromArray($data['orderTags']) : null,
        );
    }
}
