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
 * This type is used to display the charge type and the amount of the charge against the buyer.
*/
class Charge implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $chargeType This field shows the type of buyer charge <br> <br> <span class="tablenote"> <strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sol:ChargeTypeEnum'>eBay API documentation</a>
    */
    private ?string $chargeType = null;
    
    /**
     * Instantiates a new Charge and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Charge
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Charge {
        return new Charge();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the chargeType property value. This field shows the type of buyer charge <br> <br> <span class="tablenote"> <strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sol:ChargeTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getChargeType(): ?string {
        return $this->chargeType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'chargeType' => fn(ParseNode $n) => $o->setChargeType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('chargeType', $this->getChargeType());
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
     * Sets the amount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the chargeType property value. This field shows the type of buyer charge <br> <br> <span class="tablenote"> <strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sol:ChargeTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the chargeType property.
    */
    public function setChargeType(?string $value): void {
        $this->chargeType = $value;
    }

}
