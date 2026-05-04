<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class MarkItemCommitmentsPaidOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): MarkItemCommitmentsPaidSuccess|MarkItemCommitmentsPaidPartialFailure|MarkItemCommitmentsPaidCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'MarkItemCommitmentsPaidSuccess'        => MarkItemCommitmentsPaidSuccess::fromArray($data),
            'MarkItemCommitmentsPaidPartialFailure' => MarkItemCommitmentsPaidPartialFailure::fromArray($data),
            'MarkItemCommitmentsPaidCompleteFailure' => MarkItemCommitmentsPaidCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
