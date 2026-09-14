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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class OrderReturn
{
    public function __construct(
        public ?string $returnId = null,
        public ?ReturnStatus $status = null,
        public ?string $closedAt = null,
        public ?string $requester = null,
        public ?string $requestedAt = null,
        public ?AvailableReturnActions $sellerAvailableActions = null,
        /** @var Refund[] */
        public array $refunds = [],
        /** @var PostPurchaseCase[] */
        public array $cases = [],
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            returnId: $data['returnId'] ?? null,
            status: isset($data['status']) ? ReturnStatus::fromArray($data['status']) : null,
            closedAt: $data['closedAt'] ?? null,
            requester: $data['requester'] ?? null,
            requestedAt: $data['requestedAt'] ?? null,
            sellerAvailableActions: isset($data['sellerAvailableActions']) ? AvailableReturnActions::fromArray($data['sellerAvailableActions']) : null,
            refunds: array_map(fn($item) => Refund::fromArray($item), $data['refunds'] ?? []),
            cases: array_map(fn($item) => PostPurchaseCase::fromArray($item), $data['cases'] ?? []),
        );
    }
}
