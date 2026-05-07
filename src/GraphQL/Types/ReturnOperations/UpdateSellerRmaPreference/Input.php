<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference;

readonly class Input
{
    public function __construct(
        public string $listingMarketplace,
        public string $preferenceStatus,
    ) {}

    public function toArray(): array
    {
        return [
            'listingMarketplace' => $this->listingMarketplace,
            'preferenceStatus'   => $this->preferenceStatus,
        ];
    }
}
