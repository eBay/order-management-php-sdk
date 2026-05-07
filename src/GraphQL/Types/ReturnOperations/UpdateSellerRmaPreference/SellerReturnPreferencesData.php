<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference;

readonly class SellerReturnPreferencesData extends Output
{
    public function __construct(
        public ?string $listingMarketplace = null,
        public ?RmaPreference $rmaPreference = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerReturnPreferences';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            listingMarketplace: $data['listingMarketplace'] ?? null,
            rmaPreference:      isset($data['rmaPreference'])
                ? RmaPreference::fromArray($data['rmaPreference'])
                : null,
        );
    }
}
