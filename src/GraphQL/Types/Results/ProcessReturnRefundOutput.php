<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class ProcessReturnRefundOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ProcessReturnRefundSuccess|ProcessReturnRefundError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                                 => ProcessReturnRefundSuccess::fromArray($data),
            'MultipleRefundWithholdingsNotAllowedError',
            'ProcessReturnRefundInputValidationError',
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError',
            'ReturnActionNotPermittedError',
            'ReturnLineItemNotFoundError',
            'ReturnNotFoundError'                         => ProcessReturnRefundError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
