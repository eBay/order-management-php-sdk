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
    /**
     * @param PickupLogisticsOptionInput[]|null   $pickup
     * @param ShippingLogisticsOptionInput[]|null $shipping
     */
    public function __construct(
        public ?array $pickup = null,
        public ?array $shipping = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            pickup: isset($data['pickup'])
                ? array_map(fn(array $p) => PickupLogisticsOptionInput::fromArray($p), $data['pickup'])
                : null,
            shipping: isset($data['shipping'])
                ? array_map(fn(array $s) => ShippingLogisticsOptionInput::fromArray($s), $data['shipping'])
                : null,
        );
    }

    public function toArray(): array
    {
        $result = [];
        if ($this->pickup !== null) {
            $result['pickup'] = array_map(fn(PickupLogisticsOptionInput $p) => $p->toArray(), $this->pickup);
        }
        if ($this->shipping !== null) {
            $result['shipping'] = array_map(fn(ShippingLogisticsOptionInput $s) => $s->toArray(), $this->shipping);
        }
        return $result;
    }
}
