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

readonly class PurchaseQuote
{
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $updatedAt = null,
        public ?string $createdAt = null,
        public PurchaseQuoteActive|PurchaseQuoteCancelled|PurchaseQuoteCompleted|PurchaseQuoteInvalid|PurchaseQuoteLocked|PurchaseQuoteRequested|null $state = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            updatedAt: $data['updatedAt'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            state: isset($data['state']) ? PurchaseQuoteState::fromArray($data['state']) : null,
        );
    }
}
