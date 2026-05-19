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

    public static function fromArray(array $data): static
    {
        return new static(
            ordersFirstPage: isset($data['ordersFirstPage'])
                ? OrdersFirstPageInput::fromArray($data['ordersFirstPage'])
                : null,
            ordersPage: isset($data['ordersPage'])
                ? PageInfoInput::fromArray($data['ordersPage'])
                : null,
        );
    }

    public function toArray(): array
    {
        $result = [];

        if ($this->ordersFirstPage !== null) {
            $result['ordersFirstPage'] = $this->ordersFirstPage->toArray();
        }

        if ($this->ordersPage !== null) {
            $result['ordersPage'] = $this->ordersPage->toArray();
        }

        return $result;
    }
}
