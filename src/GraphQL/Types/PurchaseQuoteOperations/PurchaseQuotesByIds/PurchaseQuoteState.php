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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

abstract readonly class PurchaseQuoteState
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): PurchaseQuoteActive|PurchaseQuoteCancelled|PurchaseQuoteCompleted|PurchaseQuoteInvalid|PurchaseQuoteLocked|PurchaseQuoteRequested
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseQuoteActive' => PurchaseQuoteActive::fromArray($data),
            'PurchaseQuoteCancelled' => PurchaseQuoteCancelled::fromArray($data),
            'PurchaseQuoteCompleted' => PurchaseQuoteCompleted::fromArray($data),
            'PurchaseQuoteInvalid' => PurchaseQuoteInvalid::fromArray($data),
            'PurchaseQuoteLocked' => PurchaseQuoteLocked::fromArray($data),
            'PurchaseQuoteRequested' => PurchaseQuoteRequested::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for PurchaseQuoteState: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
