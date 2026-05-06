<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderData
{
    public function __construct(
        public ?string $orderId = null,
        public ?string $placedAt = null,
        public ?string $updatedAt = null,
        public ?BuyerData $buyer = null,
        public ?PurchaseLogistics $logistics = null,
        public ?OrderStateData $orderState = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderId:    $data['orderId'] ?? null,
            placedAt:   $data['placedAt'] ?? null,
            updatedAt:  $data['updatedAt'] ?? null,
            buyer:      isset($data['buyer'])
                ? BuyerData::fromArray($data['buyer'])
                : null,
            logistics:  isset($data['logistics'])
                ? PurchaseLogistics::fromArray($data['logistics'])
                : null,
            orderState: isset($data['orderState'])
                ? OrderStateData::fromArray($data['orderState'])
                : null,
        );
    }
}
