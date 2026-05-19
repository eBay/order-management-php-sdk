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
 * This type is used by the payment dispute methods, and is relevant if the buyer will be returning the item to the seller.
*/
class ReturnAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine1 The first line of the street address.
    */
    private ?string $addressLine1 = null;
    
    /**
     * @var string|null $addressLine2 The second line of the street address. This line is not always necessarily, but is often used for apartment number or suite number, or other relevant information that can not fit on the first line.
    */
    private ?string $addressLine2 = null;
    
    /**
     * @var string|null $city The city of the return address.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country The country's two-letter, ISO 3166-1 country code. See the enumeration type for a country's value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $country = null;
    
    /**
     * @var string|null $county The county of the return address. Counties are not applicable to all countries.
    */
    private ?string $county = null;
    
    /**
     * @var string|null $fullName The full name of return address owner.
    */
    private ?string $fullName = null;
    
    /**
     * @var string|null $postalCode The postal code of the return address.
    */
    private ?string $postalCode = null;
    
    /**
     * @var Phone|null $primaryPhone This type is used by the <strong>returnAddress</strong field that is used by the payment dispute methods. If a buyer is returning the item (under payment dispute) to the seller, a primary phone number for the seller must be provided.
    */
    private ?Phone $primaryPhone = null;
    
    /**
     * @var string|null $stateOrProvince The state or province of the return address.
    */
    private ?string $stateOrProvince = null;
    
    /**
     * Instantiates a new ReturnAddress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnAddress {
        return new ReturnAddress();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the addressLine1 property value. The first line of the street address.
     * @return string|null
    */
    public function getAddressLine1(): ?string {
        return $this->addressLine1;
    }

    /**
     * Gets the addressLine2 property value. The second line of the street address. This line is not always necessarily, but is often used for apartment number or suite number, or other relevant information that can not fit on the first line.
     * @return string|null
    */
    public function getAddressLine2(): ?string {
        return $this->addressLine2;
    }

    /**
     * Gets the city property value. The city of the return address.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. The country's two-letter, ISO 3166-1 country code. See the enumeration type for a country's value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the county property value. The county of the return address. Counties are not applicable to all countries.
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
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'county' => fn(ParseNode $n) => $o->setCounty($n->getStringValue()),
            'fullName' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'primaryPhone' => fn(ParseNode $n) => $o->setPrimaryPhone($n->getObjectValue([Phone::class, 'createFromDiscriminatorValue'])),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
        ];
    }

    /**
     * Gets the fullName property value. The full name of return address owner.
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->fullName;
    }

    /**
     * Gets the postalCode property value. The postal code of the return address.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the primaryPhone property value. This type is used by the <strong>returnAddress</strong field that is used by the payment dispute methods. If a buyer is returning the item (under payment dispute) to the seller, a primary phone number for the seller must be provided.
     * @return Phone|null
    */
    public function getPrimaryPhone(): ?Phone {
        return $this->primaryPhone;
    }

    /**
     * Gets the stateOrProvince property value. The state or province of the return address.
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
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('county', $this->getCounty());
        $writer->writeStringValue('fullName', $this->getFullName());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeObjectValue('primaryPhone', $this->getPrimaryPhone());
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
     * Sets the addressLine1 property value. The first line of the street address.
     * @param string|null $value Value to set for the addressLine1 property.
    */
    public function setAddressLine1(?string $value): void {
        $this->addressLine1 = $value;
    }

    /**
     * Sets the addressLine2 property value. The second line of the street address. This line is not always necessarily, but is often used for apartment number or suite number, or other relevant information that can not fit on the first line.
     * @param string|null $value Value to set for the addressLine2 property.
    */
    public function setAddressLine2(?string $value): void {
        $this->addressLine2 = $value;
    }

    /**
     * Sets the city property value. The city of the return address.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. The country's two-letter, ISO 3166-1 country code. See the enumeration type for a country's value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the county property value. The county of the return address. Counties are not applicable to all countries.
     * @param string|null $value Value to set for the county property.
    */
    public function setCounty(?string $value): void {
        $this->county = $value;
    }

    /**
     * Sets the fullName property value. The full name of return address owner.
     * @param string|null $value Value to set for the fullName property.
    */
    public function setFullName(?string $value): void {
        $this->fullName = $value;
    }

    /**
     * Sets the postalCode property value. The postal code of the return address.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the primaryPhone property value. This type is used by the <strong>returnAddress</strong field that is used by the payment dispute methods. If a buyer is returning the item (under payment dispute) to the seller, a primary phone number for the seller must be provided.
     * @param Phone|null $value Value to set for the primaryPhone property.
    */
    public function setPrimaryPhone(?Phone $value): void {
        $this->primaryPhone = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state or province of the return address.
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

}
