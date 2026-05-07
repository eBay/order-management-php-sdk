<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class RelistedListing
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            listingId:  $data['listingId'] ?? null,
        );
    }
}
