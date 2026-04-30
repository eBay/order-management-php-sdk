<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CancellationData
{
    public function __construct(
        public ?string $cancellationId = null,
        public ?string $status = null,
        public ?string $requestedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $statusCode = isset($data['status']['code']) ? $data['status']['code'] : null;

        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            status:         $statusCode,
            requestedAt:    $data['requestedAt'] ?? null,
        );
    }
}
