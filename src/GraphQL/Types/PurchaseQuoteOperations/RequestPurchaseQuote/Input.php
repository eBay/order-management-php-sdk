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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote;

readonly class Input
{
    /**
     * @param PurchaseQuoteItemInput[] $lineItems
     */
    public function __construct(
        public array $lineItems,
        public ?string $messageToSeller = null,
        public ?AddressInput $shippingAddress = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            lineItems: array_map(
                static fn(array $i) => PurchaseQuoteItemInput::fromArray($i),
                $data['lineItems'] ?? [],
            ),
            messageToSeller: $data['messageToSeller'] ?? null,
            shippingAddress: isset($data['shippingAddress'])
                ? AddressInput::fromArray($data['shippingAddress'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'lineItems'       => array_map(fn($i) => $i->toArray(), $this->lineItems),
            'messageToSeller' => $this->messageToSeller,
            'shippingAddress' => $this->shippingAddress?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
