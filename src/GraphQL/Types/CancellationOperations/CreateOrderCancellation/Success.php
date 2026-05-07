<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

readonly class Success extends Output
{
    public function __construct(
        public ?OrderCancellation $orderCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreateOrderCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderCancellation: isset($data['orderCancellation'])
                ? OrderCancellation::fromArray($data['orderCancellation']) : null,
        );
    }
}
