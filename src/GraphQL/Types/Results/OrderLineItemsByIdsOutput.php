<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class OrderLineItemsByIdsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): OrderLineItemsByIdsSuccess|OrderLineItemsByIdsPartialFailure|OrderLineItemsByIdsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'OrderLineItemsByIdsSuccess'        => OrderLineItemsByIdsSuccess::fromArray($data),
            'OrderLineItemsByIdsPartialFailure' => OrderLineItemsByIdsPartialFailure::fromArray($data),
            'OrderLineItemsByIdsCompleteFailure' => OrderLineItemsByIdsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
