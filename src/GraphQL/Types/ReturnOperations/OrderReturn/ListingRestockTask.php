<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class ListingRestockTask
{
    public function __construct(
        public ?string $__typename = null,
        public ?PostPurchaseListingRelistTask $relistTask = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $relistTask = null;
        if (($data['__typename'] ?? null) === 'PostPurchaseListingRelistTask') {
            $relistTask = PostPurchaseListingRelistTask::fromArray($data);
        }
        return new self(
            __typename: $data['__typename'] ?? null,
            relistTask: $relistTask,
        );
    }
}
