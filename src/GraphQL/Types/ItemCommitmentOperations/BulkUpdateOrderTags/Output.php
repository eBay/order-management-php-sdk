<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdateOrderTagsCompleteFailure' => CompleteFailure::fromArray($data),
            'BulkUpdateOrderTagsPartialFailure'  => PartialFailure::fromArray($data),
            'BulkUpdateOrderTagsSuccess'         => Success::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
