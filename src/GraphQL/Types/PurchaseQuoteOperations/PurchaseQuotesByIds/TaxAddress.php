<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class TaxAddress
{
    public function __construct(
        public ?string $addressId = null,
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $stateOrProvince = null,
        public ?string $country = null,
        public ?string $postalCode = null,
        public ?string $phone = null,
        public ?string $email = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            addressId:       $data['addressId'] ?? null,
            addressLine1:    $data['addressLine1'] ?? null,
            addressLine2:    $data['addressLine2'] ?? null,
            city:            $data['city'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
            country:         $data['country'] ?? null,
            postalCode:      $data['postalCode'] ?? null,
            phone:           $data['phone'] ?? null,
            email:           $data['email'] ?? null,
        );
    }
}
