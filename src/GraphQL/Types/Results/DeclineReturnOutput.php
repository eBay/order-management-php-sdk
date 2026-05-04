<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class DeclineReturnOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): DeclineReturnSuccess|DeclineReturnError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                         => DeclineReturnSuccess::fromArray($data),
            'DeclineReturnInputValidationError',
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError'                 => DeclineReturnError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
