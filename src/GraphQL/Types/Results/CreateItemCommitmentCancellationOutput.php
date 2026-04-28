<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class CreateItemCommitmentCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): CreateItemCommitmentCancellationSuccess|CreateItemCommitmentCancellationError
    {
        return match ($data['__typename'] ?? null) {
            'CreateItemCommitmentCancellationSuccess'    => CreateItemCommitmentCancellationSuccess::fromArray($data),
            'ItemCommitmentCancellationEligibilityError',
            'ItemCommitmentNotFoundError'                => CreateItemCommitmentCancellationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
