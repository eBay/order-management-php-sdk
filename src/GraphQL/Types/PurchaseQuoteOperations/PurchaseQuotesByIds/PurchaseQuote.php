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
    /**
     * @param LineItem[] $lineItems
     */
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public ?string $createdAt = null,
        public ?string $updatedAt = null,
        public ?PurchaseQuoteState $state = null,
        public ?Cancellation $cancellation = null,
        public ?Party $buyer = null,
        public ?Party $seller = null,
        public array $lineItems = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            createdAt:       $data['createdAt'] ?? null,
            updatedAt:       $data['updatedAt'] ?? null,
            state:           isset($data['state']) ? PurchaseQuoteState::fromArray($data['state']) : null,
            cancellation:    isset($data['cancellation']) ? Cancellation::fromArray($data['cancellation']) : null,
            buyer:           isset($data['buyer']) ? Party::fromArray($data['buyer']) : null,
            seller:          isset($data['seller']) ? Party::fromArray($data['seller']) : null,
            lineItems:       array_map(fn(array $li) => LineItem::fromArray($li), $data['lineItems'] ?? []),
        );
    }
}
