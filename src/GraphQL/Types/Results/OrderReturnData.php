<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderReturnData
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $status = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $statusCode = isset($data['status']['code']) ? $data['status']['code'] : null;

        return new self(
            returnId:    $data['returnId'] ?? null,
            status:      $statusCode,
            requestedAt: $data['requestedAt'] ?? null,
            closedAt:    $data['closedAt'] ?? null,
        );
    }
}
