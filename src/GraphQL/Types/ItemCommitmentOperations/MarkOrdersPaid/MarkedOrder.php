<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid;

readonly class MarkedOrder
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $placedAt = null,
        public ?string $updatedAt = null,
        public ?Logistics $logistics = null,
        public ?OrderState $orderState = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId: $data['orderId'] ?? null,
            placedAt: $data['placedAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            logistics: isset($data['logistics']) ? Logistics::fromArray($data['logistics']) : null,
            orderState: isset($data['orderState']) ? OrderState::fromArray($data['orderState']) : null,
        );
    }
}
