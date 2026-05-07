<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation;

readonly class OrderLineItemRef
{
    public function __construct(
        public ?string $orderLineItemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            orderLineItemId: $data['orderLineItemId'] ?? null,
        );
    }
}
