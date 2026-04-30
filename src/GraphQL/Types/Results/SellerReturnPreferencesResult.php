<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerReturnPreferencesResult extends SellerReturnPreferenceOutput
{
    public function __construct(
        public ?string $listingMarketplace = null,
        public ?string $rmaPreferenceStatus = null,
    ) {}

    public function getTypename(): string
    {
        return 'SellerReturnPreferences';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            listingMarketplace: $data['listingMarketplace'] ?? null,
            rmaPreferenceStatus: $data['rmaPreference']['preferenceStatus'] ?? null,
        );
    }
}
