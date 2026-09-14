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

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Output;

readonly class ContractCancellation
{
    public function __construct(
        public ?string $cancellationId = null,
        public ?string $closedAt = null,
        public ?ContractCancellationReason $reason = null,
        /** @var Refund[] */
        public array $refunds = [],
        public ?string $requestedAt = null,
        public ?string $requester = null,
        public ?string $requesterNote = null,
        public ?ContractCancellationStatus $status = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            reason: isset($data['reason']) ? ContractCancellationReason::fromArray($data['reason']) : null,
            refunds: array_map(fn($item) => Refund::fromArray($item), $data['refunds'] ?? []),
            requestedAt: $data['requestedAt'] ?? null,
            requester: $data['requester'] ?? null,
            requesterNote: $data['requesterNote'] ?? null,
            status: isset($data['status']) ? ContractCancellationStatus::fromArray($data['status']) : null,
        );
    }
}
