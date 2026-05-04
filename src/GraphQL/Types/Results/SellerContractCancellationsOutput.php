<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class SellerContractCancellationsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SellerContractCancellationsSuccess|SellerContractCancellationsError
    {
        return match ($data['__typename'] ?? null) {
            'SellerContractCancellationsSuccess'        => SellerContractCancellationsSuccess::fromArray($data),
            'ContractCancellationInvalidDateRangeError',
            'ContractCancellationInvalidPageSizeError',
            'ContractCancellationInvalidSearchInputError' => SellerContractCancellationsError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
