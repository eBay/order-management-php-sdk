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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote;

readonly class PurchaseQuoteLogisticsOptionInput
{
    public function __construct(
        /** @var PickupLogisticsOptionInput[] */
        public ?array $pickup = null,
        /** @var ShippingLogisticsOptionInput[] */
        public ?array $shipping = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            pickup: array_map(fn($item) => PickupLogisticsOptionInput::fromArray($item), $data['pickup'] ?? []),
            shipping: array_map(fn($item) => ShippingLogisticsOptionInput::fromArray($item), $data['shipping'] ?? []),
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'pickup' => $this->pickup !== null ? array_map(fn(PickupLogisticsOptionInput $item) => $item->toArray(), $this->pickup) : null,
                'shipping' => $this->shipping !== null ? array_map(fn(ShippingLogisticsOptionInput $item) => $item->toArray(), $this->shipping) : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
