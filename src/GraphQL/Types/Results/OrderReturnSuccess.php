<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderReturnSuccess extends OrderReturnOutput
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $status = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
    ) {}

    public function getTypename(): string
    {
        return 'OrderReturn';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnId:    $data['returnId'] ?? null,
            status:      $data['status']['code'] ?? null,
            requestedAt: $data['requestedAt'] ?? null,
            closedAt:    $data['closedAt'] ?? null,
        );
    }
}
