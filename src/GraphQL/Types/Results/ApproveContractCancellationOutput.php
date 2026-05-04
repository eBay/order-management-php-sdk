<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class ApproveContractCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ApproveContractCancellationSuccess|CancellationErrorResult
    {
        return match ($data['__typename'] ?? null) {
            'ApproveContractCancellationSuccess'    => ApproveContractCancellationSuccess::fromArray($data),
            'ContractCancellationActionNotPermittedError',
            'ContractCancellationNotFoundError',
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError'                 => CancellationErrorResult::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
