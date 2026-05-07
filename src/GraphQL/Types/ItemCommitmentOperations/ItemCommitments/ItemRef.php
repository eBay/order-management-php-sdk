<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class ItemRef
{
    public function __construct(
        public ?string $itemId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemId: $data['itemId'] ?? null,
        );
    }
}
