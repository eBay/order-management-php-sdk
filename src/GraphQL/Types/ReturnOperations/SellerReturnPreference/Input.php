<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference;

readonly class Input
{
    public function __construct(
        public string $listingMarketplace,
    ) {}

    public function toArray(): array
    {
        return ['listingMarketplace' => $this->listingMarketplace];
    }
}
