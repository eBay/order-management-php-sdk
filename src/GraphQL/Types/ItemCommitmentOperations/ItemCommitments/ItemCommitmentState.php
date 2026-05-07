<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class ItemCommitmentState
{
    public function __construct(
        private string $typename,
        public ?string $label = null,
        public ?string $cancelledAt = null,
        public ?string $reason = null,
    ) {}

    public function getTypename(): string
    {
        return $this->typename;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            typename: $data['__typename'] ?? 'Unknown',
            label: $data['label'] ?? null,
            cancelledAt: $data['cancelledAt'] ?? null,
            reason: $data['reason'] ?? null,
        );
    }
}
