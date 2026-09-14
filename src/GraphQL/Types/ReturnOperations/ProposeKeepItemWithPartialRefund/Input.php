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

readonly class Input
{
    public function __construct(
        /** @var KeepItemPartialRefundTermInput[] */
        public array $keepItemPartialRefundTerms,
        public string $returnId,
        public string $scenario,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            keepItemPartialRefundTerms: array_map(fn($item) => KeepItemPartialRefundTermInput::fromArray($item), $data['keepItemPartialRefundTerms']),
            returnId: $data['returnId'],
            scenario: $data['scenario'],
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return [
                'keepItemPartialRefundTerms' => array_map(fn(KeepItemPartialRefundTermInput $item) => $item->toArray(), $this->keepItemPartialRefundTerms),
                'returnId' => $this->returnId,
        ];
    }

    /** @return array<string, mixed> */
    public function toVariables(): array
    {
        return array_filter(
            [
                'input' => (object)$this->toArray(),
            'scenario' => $this->scenario,
            ],
            static fn($value) => $value !== null,
        );
    }
}
