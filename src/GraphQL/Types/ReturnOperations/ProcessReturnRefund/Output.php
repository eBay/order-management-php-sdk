<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                              => OrderReturnData::fromArray($data),
            'ReturnNotFoundError'                     => ReturnNotFoundError::fromArray($data),
            'ReturnActionNotPermittedError'            => ReturnActionNotPermittedError::fromArray($data),
            'ReturnLineItemNotFoundError'              => ReturnLineItemNotFoundError::fromArray($data),
            'MultipleRefundWithholdingsNotAllowedError' => MultipleRefundWithholdingsNotAllowedError::fromArray($data),
            'ProcessReturnRefundInputValidationError'  => ProcessReturnRefundInputValidationError::fromArray($data),
            'RefundProcessingError',
            'RefundInstrumentInvalidError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentDeclinedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundAuthorizationFailedError'           => GenericError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
