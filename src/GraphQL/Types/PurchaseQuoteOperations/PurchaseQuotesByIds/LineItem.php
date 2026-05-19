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

readonly class LineItem
{
    public function __construct(
        public ?string $purchaseQuoteLineItemId = null,
        public ?LineItemSource $lineItemSource = null,
        public ?Cancellation $cancellation = null,
        public ?LineItemReturn $return = null,
        public ?LineItemTotals $totals = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteLineItemId: $data['purchaseQuoteLineItemId'] ?? null,
            lineItemSource:         isset($data['lineItemSource']) ? LineItemSource::fromArray($data['lineItemSource']) : null,
            cancellation:           isset($data['cancellation']) ? Cancellation::fromArray($data['cancellation']) : null,
            return:                 isset($data['return']) ? LineItemReturn::fromArray($data['return']) : null,
            totals:                 isset($data['totals']) ? LineItemTotals::fromArray($data['totals']) : null,
        );
    }
}
