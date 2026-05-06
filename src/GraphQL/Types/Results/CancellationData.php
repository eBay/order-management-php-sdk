<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CancellationData
{
    public function __construct(
        public ?string               $cancellationId = null,
        public ?string               $__typename = null,
        public ?CancellationStatusData $status = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            __typename:     $data['__typename'] ?? null,
            status:         isset($data['status'])
                ? CancellationStatusData::fromArray($data['status'])
                : null,
        );
    }
}
