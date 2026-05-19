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
    /**
     * @param PurchaseQuoteItemInput[] $lineItems
     */
    public function __construct(
        public array $lineItems,
        public PurchaseQuoteLogisticsOptionInput $logisticsOptions,
        public bool $emailCopyToSeller = false,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            lineItems: array_map(fn(array $li) => PurchaseQuoteItemInput::fromArray($li), $data['lineItems']),
            logisticsOptions: PurchaseQuoteLogisticsOptionInput::fromArray($data['logisticsOptions']),
            emailCopyToSeller: (bool)($data['emailCopyToSeller'] ?? false),
            messageToBuyer: $data['messageToBuyer'] ?? null,
            total: isset($data['total']) ? PurchaseQuoteTotalsInput::fromArray($data['total']) : null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'lineItems'         => array_map(fn(PurchaseQuoteItemInput $li) => $li->toArray(), $this->lineItems),
            'logisticsOptions'  => (object)$this->logisticsOptions->toArray(),
            'emailCopyToSeller' => $this->emailCopyToSeller,
        ];
        if ($this->messageToBuyer !== null) {
            $result['messageToBuyer'] = $this->messageToBuyer;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total->toArray();
        }
        return $result;
    }
}
