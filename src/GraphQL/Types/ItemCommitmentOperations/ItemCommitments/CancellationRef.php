<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class CancellationRef
{
    public function __construct(
        public ?string $cancellationId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
        );
    }
}
