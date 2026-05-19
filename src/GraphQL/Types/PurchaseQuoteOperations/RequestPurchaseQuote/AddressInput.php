<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\RequestPurchaseQuote;

readonly class AddressInput
{
    public function __construct(
        public ?string $addressLine1 = null,
        public ?string $addressLine2 = null,
        public ?string $city = null,
        public ?string $country = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $postalCode = null,
        public ?string $stateOrProvince = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            addressLine1:    $data['addressLine1'] ?? null,
            addressLine2:    $data['addressLine2'] ?? null,
            city:            $data['city'] ?? null,
            country:         $data['country'] ?? null,
            email:           $data['email'] ?? null,
            phone:           $data['phone'] ?? null,
            postalCode:      $data['postalCode'] ?? null,
            stateOrProvince: $data['stateOrProvince'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'addressLine1'    => $this->addressLine1,
            'addressLine2'    => $this->addressLine2,
            'city'            => $this->city,
            'country'         => $this->country,
            'email'           => $this->email,
            'phone'           => $this->phone,
            'postalCode'      => $this->postalCode,
            'stateOrProvince' => $this->stateOrProvince,
        ], static fn($v) => $v !== null);
    }
}
