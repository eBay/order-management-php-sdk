<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

final class ContractCancellation
{
    /**
     * @param Refund[] $refunds
     */
    public function __construct(
        public readonly ?string $cancellationId = null,
        public readonly ?CancellationStatus $status = null,
        public readonly ?string $closedAt = null,
        public readonly ?string $requestedAt = null,
        public readonly ?CancellationReason $reason = null,
        public readonly array $refunds = [],
        public readonly ?string $requester = null,
        public readonly ?string $requesterNote = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            status: isset($data['status']) ? CancellationStatus::fromArray($data['status']) : null,
            closedAt: $data['closedAt'] ?? null,
            requestedAt: $data['requestedAt'] ?? null,
            reason: isset($data['reason']) ? CancellationReason::fromArray($data['reason']) : null,
            refunds: array_map(
                fn(array $r) => Refund::fromArray($r),
                $data['refunds'] ?? [],
            ),
            requester: $data['requester'] ?? null,
            requesterNote: $data['requesterNote'] ?? null,
        );
    }
}
