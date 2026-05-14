<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Output;

abstract class SellerContractCancellationsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): static
    {
        return match ($data['__typename']) {
            'ContractCancellationInvalidDateRangeError' => InvalidDateRangeError::fromArray($data),
            'ContractCancellationInvalidPageSizeError' => InvalidPageSizeError::fromArray($data),
            'ContractCancellationInvalidSearchInputError' => InvalidSearchInputError::fromArray($data),
            'SellerContractCancellationsSuccess' => Success::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . $data['__typename']
            ),
        };
    }
}
