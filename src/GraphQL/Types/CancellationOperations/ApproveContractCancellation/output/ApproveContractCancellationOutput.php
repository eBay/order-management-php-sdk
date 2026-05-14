<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Output;

abstract class ApproveContractCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? '') {
            'ApproveContractCancellationSuccess' => Success::fromArray($data),
            'ContractCancellationActionNotPermittedError' => ActionNotPermittedError::fromArray($data),
            'ContractCancellationNotFoundError' => NotFoundError::fromArray($data),
            'RefundAuthorizationFailedError',
            'RefundBlockedByPaymentDisputeError',
            'RefundInstrumentDeclinedError',
            'RefundInstrumentInsufficientFundsError',
            'RefundInstrumentInvalidError',
            'RefundProcessingError' => GenericError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename for ApproveContractCancellationOutput: ' . ($data['__typename'] ?? '(null)')
            ),
        };
    }
}
