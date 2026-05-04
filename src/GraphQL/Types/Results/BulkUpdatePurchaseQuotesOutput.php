<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class BulkUpdatePurchaseQuotesOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): BulkUpdatePurchaseQuotesSuccess|BulkUpdatePurchaseQuotesPartialFailure|BulkUpdatePurchaseQuotesCompleteFailure
    {
        return match ($data['__typename'] ?? null) {
            'BulkUpdatePurchaseQuotesSuccess'        => BulkUpdatePurchaseQuotesSuccess::fromArray($data),
            'BulkUpdatePurchaseQuotesPartialFailure' => BulkUpdatePurchaseQuotesPartialFailure::fromArray($data),
            'BulkUpdatePurchaseQuotesCompleteFailure' => BulkUpdatePurchaseQuotesCompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
