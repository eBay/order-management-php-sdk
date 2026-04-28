<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class RecordReturnReceivedOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): RecordReturnReceivedSuccess|RecordReturnReceivedError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                  => RecordReturnReceivedSuccess::fromArray($data),
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError'          => RecordReturnReceivedError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
