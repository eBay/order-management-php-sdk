<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference;

readonly class Input
{
    public function __construct(
        public string $listingMarketplace,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            listingMarketplace: $data['listingMarketplace'],
        );
    }

    public function toArray(): array
    {
        return ['listingMarketplace' => $this->listingMarketplace];
    }
}
