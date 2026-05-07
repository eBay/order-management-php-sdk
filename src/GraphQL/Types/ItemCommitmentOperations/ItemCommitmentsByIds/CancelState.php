<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class CancelState
{
    public function __construct(
        private string $typename,
        public ?string $label = null,
        public ?string $requestedAt = null,
        public ?string $rejectedAt = null,
        public ?string $startedAt = null,
        public ?string $completedAt = null,
        public ?string $reason = null,
        public ?string $refundOutcome = null,
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
            requestedAt: $data['requestedAt'] ?? null,
            rejectedAt: $data['rejectedAt'] ?? null,
            startedAt: $data['startedAt'] ?? null,
            completedAt: $data['completedAt'] ?? null,
            reason: $data['reason'] ?? null,
            refundOutcome: $data['refundOutcome'] ?? null,
        );
    }
}
