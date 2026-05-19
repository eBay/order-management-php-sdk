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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

readonly class PartialFailure extends Output
{
    /**
     * @param UpdateOrderError[] $failures
     * @param OrderWithTags[] $updatedOrders
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $failures = [],
        public array $updatedOrders = [],
    ) {}

    public function getTypename(): string
    {
        return 'BulkUpdateOrderTagsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            failures: array_map(
                static fn(array $f) => UpdateOrderError::fromArray($f),
                $data['failures'] ?? [],
            ),
            updatedOrders: array_map(
                static fn(array $o) => OrderWithTags::fromArray($o),
                $data['updatedOrders'] ?? [],
            ),
        );
    }
}
