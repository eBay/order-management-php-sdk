<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class RecordReturnLabelSentOfflineOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): RecordReturnLabelSentOfflineSuccess|RecordReturnLabelSentOfflineError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                                       => RecordReturnLabelSentOfflineSuccess::fromArray($data),
            'RecordReturnLabelSentOfflineInputValidationError',
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError'                               => RecordReturnLabelSentOfflineError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
