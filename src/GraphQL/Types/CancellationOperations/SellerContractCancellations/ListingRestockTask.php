<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

abstract readonly class ListingRestockTask
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'PostPurchaseListingRelistTask' => PostPurchaseListingRelistTask::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
