<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ItemCommitmentsByIdsSuccess'        => Success::fromArray($data),
            'ItemCommitmentsByIdsPartialFailure' => PartialFailure::fromArray($data),
            'ItemCommitmentsByIdsCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
