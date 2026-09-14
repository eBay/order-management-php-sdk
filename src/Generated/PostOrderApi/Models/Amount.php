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
 * This type is used to expressed dollar amounts and the currency used.
*/
class Amount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $convertedFromCurrency The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br/><br/>If no conversion occurs, this should not be populated.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
    */
    private ?string $convertedFromCurrency = null;
    
    /**
     * @var float|null $convertedFromValue The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br/><br/>If no conversion occurs, this should not be populated.
    */
    private ?float $convertedFromValue = null;
    
    /**
     * @var string|null $currency A three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $exchangeRate This field shows the exchange rate used to convert the amount in the <b>convertedFromValue</b> field to amount in the <b>value</b> field. This field is only returned when eBay does a currency version.
    */
    private ?string $exchangeRate = null;
    
    /**
     * @var float|null $value The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
    */
    private ?float $value = null;
    
    /**
     * Instantiates a new Amount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Amount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Amount {
        return new Amount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the convertedFromCurrency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br/><br/>If no conversion occurs, this should not be populated.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
     * @return string|null
    */
    public function getConvertedFromCurrency(): ?string {
        return $this->convertedFromCurrency;
    }

    /**
     * Gets the convertedFromValue property value. The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br/><br/>If no conversion occurs, this should not be populated.
     * @return float|null
    */
    public function getConvertedFromValue(): ?float {
        return $this->convertedFromValue;
    }

    /**
     * Gets the currency property value. A three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * Gets the exchangeRate property value. This field shows the exchange rate used to convert the amount in the <b>convertedFromValue</b> field to amount in the <b>value</b> field. This field is only returned when eBay does a currency version.
     * @return string|null
    */
    public function getExchangeRate(): ?string {
        return $this->exchangeRate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'convertedFromCurrency' => fn(ParseNode $n) => $o->setConvertedFromCurrency($n->getStringValue()),
            'convertedFromValue' => fn(ParseNode $n) => $o->setConvertedFromValue($n->getFloatValue()),
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'exchangeRate' => fn(ParseNode $n) => $o->setExchangeRate($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ];
    }

    /**
     * Gets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('convertedFromCurrency', $this->getConvertedFromCurrency());
        $writer->writeFloatValue('convertedFromValue', $this->getConvertedFromValue());
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('exchangeRate', $this->getExchangeRate());
        $writer->writeFloatValue('value', $this->getValue());
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
     * Sets the convertedFromCurrency property value. The three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code representing the currency of the amount in the <b> convertedFromValue</b> field. This value is the pre-conversion currency.<br/><br/>If no conversion occurs, this should not be populated.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
     * @param string|null $value Value to set for the convertedFromCurrency property.
    */
    public function setConvertedFromCurrency(?string $value): void {
        $this->convertedFromCurrency = $value;
    }

    /**
     * Sets the convertedFromValue property value. The monetary amount before any conversion is performed, in the currency specified by the <b> convertedFromCurrency</b> field. This value is the pre-conversion amount. The <b> value</b> field contains the converted amount of this value, in the currency specified by the <b> currency</b> field.<br/><br/>If no conversion occurs, this should not be populated.
     * @param float|null $value Value to set for the convertedFromValue property.
    */
    public function setConvertedFromValue(?float $value): void {
        $this->convertedFromValue = $value;
    }

    /**
     * Sets the currency property value. A three-letter <a href="https://www.iso.org/iso-4217-currency-codes.html " target="_blank">ISO 4217</a> code that indicates the currency of the amount in the <b>value</b> field. This field is always returned with any container using <b>Amount</b> type.<br/><br/>The list of three-digit currency codes that may be returned in this field are defined in the <a href="/devzone/post-order/types/CurrencyCodeEnum.html">CurrencyCodeEnum</a> type definition.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the exchangeRate property value. This field shows the exchange rate used to convert the amount in the <b>convertedFromValue</b> field to amount in the <b>value</b> field. This field is only returned when eBay does a currency version.
     * @param string|null $value Value to set for the exchangeRate property.
    */
    public function setExchangeRate(?string $value): void {
        $this->exchangeRate = $value;
    }

    /**
     * Sets the value property value. The monetary amount, in the currency specified by the <b>currency</b> field. This field is always returned with any container using <b>Amount</b> type.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->value = $value;
    }

}
