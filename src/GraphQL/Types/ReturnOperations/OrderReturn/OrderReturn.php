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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class OrderReturn
{
    public function __construct(
        public ?string $returnId = null,
        public ?string $requester = null,
        public ?string $requestedAt = null,
        public ?string $closedAt = null,
        public ?ReturnStatus $status = null,
        /** @var ReturnLineItem[] */
        public array $returnLineItems = [],
        public ?ReturnNegotiation $returnNegotiation = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            returnId: $data['returnId'] ?? null,
            requester: $data['requester'] ?? null,
            requestedAt: $data['requestedAt'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            status: isset($data['status']) ? ReturnStatus::fromArray($data['status']) : null,
            returnLineItems: array_map(fn($item) => ReturnLineItem::fromArray($item), $data['returnLineItems'] ?? []),
            returnNegotiation: isset($data['returnNegotiation']) ? ReturnNegotiation::fromArray($data['returnNegotiation']) : null,
        );
    }
}
