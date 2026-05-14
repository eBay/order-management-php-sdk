<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Output;

abstract readonly class DeclineContractCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? '') {
            'DeclineContractCancellationSuccess' => Success::fromArray($data),
            'ContractCancellationActionNotPermittedError' => ActionNotPermittedError::fromArray($data),
            'ContractCancellationNotFoundError' => NotFoundError::fromArray($data),
            'DeclineCancellationInputValidationError' => ValidationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? '(none)')
            ),
        };
    }
}
