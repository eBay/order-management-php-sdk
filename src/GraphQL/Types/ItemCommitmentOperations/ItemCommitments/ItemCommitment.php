<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class ItemCommitment
{
    /**
     * @param RefundRef[] $refunds
     */
    public function __construct(
        public ?string $itemCommitmentId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $committedMarketplace = null,
        public ?ItemCommitmentState $state = null,
        public ?CancellationRef $cancellation = null,
        public array $refunds = [],
        public ?UserRef $buyer = null,
        public ?UserRef $seller = null,
        public ?CommittedTotals $totals = null,
        public ?LineItem $lineItem = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            committedMarketplace: $data['committedMarketplace'] ?? null,
            state: isset($data['state']) ? ItemCommitmentState::fromArray($data['state']) : null,
            cancellation: isset($data['cancellation']) ? CancellationRef::fromArray($data['cancellation']) : null,
            refunds: array_map(fn(array $r) => RefundRef::fromArray($r), $data['refunds'] ?? []),
            buyer: isset($data['buyer']) ? UserRef::fromArray($data['buyer']) : null,
            seller: isset($data['seller']) ? UserRef::fromArray($data['seller']) : null,
            totals: isset($data['totals']) ? CommittedTotals::fromArray($data['totals']) : null,
            lineItem: isset($data['lineItem']) ? LineItem::fromArray($data['lineItem']) : null,
        );
    }
}
