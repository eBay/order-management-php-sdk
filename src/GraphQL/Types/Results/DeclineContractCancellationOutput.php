<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class DeclineContractCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): DeclineContractCancellationSuccess|DeclineContractCancellationError
    {
        return match ($data['__typename'] ?? null) {
            'DeclineContractCancellationSuccess'     => DeclineContractCancellationSuccess::fromArray($data),
            'ContractCancellationActionNotPermittedError',
            'ContractCancellationNotFoundError',
            'DeclineCancellationInputValidationError' => DeclineContractCancellationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
