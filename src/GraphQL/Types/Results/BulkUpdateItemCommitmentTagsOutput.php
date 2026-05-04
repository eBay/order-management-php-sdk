<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class BulkUpdateItemCommitmentTagsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): BulkUpdateItemCommitmentTagsSuccess|BulkUpdateItemCommitmentTagsPartialFailure|BulkUpdateItemCommitmentTagsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdateItemCommitmentTagsSuccess'        => BulkUpdateItemCommitmentTagsSuccess::fromArray($data),
            'BulkUpdateItemCommitmentTagsPartialFailure' => BulkUpdateItemCommitmentTagsPartialFailure::fromArray($data),
            'BulkUpdateItemCommitmentTagsCompleteFailure' => BulkUpdateItemCommitmentTagsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
