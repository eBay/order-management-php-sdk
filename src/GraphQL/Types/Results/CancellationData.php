<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CancellationData
{
    public function __construct(
        public ?string $cancellationId = null,
        public ?string $cancellationState = null,
        public ?string $creationDate = null,
        public ?string $lastModifiedDate = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId:    $data['cancellationId'] ?? null,
            cancellationState: $data['cancellationState'] ?? null,
            creationDate:      $data['creationDate'] ?? null,
            lastModifiedDate:  $data['lastModifiedDate'] ?? null,
        );
    }
}
