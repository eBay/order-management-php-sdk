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
 * This type contains the details of a geographical address.
*/
class Address implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine1 The first line of the street address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine1</strong> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $addressLine1 = null;
    
    /**
     * @var string|null $addressLine2 The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine2</strong> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $addressLine2 = null;
    
    /**
     * @var string|null $city The city of the shipping destination.
    */
    private ?string $city = null;
    
    /**
     * @var CountryCodeEnum|null $countryCode The country of the shipping destination, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany.
    */
    private ?CountryCodeEnum $countryCode = null;
    
    /**
     * @var string|null $county The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available.
    */
    private ?string $county = null;
    
    /**
     * @var string|null $postalCode The postal code of the shipping destination. This is usually referred to as ZIP codes in the US. Most countries have postal codes, but not all. The postal code will be returned, if applicable.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $stateOrProvince The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable.
    */
    private ?string $stateOrProvince = null;
    
    /**
     * Instantiates a new Address and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Address
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Address {
        return new Address();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine1 property value. The first line of the street address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine1</strong> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getAddressLine1(): ?string {
        return $this->addressLine1;
    }

    /**
     * Gets the addressLine2 property value. The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine2</strong> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getAddressLine2(): ?string {
        return $this->addressLine2;
    }

    /**
     * Gets the city property value. The city of the shipping destination.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the countryCode property value. The country of the shipping destination, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany.
     * @return CountryCodeEnum|null
    */
    public function getCountryCode(): ?CountryCodeEnum {
        return $this->countryCode;
    }

    /**
     * Gets the county property value. The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available.
     * @return string|null
    */
    public function getCounty(): ?string {
        return $this->county;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'addressLine1' => fn(ParseNode $n) => $o->setAddressLine1($n->getStringValue()),
            'addressLine2' => fn(ParseNode $n) => $o->setAddressLine2($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getEnumValue(CountryCodeEnum::class)),
            'county' => fn(ParseNode $n) => $o->setCounty($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
        ];
    }

    /**
     * Gets the postalCode property value. The postal code of the shipping destination. This is usually referred to as ZIP codes in the US. Most countries have postal codes, but not all. The postal code will be returned, if applicable.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the stateOrProvince property value. The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable.
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
        $writer->writeStringValue('addressLine1', $this->getAddressLine1());
        $writer->writeStringValue('addressLine2', $this->getAddressLine2());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeEnumValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('county', $this->getCounty());
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
     * Sets the addressLine1 property value. The first line of the street address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine1</strong> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the addressLine1 property.
    */
    public function setAddressLine1(?string $value): void {
        $this->addressLine1 = $value;
    }

    /**
     * Sets the addressLine2 property value. The second line of the street address. This field can be used for additional address information, such as a suite or apartment number. This field will be returned if defined for the shipping address.<br><br><span class="tablenote"><strong>Note:</strong> <strong>addressLine2</strong> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the addressLine2 property.
    */
    public function setAddressLine2(?string $value): void {
        $this->addressLine2 = $value;
    }

    /**
     * Sets the city property value. The city of the shipping destination.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the countryCode property value. The country of the shipping destination, represented as a two-letter ISO 3166&#8209;1 alpha&#8209;2 country code. For example, <code>US</code> represents the United States, and <code>DE</code> represents Germany.
     * @param CountryCodeEnum|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?CountryCodeEnum $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the county property value. The county of the shipping destination. Counties typically, but not always, contain multiple cities or towns. This field is returned if known/available.
     * @param string|null $value Value to set for the county property.
    */
    public function setCounty(?string $value): void {
        $this->county = $value;
    }

    /**
     * Sets the postalCode property value. The postal code of the shipping destination. This is usually referred to as ZIP codes in the US. Most countries have postal codes, but not all. The postal code will be returned, if applicable.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state or province of the shipping destination. Most countries have states or provinces, but not all. The state or province will be returned if applicable.
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

}
