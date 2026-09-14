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

abstract readonly class Output
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): BulkUpdateOrderTagsCompleteFailure|BulkUpdateOrderTagsPartialFailure|BulkUpdateOrderTagsSuccess
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdateOrderTagsCompleteFailure' => BulkUpdateOrderTagsCompleteFailure::fromArray($data),
            'BulkUpdateOrderTagsPartialFailure' => BulkUpdateOrderTagsPartialFailure::fromArray($data),
            'BulkUpdateOrderTagsSuccess' => BulkUpdateOrderTagsSuccess::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for Output: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
