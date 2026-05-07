<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'OrdersByIdsSuccess'        => Success::fromArray($data),
            'OrdersByIdsPartialFailure' => PartialFailure::fromArray($data),
            'OrdersByIdsCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
