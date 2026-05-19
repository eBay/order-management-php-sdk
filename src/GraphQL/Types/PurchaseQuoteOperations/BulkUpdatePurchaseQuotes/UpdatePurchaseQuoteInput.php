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
    /**
     * @param PurchaseQuoteItemInput[]|null $lineItems
     */
    public function __construct(
        public string $purchaseQuoteId,
        public bool $emailCopyToSeller = false,
        public ?array $lineItems = null,
        public ?PurchaseQuoteLogisticsOptionInput $logisticsOptions = null,
        public ?string $messageToBuyer = null,
        public ?PurchaseQuoteTotalsInput $total = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            purchaseQuoteId: $data['purchaseQuoteId'],
            emailCopyToSeller: (bool)($data['emailCopyToSeller'] ?? false),
            lineItems: isset($data['lineItems'])
                ? array_map(fn(array $li) => PurchaseQuoteItemInput::fromArray($li), $data['lineItems'])
                : null,
            logisticsOptions: isset($data['logisticsOptions'])
                ? PurchaseQuoteLogisticsOptionInput::fromArray($data['logisticsOptions'])
                : null,
            messageToBuyer: $data['messageToBuyer'] ?? null,
            total: isset($data['total']) ? PurchaseQuoteTotalsInput::fromArray($data['total']) : null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'purchaseQuoteId'    => $this->purchaseQuoteId,
            'emailCopyToSeller'  => $this->emailCopyToSeller,
        ];
        if ($this->lineItems !== null) {
            $result['lineItems'] = array_map(fn(PurchaseQuoteItemInput $li) => $li->toArray(), $this->lineItems);
        }
        if ($this->logisticsOptions !== null) {
            $result['logisticsOptions'] = (object)$this->logisticsOptions->toArray();
        }
        if ($this->messageToBuyer !== null) {
            $result['messageToBuyer'] = $this->messageToBuyer;
        }
        if ($this->total !== null) {
            $result['total'] = $this->total->toArray();
        }
        return $result;
    }
}
