<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class ProvideRmaNumberOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ProvideRmaNumberSuccess|ProvideRmaNumberError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                         => ProvideRmaNumberSuccess::fromArray($data),
            'ProvideRmaNumberInputValidationError',
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError'                 => ProvideRmaNumberError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
