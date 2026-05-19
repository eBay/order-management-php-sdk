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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund;

readonly class ExchangeAmount extends ExchangeScenario
{
    public function __construct(
        public ?MoneyAmount $amount = null,
        public ?string $exchangeRate = null,
        public ?string $exchangeAt = null,
    ) {}

    public function getTypename(): string
    {
        return 'ExchangeAmount';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            amount:       isset($data['amount']) ? MoneyAmount::fromArray($data['amount']) : null,
            exchangeRate: $data['exchangeRate'] ?? null,
            exchangeAt:   $data['exchangeAt'] ?? null,
        );
    }
}
