<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class PurchaseQuotesByIdsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): PurchaseQuotesByIdsSuccess|PurchaseQuotesByIdsPartialFailure|PurchaseQuotesByIdsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseQuotesByIdsSuccess'        => PurchaseQuotesByIdsSuccess::fromArray($data),
            'PurchaseQuotesByIdsPartialFailure' => PurchaseQuotesByIdsPartialFailure::fromArray($data),
            'PurchaseQuotesByIdsCompleteFailure' => PurchaseQuotesByIdsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
