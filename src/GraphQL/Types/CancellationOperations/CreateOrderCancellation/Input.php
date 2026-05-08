<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

readonly class Input
{
    public function __construct(
        public string $contractCancellationReason,
        public string $orderId,
        public bool $relistAllItems = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            contractCancellationReason: $data['contractCancellationReason'],
            orderId: $data['orderId'],
            relistAllItems: (bool)($data['relistAllItems'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'contractCancellationReason' => $this->contractCancellationReason,
            'orderId' => $this->orderId,
            'relistAllItems' => $this->relistAllItems,
        ];
    }
}
