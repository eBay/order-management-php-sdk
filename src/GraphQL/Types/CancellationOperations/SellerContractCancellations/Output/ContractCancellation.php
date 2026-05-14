<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

final class ContractCancellation
{
    /**
     * @param Refund[] $refunds
     */
    public function __construct(
        public readonly ?string $cancellationId = null,
        public readonly ?string $closedAt = null,
        public readonly ?CancellationReason $reason = null,
        public readonly array $refunds = [],
        public readonly ?string $requestedAt = null,
        public readonly ?string $requester = null,
        public readonly ?string $requesterNote = null,
        public readonly ?CancellationStatus $status = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            reason: isset($data['reason']) ? CancellationReason::fromArray($data['reason']) : null,
            refunds: array_map(static fn($r) => Refund::fromArray($r), $data['refunds'] ?? []),
            requestedAt: $data['requestedAt'] ?? null,
            requester: $data['requester'] ?? null,
            requesterNote: $data['requesterNote'] ?? null,
            status: isset($data['status']) ? CancellationStatus::fromArray($data['status']) : null,
        );
    }
}
