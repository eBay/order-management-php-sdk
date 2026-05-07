<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn;

readonly class PostPurchaseListingRelistTask
{
    public function __construct(
        public ?RelistStatus $relistStatus = null,
        public ?RelistedListing $relistedListing = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            relistStatus:    isset($data['relistStatus'])
                ? RelistStatus::fromArray($data['relistStatus'])
                : null,
            relistedListing: isset($data['relistedListing'])
                ? RelistedListing::fromArray($data['relistedListing'])
                : null,
        );
    }
}
