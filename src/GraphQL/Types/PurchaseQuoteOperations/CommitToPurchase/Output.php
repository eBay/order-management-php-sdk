<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'CommitToPurchaseBusinessRulesViolated' => BusinessRulesViolated::fromArray($data),
            'CommitToPurchaseSuccess'               => Success::fromArray($data),
            'ReferenceArgumentsNotFound'            => ReferenceArgumentsNotFound::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
