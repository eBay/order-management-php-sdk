<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SendReturnMessageOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SendReturnMessageSuccess|SendReturnMessageError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                           => SendReturnMessageSuccess::fromArray($data),
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError',
            'SendReturnMessageInputValidationError' => SendReturnMessageError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
