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
 * This type is used by the <strong>returnAddress</strong field that is used by the payment dispute methods. If a buyer is returning the item (under payment dispute) to the seller, a primary phone number for the seller must be provided.
*/
class Phone implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $countryCode  The two-letter, <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> code associated with the seller's phone number. This field is needed if the buyer is located in a different country than the seller. It is also OK to provide if the buyer and seller are both located in the same country<br><br>See <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-acceptpaymentdispute.countrycodeenum">CountryCodeEnum</a> for a list of supported values.
    */
    private ?string $countryCode = null;
    
    /**
     * @var string|null $number The seller's primary phone number associated with the return address. When this number is provided in a <strong>contestPaymentDispute</strong> or <strong>contestPaymentDispute</strong> method, it is provided as one continuous numeric string, including the area code. So, if the phone number's area code was '408', a number in this field may look something like this: <br><br><code>"number" : "4088084356"</code><br><br>If the buyer is located in a different country than the seller, the seller's country code will need to be specified in the <strong>countryCode</strong> field.
    */
    private ?string $number = null;
    
    /**
     * Instantiates a new Phone and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Phone
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Phone {
        return new Phone();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the countryCode property value.  The two-letter, <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> code associated with the seller's phone number. This field is needed if the buyer is located in a different country than the seller. It is also OK to provide if the buyer and seller are both located in the same country<br><br>See <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-acceptpaymentdispute.countrycodeenum">CountryCodeEnum</a> for a list of supported values.
     * @return string|null
    */
    public function getCountryCode(): ?string {
        return $this->countryCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'countryCode' => fn(ParseNode $n) => $o->setCountryCode($n->getStringValue()),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the number property value. The seller's primary phone number associated with the return address. When this number is provided in a <strong>contestPaymentDispute</strong> or <strong>contestPaymentDispute</strong> method, it is provided as one continuous numeric string, including the area code. So, if the phone number's area code was '408', a number in this field may look something like this: <br><br><code>"number" : "4088084356"</code><br><br>If the buyer is located in a different country than the seller, the seller's country code will need to be specified in the <strong>countryCode</strong> field.
     * @return string|null
    */
    public function getNumber(): ?string {
        return $this->number;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('countryCode', $this->getCountryCode());
        $writer->writeStringValue('number', $this->getNumber());
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
     * Sets the countryCode property value.  The two-letter, <a href="https://www.iso.org/iso-3166-country-codes.html" target="_blank">ISO 3166</a> code associated with the seller's phone number. This field is needed if the buyer is located in a different country than the seller. It is also OK to provide if the buyer and seller are both located in the same country<br><br>See <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-acceptpaymentdispute.countrycodeenum">CountryCodeEnum</a> for a list of supported values.
     * @param string|null $value Value to set for the countryCode property.
    */
    public function setCountryCode(?string $value): void {
        $this->countryCode = $value;
    }

    /**
     * Sets the number property value. The seller's primary phone number associated with the return address. When this number is provided in a <strong>contestPaymentDispute</strong> or <strong>contestPaymentDispute</strong> method, it is provided as one continuous numeric string, including the area code. So, if the phone number's area code was '408', a number in this field may look something like this: <br><br><code>"number" : "4088084356"</code><br><br>If the buyer is located in a different country than the seller, the seller's country code will need to be specified in the <strong>countryCode</strong> field.
     * @param string|null $value Value to set for the number property.
    */
    public function setNumber(?string $value): void {
        $this->number = $value;
    }

}
