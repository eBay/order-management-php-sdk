<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

readonly class ReturnAddress
{
    public function __construct(
        public ?string $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $stateOrProvince = null,
        public ?string $postalCode = null,
        public ?string $countryCode = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            addressId:       $data['addressId'] ?? null,
            addressLine1:    $data['addressLine1'] ?? null,
            addressLine2:    $data['addressLine2'] ?? null,
            city:            $data['city'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
            postalCode:      $data['postalCode'] ?? null,
            countryCode:     $data['countryCode'] ?? null,
        );
    }
}
