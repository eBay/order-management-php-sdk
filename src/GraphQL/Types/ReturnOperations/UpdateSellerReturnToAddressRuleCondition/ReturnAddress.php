<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition;

readonly class ReturnAddress
{
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $city = null,
        public ?string $stateOrProvince = null,
        public ?string $postalCode = null,
        public ?string $countryCode = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            addressLine1:    $data['addressLine1'] ?? null,
            city:            $data['city'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
            postalCode:      $data['postalCode'] ?? null,
            countryCode:     $data['countryCode'] ?? null,
        );
    }
}
