<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class PostPurchaseListingRelistTask extends ListingRestockTask
{
    public function __construct(
        public ?RelistStatus $relistStatus = null,
        public ?RelistedListing $relistedListing = null,
    ) {}

    public function getTypename(): string
    {
        return 'PostPurchaseListingRelistTask';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            relistStatus: isset($data['relistStatus'])
                ? RelistStatus::fromArray($data['relistStatus']) : null,
            relistedListing: isset($data['relistedListing'])
                ? RelistedListing::fromArray($data['relistedListing']) : null,
        );
    }
}
