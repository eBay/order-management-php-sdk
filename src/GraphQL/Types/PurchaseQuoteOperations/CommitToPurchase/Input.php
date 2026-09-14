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
        public ?int $quantity = null,
        public ?bool $userConsentReceived = null,
        public ?bool $userVerifiedAsAdult = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            itemId: $data['itemId'],
            price: AmountInput::fromArray($data['price']),
            quantity: $data['quantity'] ?? null,
            userConsentReceived: $data['userConsentReceived'] ?? null,
            userVerifiedAsAdult: $data['userVerifiedAsAdult'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'itemId' => $this->itemId,
                'price' => (object)$this->price->toArray(),
                'quantity' => $this->quantity,
                'userConsentReceived' => $this->userConsentReceived,
                'userVerifiedAsAdult' => $this->userVerifiedAsAdult,
            ],
            static fn($value) => $value !== null,
        );
    }
}
