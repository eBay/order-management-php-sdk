<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class UpdatedItemCommitment
{
    public function __construct(
        public ?string $itemCommitmentId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
        );
    }
}
