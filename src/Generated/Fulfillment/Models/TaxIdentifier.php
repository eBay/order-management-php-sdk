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
 * This type is used by the <strong>taxIdentifier</strong> container that is returned in <strong>getOrder</strong>. The <strong>taxIdentifier</strong> container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> Currently, the <strong>taxIdentifier</strong> container is only returned in <strong>getOrder</strong> and not in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a>. So, if a seller wanted to view a buyer's tax information for a particular order returned in <strong>getOrders</strong>, that seller would need to use the <strong>orderId</strong> value for that particular order, and then run a <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> call against that order ID. </span>
*/
class TaxIdentifier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CountryCodeEnum|null $issuingCountry This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type or in the  <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> standard.
    */
    private ?CountryCodeEnum $issuingCountry = null;
    
    /**
     * @var TaxIdentifierTypeEnum|null $taxIdentifierType This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type.
    */
    private ?TaxIdentifierTypeEnum $taxIdentifierType = null;
    
    /**
     * @var string|null $taxpayerId This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
    */
    private ?string $taxpayerId = null;
    
    /**
     * Instantiates a new TaxIdentifier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxIdentifier {
        return new TaxIdentifier();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'issuingCountry' => fn(ParseNode $n) => $o->setIssuingCountry($n->getEnumValue(CountryCodeEnum::class)),
            'taxIdentifierType' => fn(ParseNode $n) => $o->setTaxIdentifierType($n->getEnumValue(TaxIdentifierTypeEnum::class)),
            'taxpayerId' => fn(ParseNode $n) => $o->setTaxpayerId($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuingCountry property value. This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type or in the  <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> standard.
     * @return CountryCodeEnum|null
    */
    public function getIssuingCountry(): ?CountryCodeEnum {
        return $this->issuingCountry;
    }

    /**
     * Gets the taxIdentifierType property value. This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type.
     * @return TaxIdentifierTypeEnum|null
    */
    public function getTaxIdentifierType(): ?TaxIdentifierTypeEnum {
        return $this->taxIdentifierType;
    }

    /**
     * Gets the taxpayerId property value. This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
     * @return string|null
    */
    public function getTaxpayerId(): ?string {
        return $this->taxpayerId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('issuingCountry', $this->getIssuingCountry());
        $writer->writeEnumValue('taxIdentifierType', $this->getTaxIdentifierType());
        $writer->writeStringValue('taxpayerId', $this->getTaxpayerId());
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
     * Sets the issuingCountry property value. This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type or in the  <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> standard.
     * @param CountryCodeEnum|null $value Value to set for the issuingCountry property.
    */
    public function setIssuingCountry(?CountryCodeEnum $value): void {
        $this->issuingCountry = $value;
    }

    /**
     * Sets the taxIdentifierType property value. This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type.
     * @param TaxIdentifierTypeEnum|null $value Value to set for the taxIdentifierType property.
    */
    public function setTaxIdentifierType(?TaxIdentifierTypeEnum $value): void {
        $this->taxIdentifierType = $value;
    }

    /**
     * Sets the taxpayerId property value. This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
     * @param string|null $value Value to set for the taxpayerId property.
    */
    public function setTaxpayerId(?string $value): void {
        $this->taxpayerId = $value;
    }

}
