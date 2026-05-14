<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class ContractCancellation
{
    public function __construct(
        public ?string $cancellationId,
        public ?string $closedAt,
        public ?CancellationReason $reason,
        public array $refunds,
        public ?string $requestedAt,
        public ?string $requester,
        public ?string $requesterNote,
        public ?CancellationStatus $status,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            cancellationId: $data['cancellationId'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            reason: isset($data['reason']) ? CancellationReason::fromArray($data['reason']) : null,
            refunds: array_map(fn(array $r) => Refund::fromArray($r), $data['refunds'] ?? []),
            requestedAt: $data['requestedAt'] ?? null,
            requester: $data['requester'] ?? null,
            requesterNote: $data['requesterNote'] ?? null,
            status: isset($data['status']) ? CancellationStatus::fromArray($data['status']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'cancellationId' => $this->cancellationId,
            'closedAt' => $this->closedAt,
            'reason' => $this->reason?->toArray(),
            'refunds' => array_map(fn(Refund $r) => $r->toArray(), $this->refunds),
            'requestedAt' => $this->requestedAt,
            'requester' => $this->requester,
            'requesterNote' => $this->requesterNote,
            'status' => $this->status?->toArray(),
        ], fn($v) => $v !== null && $v !== []);
    }
}
