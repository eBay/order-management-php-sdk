<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class PaginationOutput
{
    public function __construct(
        public ?string $nextCursor = null,
        public ?string $previousCursor = null,
        public ?int $total = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            nextCursor:     $data['nextCursor'] ?? null,
            previousCursor: $data['previousCursor'] ?? null,
            total:          isset($data['total']) ? (int) $data['total'] : null,
        );
    }
}
