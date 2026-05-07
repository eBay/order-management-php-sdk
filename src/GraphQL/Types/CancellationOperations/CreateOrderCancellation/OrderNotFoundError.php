<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation;

readonly class OrderNotFoundError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $orderId = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderNotFoundError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            orderId: $data['orderId'] ?? null,
        );
    }
}
