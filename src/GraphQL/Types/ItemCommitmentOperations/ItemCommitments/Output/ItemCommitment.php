<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class ItemCommitment
{
    public function __construct(
        public ?string $itemCommitmentId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?string $committedMarketplace = null,
        public ItemCommitmentAbandoned|ItemCommitmentActive|ItemCommitmentCancelled|ItemCommitmentCompleted|ItemCommitmentLocked|null $state = null,
        public ?ItemCommitmentCancellation $cancellation = null,
        /** @var Refund[] */
        public array $refunds = [],
        public ?User $buyer = null,
        public ?User $seller = null,
        public ?ItemCommitmentTotals $totals = null,
        public ?ContractListingItem $lineItem = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitmentId: $data['itemCommitmentId'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            committedMarketplace: $data['committedMarketplace'] ?? null,
            state: isset($data['state']) ? ItemCommitmentState::fromArray($data['state']) : null,
            cancellation: isset($data['cancellation']) ? ItemCommitmentCancellation::fromArray($data['cancellation']) : null,
            refunds: array_map(fn($item) => Refund::fromArray($item), $data['refunds'] ?? []),
            buyer: isset($data['buyer']) ? User::fromArray($data['buyer']) : null,
            seller: isset($data['seller']) ? User::fromArray($data['seller']) : null,
            totals: isset($data['totals']) ? ItemCommitmentTotals::fromArray($data['totals']) : null,
            lineItem: isset($data['lineItem']) ? ContractListingItem::fromArray($data['lineItem']) : null,
        );
    }
}
