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
 * This type contains a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
*/
class PricingSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $adjustment This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $adjustment = null;
    
    /**
     * @var Amount|null $deliveryCost This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $deliveryCost = null;
    
    /**
     * @var Amount|null $deliveryDiscount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $deliveryDiscount = null;
    
    /**
     * @var Amount|null $fee This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $fee = null;
    
    /**
     * @var Amount|null $priceDiscount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $priceDiscount = null;
    
    /**
     * @var Amount|null $priceSubtotal This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $priceSubtotal = null;
    
    /**
     * @var Amount|null $tax This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $tax = null;
    
    /**
     * @var Amount|null $total This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $total = null;
    
    /**
     * Instantiates a new PricingSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PricingSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PricingSummary {
        return new PricingSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adjustment property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getAdjustment(): ?Amount {
        return $this->adjustment;
    }

    /**
     * Gets the deliveryCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getDeliveryCost(): ?Amount {
        return $this->deliveryCost;
    }

    /**
     * Gets the deliveryDiscount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getDeliveryDiscount(): ?Amount {
        return $this->deliveryDiscount;
    }

    /**
     * Gets the fee property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getFee(): ?Amount {
        return $this->fee;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adjustment' => fn(ParseNode $n) => $o->setAdjustment($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'deliveryCost' => fn(ParseNode $n) => $o->setDeliveryCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'deliveryDiscount' => fn(ParseNode $n) => $o->setDeliveryDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'fee' => fn(ParseNode $n) => $o->setFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'priceDiscount' => fn(ParseNode $n) => $o->setPriceDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'priceSubtotal' => fn(ParseNode $n) => $o->setPriceSubtotal($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'tax' => fn(ParseNode $n) => $o->setTax($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the priceDiscount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getPriceDiscount(): ?Amount {
        return $this->priceDiscount;
    }

    /**
     * Gets the priceSubtotal property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getPriceSubtotal(): ?Amount {
        return $this->priceSubtotal;
    }

    /**
     * Gets the tax property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getTax(): ?Amount {
        return $this->tax;
    }

    /**
     * Gets the total property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getTotal(): ?Amount {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('adjustment', $this->getAdjustment());
        $writer->writeObjectValue('deliveryCost', $this->getDeliveryCost());
        $writer->writeObjectValue('deliveryDiscount', $this->getDeliveryDiscount());
        $writer->writeObjectValue('fee', $this->getFee());
        $writer->writeObjectValue('priceDiscount', $this->getPriceDiscount());
        $writer->writeObjectValue('priceSubtotal', $this->getPriceSubtotal());
        $writer->writeObjectValue('tax', $this->getTax());
        $writer->writeObjectValue('total', $this->getTotal());
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
     * Sets the adjustment property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the adjustment property.
    */
    public function setAdjustment(?Amount $value): void {
        $this->adjustment = $value;
    }

    /**
     * Sets the deliveryCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the deliveryCost property.
    */
    public function setDeliveryCost(?Amount $value): void {
        $this->deliveryCost = $value;
    }

    /**
     * Sets the deliveryDiscount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the deliveryDiscount property.
    */
    public function setDeliveryDiscount(?Amount $value): void {
        $this->deliveryDiscount = $value;
    }

    /**
     * Sets the fee property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the fee property.
    */
    public function setFee(?Amount $value): void {
        $this->fee = $value;
    }

    /**
     * Sets the priceDiscount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the priceDiscount property.
    */
    public function setPriceDiscount(?Amount $value): void {
        $this->priceDiscount = $value;
    }

    /**
     * Sets the priceSubtotal property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the priceSubtotal property.
    */
    public function setPriceSubtotal(?Amount $value): void {
        $this->priceSubtotal = $value;
    }

    /**
     * Sets the tax property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the tax property.
    */
    public function setTax(?Amount $value): void {
        $this->tax = $value;
    }

    /**
     * Sets the total property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the total property.
    */
    public function setTotal(?Amount $value): void {
        $this->total = $value;
    }

}
