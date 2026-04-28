<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class ItemCommitmentsByIdsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): ItemCommitmentsByIdsSuccess|ItemCommitmentsByIdsPartialFailure|ItemCommitmentsByIdsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'ItemCommitmentsByIdsSuccess'        => ItemCommitmentsByIdsSuccess::fromArray($data),
            'ItemCommitmentsByIdsPartialFailure' => ItemCommitmentsByIdsPartialFailure::fromArray($data),
            'ItemCommitmentsByIdsCompleteFailure' => ItemCommitmentsByIdsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
