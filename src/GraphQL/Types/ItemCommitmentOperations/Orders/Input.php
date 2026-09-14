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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class Input
{
    public function __construct(
        public ?OrdersFirstPageInput $ordersFirstPage = null,
        public ?PageInfoInput $ordersPage = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            ordersFirstPage: isset($data['ordersFirstPage']) ? OrdersFirstPageInput::fromArray($data['ordersFirstPage']) : null,
            ordersPage: isset($data['ordersPage']) ? PageInfoInput::fromArray($data['ordersPage']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'ordersFirstPage' => $this->ordersFirstPage !== null ? (object)$this->ordersFirstPage->toArray() : null,
                'ordersPage' => $this->ordersPage !== null ? (object)$this->ordersPage->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
