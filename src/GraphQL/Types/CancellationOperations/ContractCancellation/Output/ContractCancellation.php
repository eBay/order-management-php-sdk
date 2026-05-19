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
