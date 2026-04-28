<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class ContractCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ContractCancellationSuccess|ContractCancellationError
    {
        return match ($data['__typename'] ?? null) {
            'ContractCancellationSuccess'   => ContractCancellationSuccess::fromArray($data),
            'ContractCancellationNotFoundError' => ContractCancellationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
