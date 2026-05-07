<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseQuoteLineItemsByIdsSuccess'        => Success::fromArray($data),
            'PurchaseQuoteLineItemsByIdsPartialFailure' => PartialFailure::fromArray($data),
            'PurchaseQuoteLineItemsByIdsCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
