<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference;

readonly class Input
{
    public function __construct(
        public string $listingMarketplace,
        public RmaPreference $rmaPreference,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            listingMarketplace: $data['listingMarketplace'],
            rmaPreference:      RmaPreference::fromArray($data['rmaPreference']),
        );
    }

    public function toArray(): array
    {
        return [
            'listingMarketplace' => $this->listingMarketplace,
            'rmaPreference'      => ['preferenceStatus' => $this->rmaPreference->preferenceStatus],
        ];
    }
}
