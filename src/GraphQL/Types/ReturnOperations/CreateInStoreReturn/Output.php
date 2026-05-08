<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                     => OrderReturnData::fromArray($data),
            'ReturnCreationNotAllowedError'   => ReturnCreationNotAllowedError::fromArray($data),
            'OrderLineItemNotFoundError'                => GenericError::fromArray($data),
            'CreateInStoreReturnInputValidationError'   => InputValidationError::fromArray($data),
            'ReturnRequestLineItemRequiredError'        => RequestLineItemRequiredError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
