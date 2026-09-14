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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn;

abstract readonly class ReturnReferralReason
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): DamagedItemReturned|NoRefundForReturnShipping|OtherReferralReason|ReceivedEmptyBox|RefundNotReceived|RefundedBuyer|ReplacementSent|ReturnNotReceived|ReturnedWrongItem|UnableToReachAgreement|UnresponsiveTradingPartner
    {
        return match ($data['__typename'] ?? null) {
            'DamagedItemReturned' => DamagedItemReturned::fromArray($data),
            'NoRefundForReturnShipping' => NoRefundForReturnShipping::fromArray($data),
            'OtherReferralReason' => OtherReferralReason::fromArray($data),
            'ReceivedEmptyBox' => ReceivedEmptyBox::fromArray($data),
            'RefundNotReceived' => RefundNotReceived::fromArray($data),
            'RefundedBuyer' => RefundedBuyer::fromArray($data),
            'ReplacementSent' => ReplacementSent::fromArray($data),
            'ReturnNotReceived' => ReturnNotReceived::fromArray($data),
            'ReturnedWrongItem' => ReturnedWrongItem::fromArray($data),
            'UnableToReachAgreement' => UnableToReachAgreement::fromArray($data),
            'UnresponsiveTradingPartner' => UnresponsiveTradingPartner::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for ReturnReferralReason: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
