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

readonly class Input
{
    public function __construct(
        /** @var PurchaseQuoteItemInput[] */
        public array $lineItems,
        public PurchaseQuoteLogisticsOptionInput $logisticsOptions,
        public ?bool $emailCopyToSeller = null,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            emailCopyToSeller: $data['emailCopyToSeller'] ?? null,
            lineItems: array_map(fn($item) => PurchaseQuoteItemInput::fromArray($item), $data['lineItems']),
            logisticsOptions: PurchaseQuoteLogisticsOptionInput::fromArray($data['logisticsOptions']),
            messageToBuyer: $data['messageToBuyer'] ?? null,
            total: isset($data['total']) ? PurchaseQuoteTotalsInput::fromArray($data['total']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'emailCopyToSeller' => $this->emailCopyToSeller,
                'lineItems' => array_map(fn(PurchaseQuoteItemInput $item) => $item->toArray(), $this->lineItems),
                'logisticsOptions' => (object)$this->logisticsOptions->toArray(),
                'messageToBuyer' => $this->messageToBuyer,
                'total' => $this->total !== null ? (object)$this->total->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
