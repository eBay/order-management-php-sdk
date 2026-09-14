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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

abstract readonly class Output
{
    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): MultipleRefundWithholdingsNotAllowedError|OrderReturn|ProcessReturnRefundInputValidationError|RefundAuthorizationFailedError|RefundBlockedByPaymentDisputeError|RefundInstrumentDeclinedError|RefundInstrumentInsufficientFundsError|RefundInstrumentInvalidError|RefundProcessingError|ReturnActionNotPermittedError|ReturnLineItemNotFoundError|ReturnNotFoundError
    {
        return match ($data['__typename'] ?? null) {
            'MultipleRefundWithholdingsNotAllowedError' => MultipleRefundWithholdingsNotAllowedError::fromArray($data),
            'OrderReturn' => OrderReturn::fromArray($data),
            'ProcessReturnRefundInputValidationError' => ProcessReturnRefundInputValidationError::fromArray($data),
            'RefundAuthorizationFailedError' => RefundAuthorizationFailedError::fromArray($data),
            'RefundBlockedByPaymentDisputeError' => RefundBlockedByPaymentDisputeError::fromArray($data),
            'RefundInstrumentDeclinedError' => RefundInstrumentDeclinedError::fromArray($data),
            'RefundInstrumentInsufficientFundsError' => RefundInstrumentInsufficientFundsError::fromArray($data),
            'RefundInstrumentInvalidError' => RefundInstrumentInvalidError::fromArray($data),
            'RefundProcessingError' => RefundProcessingError::fromArray($data),
            'ReturnActionNotPermittedError' => ReturnActionNotPermittedError::fromArray($data),
            'ReturnLineItemNotFoundError' => ReturnLineItemNotFoundError::fromArray($data),
            'ReturnNotFoundError' => ReturnNotFoundError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for Output: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
