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

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container consists of address information that can be used by sellers for tax purposes.
*/
class TaxAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $city The city name that can be used by sellers for tax purposes.
    */
    private ?string $city = null;
    
    /**
     * @var CountryCodeEnum|null $countryCode The country code that can be used by sellers for tax purposes, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <strong>US</strong> represents the United States, and <strong>DE</strong> represents Germany.
    */
    private ?CountryCodeEnum $countryCode = null;
    
    /**
     * @var string|null $postalCode The postal code that can be used by sellers for tax purposes. Usually referred to as ZIP codes in the US.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $stateOrProvince The state name that can be used by sellers for tax purposes.
    */
    private ?string $stateOrProvince = null;
    
    /**
     * Instantiates a new TaxAddress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxAddress {
        return new TaxAddress();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the city property value. The city name that can be used by sellers for tax purposes.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryCode property value. The country code that can be used by sellers for tax purposes, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <strong>US</strong> represents the United States, and <strong>DE</strong> represents Germany.
     * @return CountryCodeEnum|null
    */
    public function getCountryCode(): ?CountryCodeEnum {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getEnumValue(CountryCodeEnum::class)),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
        ];
    }

    /**
     * Gets the postalCode property value. The postal code that can be used by sellers for tax purposes. Usually referred to as ZIP codes in the US.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the stateOrProvince property value. The state name that can be used by sellers for tax purposes.
     * @return string|null
    */
    public function getStateOrProvince(): ?string {
        return $this->stateOrProvince;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeEnumValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('stateOrProvince', $this->getStateOrProvince());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the city property value. The city name that can be used by sellers for tax purposes.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the countryCode property value. The country code that can be used by sellers for tax purposes, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <strong>US</strong> represents the United States, and <strong>DE</strong> represents Germany.
     * @param CountryCodeEnum|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?CountryCodeEnum $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the postalCode property value. The postal code that can be used by sellers for tax purposes. Usually referred to as ZIP codes in the US.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state name that can be used by sellers for tax purposes.
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

}
