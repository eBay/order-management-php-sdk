<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class PurchaseQuoteLineItemsByIdsOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): PurchaseQuoteLineItemsByIdsSuccess|PurchaseQuoteLineItemsByIdsPartialFailure|PurchaseQuoteLineItemsByIdsCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseQuoteLineItemsByIdsSuccess'        => PurchaseQuoteLineItemsByIdsSuccess::fromArray($data),
            'PurchaseQuoteLineItemsByIdsPartialFailure' => PurchaseQuoteLineItemsByIdsPartialFailure::fromArray($data),
            'PurchaseQuoteLineItemsByIdsCompleteFailure' => PurchaseQuoteLineItemsByIdsCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
