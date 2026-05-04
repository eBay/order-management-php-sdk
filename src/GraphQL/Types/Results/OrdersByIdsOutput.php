<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class OrdersByIdsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): OrdersByIdsSuccess|OrdersByIdsPartialFailure|OrdersByIdsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'OrdersByIdsSuccess'        => OrdersByIdsSuccess::fromArray($data),
            'OrdersByIdsPartialFailure' => OrdersByIdsPartialFailure::fromArray($data),
            'OrdersByIdsCompleteFailure' => OrdersByIdsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
