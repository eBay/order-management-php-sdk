<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class Input
{
    public function __construct(
        public string $orderId,
        /** @var array<array{orderLineItemId: string, quantity: int, returnReason: string}> */
        public array $returnLineItems = [],
    ) {}

    public function toArray(): array
    {
        return [
            'orderId'         => $this->orderId,
            'returnLineItems' => $this->returnLineItems,
        ];
    }
}
