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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes;

readonly class UpdatePurchaseQuoteInput
{
    public function __construct(
        public string $purchaseQuoteId,
        public ?bool $emailCopyToSeller = null,
        /** @var PurchaseQuoteItemInput[] */
        public ?array $lineItems = null,
        public ?PurchaseQuoteLogisticsOptionInput $logisticsOptions = null,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            emailCopyToSeller: $data['emailCopyToSeller'] ?? null,
            lineItems: array_map(fn($item) => PurchaseQuoteItemInput::fromArray($item), $data['lineItems'] ?? []),
            logisticsOptions: isset($data['logisticsOptions']) ? PurchaseQuoteLogisticsOptionInput::fromArray($data['logisticsOptions']) : null,
            messageToBuyer: $data['messageToBuyer'] ?? null,
            purchaseQuoteId: $data['purchaseQuoteId'],
            total: isset($data['total']) ? PurchaseQuoteTotalsInput::fromArray($data['total']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'emailCopyToSeller' => $this->emailCopyToSeller,
                'lineItems' => $this->lineItems !== null ? array_map(fn(PurchaseQuoteItemInput $item) => $item->toArray(), $this->lineItems) : null,
                'logisticsOptions' => $this->logisticsOptions !== null ? (object)$this->logisticsOptions->toArray() : null,
                'messageToBuyer' => $this->messageToBuyer,
                'purchaseQuoteId' => $this->purchaseQuoteId,
                'total' => $this->total !== null ? (object)$this->total->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
