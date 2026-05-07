<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdateItemCommitmentTagsSuccess'        => Success::fromArray($data),
            'BulkUpdateItemCommitmentTagsPartialFailure' => PartialFailure::fromArray($data),
            'BulkUpdateItemCommitmentTagsCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
