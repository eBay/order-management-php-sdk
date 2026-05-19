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
            state: isset($data['state'])
                ? ItemCommitmentState::fromArray($data['state'])
                : null,
            cancellation: isset($data['cancellation'])
                ? CancellationRef::fromArray($data['cancellation'])
                : null,
            refunds: array_map(
                static fn(array $r) => RefundRef::fromArray($r),
                $data['refunds'] ?? [],
            ),
            buyer: isset($data['buyer'])
                ? UserRef::fromArray($data['buyer'])
                : null,
            seller: isset($data['seller'])
                ? UserRef::fromArray($data['seller'])
                : null,
            totals: isset($data['totals'])
                ? CommittedTotals::fromArray($data['totals'])
                : null,
            lineItem: isset($data['lineItem'])
                ? LineItem::fromArray($data['lineItem'])
                : null,
        );
    }
}
