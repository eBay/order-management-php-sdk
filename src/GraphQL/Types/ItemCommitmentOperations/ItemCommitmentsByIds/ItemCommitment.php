<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class ItemCommitment
{
    public function __construct(
        public ?string $itemCommitmentId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?ItemCommitmentState $state = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            state: isset($data['state']) ? ItemCommitmentState::fromArray($data['state']) : null,
        );
    }
}
