<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'MarkItemCommitmentsPaidSuccess'        => Success::fromArray($data),
            'MarkItemCommitmentsPaidPartialFailure' => PartialFailure::fromArray($data),
            'MarkItemCommitmentsPaidCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
