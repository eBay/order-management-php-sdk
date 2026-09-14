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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

abstract readonly class PurchaseFlowType
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): PurchaseFlowAuction|PurchaseFlowBestOffer|PurchaseFlowBuyItNow|PurchaseFlowCommitToBuy|PurchaseFlowRequestTotal|PurchaseFlowSellerInitiatedOffer
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseFlowAuction' => PurchaseFlowAuction::fromArray($data),
            'PurchaseFlowBestOffer' => PurchaseFlowBestOffer::fromArray($data),
            'PurchaseFlowBuyItNow' => PurchaseFlowBuyItNow::fromArray($data),
            'PurchaseFlowCommitToBuy' => PurchaseFlowCommitToBuy::fromArray($data),
            'PurchaseFlowRequestTotal' => PurchaseFlowRequestTotal::fromArray($data),
            'PurchaseFlowSellerInitiatedOffer' => PurchaseFlowSellerInitiatedOffer::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for PurchaseFlowType: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
