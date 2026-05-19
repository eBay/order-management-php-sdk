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

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class FilterInput
{
    public function __construct(
        public string $presets = 'AWAITING_ACTION_FROM_SELLER',
        public ?DateTimeRange $createdBetween = null,
        public ?string $listingId = null,
        public ?string $orderId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            presets: $data['presets'] ?? 'AWAITING_ACTION_FROM_SELLER',
            createdBetween: isset($data['createdBetween']) ? DateTimeRange::fromArray($data['createdBetween']) : null,
            listingId: $data['listingId'] ?? null,
            orderId: $data['orderId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $arr = ['presets' => $this->presets];
        if ($this->createdBetween !== null) {
            $arr['createdBetween'] = $this->createdBetween->toArray();
        }
        if ($this->listingId !== null) {
            $arr['listingId'] = $this->listingId;
        }
        if ($this->orderId !== null) {
            $arr['orderId'] = $this->orderId;
        }

        return $arr;
    }
}
