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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class CreateReturnLineItemInput
{
    public function __construct(
        public string $orderLineItemId,
        public string $returnReason,
        public int $quantityReturned = 1,
        public ?string $returnNote = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            orderLineItemId: $data['orderLineItemId'],
            returnReason: $data['returnReason'],
            quantityReturned: (int) ($data['quantityReturned'] ?? 1),
            returnNote: $data['returnNote'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'orderLineItemId' => $this->orderLineItemId,
            'returnReason'    => $this->returnReason,
            'quantityReturned' => $this->quantityReturned,
        ];
        if ($this->returnNote !== null) {
            $data['returnNote'] = $this->returnNote;
        }
        return $data;
    }
}
