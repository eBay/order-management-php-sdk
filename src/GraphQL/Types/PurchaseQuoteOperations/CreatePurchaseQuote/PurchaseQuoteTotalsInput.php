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

readonly class PurchaseQuoteTotalsInput
{
    public function __construct(
        public ?AmountInput $additionalCharge = null,
        public ?AmountInput $shippingDiscount = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            additionalCharge: isset($data['additionalCharge']) ? AmountInput::fromArray($data['additionalCharge']) : null,
            shippingDiscount: isset($data['shippingDiscount']) ? AmountInput::fromArray($data['shippingDiscount']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'additionalCharge' => $this->additionalCharge !== null ? (object)$this->additionalCharge->toArray() : null,
                'shippingDiscount' => $this->shippingDiscount !== null ? (object)$this->shippingDiscount->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
