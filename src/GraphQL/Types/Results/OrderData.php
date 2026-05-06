<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderData
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $placedAt = null,
        public ?string $updatedAt = null,
        public ?PurchaseLogistics $logistics = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId:   $data['orderId'] ?? null,
            placedAt:  $data['placedAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            logistics: isset($data['logistics'])
                ? PurchaseLogistics::fromArray($data['logistics'])
                : null,
        );
    }
}
