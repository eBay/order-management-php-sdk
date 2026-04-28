<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class ApproveReturnOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ApproveReturnSuccess|ApproveReturnError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                       => ApproveReturnSuccess::fromArray($data),
            'ApproveReturnInputValidationError',
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError'               => ApproveReturnError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
