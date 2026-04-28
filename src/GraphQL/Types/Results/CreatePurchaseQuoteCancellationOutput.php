<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class CreatePurchaseQuoteCancellationOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): CreatePurchaseQuoteCancellationSuccess|CreatePurchaseQuoteCancellationError
    {
        return match ($data['__typename'] ?? null) {
            'CreatePurchaseQuoteCancellationSuccess'  => CreatePurchaseQuoteCancellationSuccess::fromArray($data),
            'PurchaseQuoteCancellationEligibilityError',
            'PurchaseQuoteNotFoundError'              => CreatePurchaseQuoteCancellationError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
