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

namespace EBay\OrderManagement\Generated\PostOrderApi\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
*/
class Address implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $addressLine1 The first line of the street address. The first line of the street address is always used by containers using the <b>Address</b> type.
    */
    private ?string $addressLine1 = null;
    
    /**
     * @var string|null $addressLine2 The second line of the street address. This field is not always used, but it should be provided if applicable. It might be used for something like 'Suite Number' or 'Apt Number'.
    */
    private ?string $addressLine2 = null;
    
    /**
     * @var string|null $addressType This enumeration value indicates whether the address is a business, a personal address, PO Box, or other type of address. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AddressTypeEnum.html">AddressTypeEnum</a> type definition.
    */
    private ?string $addressType = null;
    
    /**
     * @var string|null $city The city of the address. This field is always used by containers using the <b>Address</b> type.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country This enumeration value indicates the country of the address. The three-letter country codes of the ISO 3166-1 Standard are used. This field is always used by containers using the <b>Address</b> type.<br/><br/>The list of two-digit country codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CountryCodeEnum.html">CountryCodeEnum</a> type definition.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $county The county of the address. This field is not always used, but it should be provided if applicable.
    */
    private ?string $county = null;
    
    /**
     * @var bool|null $isTransliterated This Boolean field is returned as <code>true</code> if language transliteration was required.
    */
    private ?bool $isTransliterated = null;
    
    /**
     * @var string|null $nationalRegion This string value indicates a specific region or metropolitan area within a country in which the address resides. Not all countries have defined national regions.
    */
    private ?string $nationalRegion = null;
    
    /**
     * @var string|null $postalCode The postal code of the address. This field is always used by containers using the <b>Address</b> type.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $script This enumeration value indicates the language that the address has been transliterated into. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is <code>true</code>. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
    */
    private ?string $script = null;
    
    /**
     * @var string|null $stateOrProvince The state or province of the address. This field is always used by containers using the <b>Address</b> type.
    */
    private ?string $stateOrProvince = null;
    
    /**
     * @var string|null $transliteratedFromScript This enumeration value indicates the language that the address has been transliterated from. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is 'true'. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
    */
    private ?string $transliteratedFromScript = null;
    
    /**
     * @var string|null $worldRegion This string value indicates the region of the world in which the address resides. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of world region enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/WorldRegionEnum.html">WorldRegionEnum</a> type definition.
    */
    private ?string $worldRegion = null;
    
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
     * Gets the addressLine1 property value. The first line of the street address. The first line of the street address is always used by containers using the <b>Address</b> type.
     * @return string|null
    */
    public function getAddressLine1(): ?string {
        return $this->addressLine1;
    }

    /**
     * Gets the addressLine2 property value. The second line of the street address. This field is not always used, but it should be provided if applicable. It might be used for something like 'Suite Number' or 'Apt Number'.
     * @return string|null
    */
    public function getAddressLine2(): ?string {
        return $this->addressLine2;
    }

    /**
     * Gets the addressType property value. This enumeration value indicates whether the address is a business, a personal address, PO Box, or other type of address. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AddressTypeEnum.html">AddressTypeEnum</a> type definition.
     * @return string|null
    */
    public function getAddressType(): ?string {
        return $this->addressType;
    }

    /**
     * Gets the city property value. The city of the address. This field is always used by containers using the <b>Address</b> type.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. This enumeration value indicates the country of the address. The three-letter country codes of the ISO 3166-1 Standard are used. This field is always used by containers using the <b>Address</b> type.<br/><br/>The list of two-digit country codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CountryCodeEnum.html">CountryCodeEnum</a> type definition.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the county property value. The county of the address. This field is not always used, but it should be provided if applicable.
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
            'addressType' => fn(ParseNode $n) => $o->setAddressType($n->getStringValue()),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'county' => fn(ParseNode $n) => $o->setCounty($n->getStringValue()),
            'isTransliterated' => fn(ParseNode $n) => $o->setIsTransliterated($n->getBooleanValue()),
            'nationalRegion' => fn(ParseNode $n) => $o->setNationalRegion($n->getStringValue()),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'script' => fn(ParseNode $n) => $o->setScript($n->getStringValue()),
            'stateOrProvince' => fn(ParseNode $n) => $o->setStateOrProvince($n->getStringValue()),
            'transliteratedFromScript' => fn(ParseNode $n) => $o->setTransliteratedFromScript($n->getStringValue()),
            'worldRegion' => fn(ParseNode $n) => $o->setWorldRegion($n->getStringValue()),
        ];
    }

    /**
     * Gets the isTransliterated property value. This Boolean field is returned as <code>true</code> if language transliteration was required.
     * @return bool|null
    */
    public function getIsTransliterated(): ?bool {
        return $this->isTransliterated;
    }

    /**
     * Gets the nationalRegion property value. This string value indicates a specific region or metropolitan area within a country in which the address resides. Not all countries have defined national regions.
     * @return string|null
    */
    public function getNationalRegion(): ?string {
        return $this->nationalRegion;
    }

    /**
     * Gets the postalCode property value. The postal code of the address. This field is always used by containers using the <b>Address</b> type.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the script property value. This enumeration value indicates the language that the address has been transliterated into. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is <code>true</code>. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
     * @return string|null
    */
    public function getScript(): ?string {
        return $this->script;
    }

    /**
     * Gets the stateOrProvince property value. The state or province of the address. This field is always used by containers using the <b>Address</b> type.
     * @return string|null
    */
    public function getStateOrProvince(): ?string {
        return $this->stateOrProvince;
    }

    /**
     * Gets the transliteratedFromScript property value. This enumeration value indicates the language that the address has been transliterated from. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is 'true'. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
     * @return string|null
    */
    public function getTransliteratedFromScript(): ?string {
        return $this->transliteratedFromScript;
    }

    /**
     * Gets the worldRegion property value. This string value indicates the region of the world in which the address resides. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of world region enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/WorldRegionEnum.html">WorldRegionEnum</a> type definition.
     * @return string|null
    */
    public function getWorldRegion(): ?string {
        return $this->worldRegion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('addressLine1', $this->getAddressLine1());
        $writer->writeStringValue('addressLine2', $this->getAddressLine2());
        $writer->writeStringValue('addressType', $this->getAddressType());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('county', $this->getCounty());
        $writer->writeBooleanValue('isTransliterated', $this->getIsTransliterated());
        $writer->writeStringValue('nationalRegion', $this->getNationalRegion());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('script', $this->getScript());
        $writer->writeStringValue('stateOrProvince', $this->getStateOrProvince());
        $writer->writeStringValue('transliteratedFromScript', $this->getTransliteratedFromScript());
        $writer->writeStringValue('worldRegion', $this->getWorldRegion());
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
     * Sets the addressLine1 property value. The first line of the street address. The first line of the street address is always used by containers using the <b>Address</b> type.
     * @param string|null $value Value to set for the addressLine1 property.
    */
    public function setAddressLine1(?string $value): void {
        $this->addressLine1 = $value;
    }

    /**
     * Sets the addressLine2 property value. The second line of the street address. This field is not always used, but it should be provided if applicable. It might be used for something like 'Suite Number' or 'Apt Number'.
     * @param string|null $value Value to set for the addressLine2 property.
    */
    public function setAddressLine2(?string $value): void {
        $this->addressLine2 = $value;
    }

    /**
     * Sets the addressType property value. This enumeration value indicates whether the address is a business, a personal address, PO Box, or other type of address. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AddressTypeEnum.html">AddressTypeEnum</a> type definition.
     * @param string|null $value Value to set for the addressType property.
    */
    public function setAddressType(?string $value): void {
        $this->addressType = $value;
    }

    /**
     * Sets the city property value. The city of the address. This field is always used by containers using the <b>Address</b> type.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. This enumeration value indicates the country of the address. The three-letter country codes of the ISO 3166-1 Standard are used. This field is always used by containers using the <b>Address</b> type.<br/><br/>The list of two-digit country codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CountryCodeEnum.html">CountryCodeEnum</a> type definition.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->country = $value;
    }

    /**
     * Sets the county property value. The county of the address. This field is not always used, but it should be provided if applicable.
     * @param string|null $value Value to set for the county property.
    */
    public function setCounty(?string $value): void {
        $this->county = $value;
    }

    /**
     * Sets the isTransliterated property value. This Boolean field is returned as <code>true</code> if language transliteration was required.
     * @param bool|null $value Value to set for the isTransliterated property.
    */
    public function setIsTransliterated(?bool $value): void {
        $this->isTransliterated = $value;
    }

    /**
     * Sets the nationalRegion property value. This string value indicates a specific region or metropolitan area within a country in which the address resides. Not all countries have defined national regions.
     * @param string|null $value Value to set for the nationalRegion property.
    */
    public function setNationalRegion(?string $value): void {
        $this->nationalRegion = $value;
    }

    /**
     * Sets the postalCode property value. The postal code of the address. This field is always used by containers using the <b>Address</b> type.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the script property value. This enumeration value indicates the language that the address has been transliterated into. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is <code>true</code>. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
     * @param string|null $value Value to set for the script property.
    */
    public function setScript(?string $value): void {
        $this->script = $value;
    }

    /**
     * Sets the stateOrProvince property value. The state or province of the address. This field is always used by containers using the <b>Address</b> type.
     * @param string|null $value Value to set for the stateOrProvince property.
    */
    public function setStateOrProvince(?string $value): void {
        $this->stateOrProvince = $value;
    }

    /**
     * Sets the transliteratedFromScript property value. This enumeration value indicates the language that the address has been transliterated from. This field is only returned if transliteration was required (and the <b>isTransliterated</b> field is 'true'. Transliteration is required for languages that use special characters, such as Japanese, Chinese, or Arabic.<br/><br/>The list of language enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/LanguageScriptEnum.html">LanguageScriptEnum</a> type definition.
     * @param string|null $value Value to set for the transliteratedFromScript property.
    */
    public function setTransliteratedFromScript(?string $value): void {
        $this->transliteratedFromScript = $value;
    }

    /**
     * Sets the worldRegion property value. This string value indicates the region of the world in which the address resides. This field is not always used by containers using the <b>Address</b> type.<br/><br/>The list of world region enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/WorldRegionEnum.html">WorldRegionEnum</a> type definition.
     * @param string|null $value Value to set for the worldRegion property.
    */
    public function setWorldRegion(?string $value): void {
        $this->worldRegion = $value;
    }

}
