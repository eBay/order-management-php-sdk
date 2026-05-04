<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ItemCommitmentData
{
    public function __construct(
        public ?string $itemCommitmentId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $committedMarketplace = null,
        public ?array  $state = null,
        public ?array  $cancellation = null,
        public ?array  $refunds = null,
        public ?array  $buyer = null,
        public ?array  $seller = null,
        public ?array  $totals = null,
        public ?array  $lineItem = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId:     $data['itemCommitmentId'] ?? null,
            createdAt:            $data['createdAt'] ?? null,
            updatedAt:            $data['updatedAt'] ?? null,
            committedMarketplace: $data['committedMarketplace'] ?? null,
            state:                $data['state'] ?? null,
            cancellation:         $data['cancellation'] ?? null,
            refunds:              $data['refunds'] ?? null,
            buyer:                $data['buyer'] ?? null,
            seller:               $data['seller'] ?? null,
            totals:               $data['totals'] ?? null,
            lineItem:             $data['lineItem'] ?? null,
        );
    }
}
