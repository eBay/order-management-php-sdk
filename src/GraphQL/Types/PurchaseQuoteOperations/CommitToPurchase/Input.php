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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class Input
{
    public function __construct(
        public string $itemId,
        public AmountInput $price,
        public int $quantity = 1,
        public bool $userConsentReceived = false,
        public bool $userVerifiedAsAdult = false,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            itemId: $data['itemId'],
            price: AmountInput::fromArray($data['price']),
            quantity: (int)($data['quantity'] ?? 1),
            userConsentReceived: (bool)($data['userConsentReceived'] ?? false),
            userVerifiedAsAdult: (bool)($data['userVerifiedAsAdult'] ?? false),
        );
    }

    public function toArray(): array
    {
        return [
            'itemId'               => $this->itemId,
            'price'                => $this->price->toArray(),
            'quantity'             => $this->quantity,
            'userConsentReceived'  => $this->userConsentReceived,
            'userVerifiedAsAdult'  => $this->userVerifiedAsAdult,
        ];
    }
}
