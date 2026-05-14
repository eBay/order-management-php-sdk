<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

final class Pagination
{
    public function __construct(
        public readonly ?string $nextCursor = null,
        public readonly ?string $previousCursor = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            nextCursor: $data['nextCursor'] ?? null,
            previousCursor: $data['previousCursor'] ?? null,
        );
    }
}
