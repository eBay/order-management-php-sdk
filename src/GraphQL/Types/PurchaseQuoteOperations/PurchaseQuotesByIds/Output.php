<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'PurchaseQuotesByIdsSuccess'        => Success::fromArray($data),
            'PurchaseQuotesByIdsPartialFailure' => PartialFailure::fromArray($data),
            'PurchaseQuotesByIdsCompleteFailure' => CompleteFailure::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
