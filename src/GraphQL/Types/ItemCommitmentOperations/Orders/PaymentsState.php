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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

abstract readonly class PaymentsState
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): PaymentsCompleted|PaymentsFailure|PaymentsInProgress|PaymentsNotStarted
    {
        return match ($data['__typename'] ?? null) {
            'PaymentsCompleted' => PaymentsCompleted::fromArray($data),
            'PaymentsFailure' => PaymentsFailure::fromArray($data),
            'PaymentsInProgress' => PaymentsInProgress::fromArray($data),
            'PaymentsNotStarted' => PaymentsNotStarted::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for PaymentsState: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
