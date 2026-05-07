<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class MethodName
{
    public function __construct(
        public ?string $id = null,
        public ?string $displayName = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            id: $data['id'] ?? null,
            displayName: $data['displayName'] ?? null,
        );
    }
}
