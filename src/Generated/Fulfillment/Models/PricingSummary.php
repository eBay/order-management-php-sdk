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
     * @var Amount|null $adjustment This container shows the total amount of any adjustments that were applied to the cost of the item(s) in the order. This amount does not include shipping, discounts, fixed fees, or taxes.<br><br>This container is only returned if price adjustments were made to the order after the initial transaction/commitment to buy occurred.
    */
    private ?Amount $adjustment = null;
    
    /**
     * @var Amount|null $deliveryCost This container shows the total cost of delivering the order to the buyer before any shipping/delivery discount is applied.
    */
    private ?Amount $deliveryCost = null;
    
    /**
     * @var Amount|null $deliveryDiscount This container shows the total amount of delivery discounts (including shipping discounts) that apply to the order. This should be a negative real number.<br><br>This container is only returned if delivery discounts are being applied to the order.
    */
    private ?Amount $deliveryDiscount = null;
    
    /**
     * @var Amount|null $fee This container shows the total amount of any special fees applied to the order, such as a tire recycling fee or an electronic waste fee. <br><br>This container is returned if special fees are being applied to the order and if the <strong>fieldGroups</strong> is set to <code>TAX_BREAKDOWN</code>.
    */
    private ?Amount $fee = null;
    
    /**
     * @var Amount|null $priceDiscount This container shows the total amount of all item price discounts (including promotions) that apply to the order and reduce its cost to the buyer. This should be a negative real number. <br><br>This container is only returned if special discounts are being applied to the order.
    */
    private ?Amount $priceDiscount = null;
    
    /**
     * @var Amount|null $priceSubtotal This container shows the cumulative costs of of all units of all line items in the order before any discount is applied.
    */
    private ?Amount $priceSubtotal = null;
    
    /**
     * @var Amount|null $tax This container shows the total amount of tax for the order. To calculate the tax percentage rate, divide this value by the value of the <strong>total</strong> field. <br><br>This container is only returned if any type of tax (sales tax, tax on shipping, tax on handling, import tax, etc.) is applied to the order.
    */
    private ?Amount $tax = null;
    
    /**
     * @var Amount|null $total The total cost of the order after adding all line item costs, delivery costs, sales tax, and special fees and then subtracting all special discounts and price adjustments.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Good and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
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
     * Gets the adjustment property value. This container shows the total amount of any adjustments that were applied to the cost of the item(s) in the order. This amount does not include shipping, discounts, fixed fees, or taxes.<br><br>This container is only returned if price adjustments were made to the order after the initial transaction/commitment to buy occurred.
     * @return Amount|null
    */
    public function getAdjustment(): ?Amount {
        return $this->adjustment;
    }

    /**
     * Gets the deliveryCost property value. This container shows the total cost of delivering the order to the buyer before any shipping/delivery discount is applied.
     * @return Amount|null
    */
    public function getDeliveryCost(): ?Amount {
        return $this->deliveryCost;
    }

    /**
     * Gets the deliveryDiscount property value. This container shows the total amount of delivery discounts (including shipping discounts) that apply to the order. This should be a negative real number.<br><br>This container is only returned if delivery discounts are being applied to the order.
     * @return Amount|null
    */
    public function getDeliveryDiscount(): ?Amount {
        return $this->deliveryDiscount;
    }

    /**
     * Gets the fee property value. This container shows the total amount of any special fees applied to the order, such as a tire recycling fee or an electronic waste fee. <br><br>This container is returned if special fees are being applied to the order and if the <strong>fieldGroups</strong> is set to <code>TAX_BREAKDOWN</code>.
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
     * Gets the priceDiscount property value. This container shows the total amount of all item price discounts (including promotions) that apply to the order and reduce its cost to the buyer. This should be a negative real number. <br><br>This container is only returned if special discounts are being applied to the order.
     * @return Amount|null
    */
    public function getPriceDiscount(): ?Amount {
        return $this->priceDiscount;
    }

    /**
     * Gets the priceSubtotal property value. This container shows the cumulative costs of of all units of all line items in the order before any discount is applied.
     * @return Amount|null
    */
    public function getPriceSubtotal(): ?Amount {
        return $this->priceSubtotal;
    }

    /**
     * Gets the tax property value. This container shows the total amount of tax for the order. To calculate the tax percentage rate, divide this value by the value of the <strong>total</strong> field. <br><br>This container is only returned if any type of tax (sales tax, tax on shipping, tax on handling, import tax, etc.) is applied to the order.
     * @return Amount|null
    */
    public function getTax(): ?Amount {
        return $this->tax;
    }

    /**
     * Gets the total property value. The total cost of the order after adding all line item costs, delivery costs, sales tax, and special fees and then subtracting all special discounts and price adjustments.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Good and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
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
     * Sets the adjustment property value. This container shows the total amount of any adjustments that were applied to the cost of the item(s) in the order. This amount does not include shipping, discounts, fixed fees, or taxes.<br><br>This container is only returned if price adjustments were made to the order after the initial transaction/commitment to buy occurred.
     * @param Amount|null $value Value to set for the adjustment property.
    */
    public function setAdjustment(?Amount $value): void {
        $this->adjustment = $value;
    }

    /**
     * Sets the deliveryCost property value. This container shows the total cost of delivering the order to the buyer before any shipping/delivery discount is applied.
     * @param Amount|null $value Value to set for the deliveryCost property.
    */
    public function setDeliveryCost(?Amount $value): void {
        $this->deliveryCost = $value;
    }

    /**
     * Sets the deliveryDiscount property value. This container shows the total amount of delivery discounts (including shipping discounts) that apply to the order. This should be a negative real number.<br><br>This container is only returned if delivery discounts are being applied to the order.
     * @param Amount|null $value Value to set for the deliveryDiscount property.
    */
    public function setDeliveryDiscount(?Amount $value): void {
        $this->deliveryDiscount = $value;
    }

    /**
     * Sets the fee property value. This container shows the total amount of any special fees applied to the order, such as a tire recycling fee or an electronic waste fee. <br><br>This container is returned if special fees are being applied to the order and if the <strong>fieldGroups</strong> is set to <code>TAX_BREAKDOWN</code>.
     * @param Amount|null $value Value to set for the fee property.
    */
    public function setFee(?Amount $value): void {
        $this->fee = $value;
    }

    /**
     * Sets the priceDiscount property value. This container shows the total amount of all item price discounts (including promotions) that apply to the order and reduce its cost to the buyer. This should be a negative real number. <br><br>This container is only returned if special discounts are being applied to the order.
     * @param Amount|null $value Value to set for the priceDiscount property.
    */
    public function setPriceDiscount(?Amount $value): void {
        $this->priceDiscount = $value;
    }

    /**
     * Sets the priceSubtotal property value. This container shows the cumulative costs of of all units of all line items in the order before any discount is applied.
     * @param Amount|null $value Value to set for the priceSubtotal property.
    */
    public function setPriceSubtotal(?Amount $value): void {
        $this->priceSubtotal = $value;
    }

    /**
     * Sets the tax property value. This container shows the total amount of tax for the order. To calculate the tax percentage rate, divide this value by the value of the <strong>total</strong> field. <br><br>This container is only returned if any type of tax (sales tax, tax on shipping, tax on handling, import tax, etc.) is applied to the order.
     * @param Amount|null $value Value to set for the tax property.
    */
    public function setTax(?Amount $value): void {
        $this->tax = $value;
    }

    /**
     * Sets the total property value. The total cost of the order after adding all line item costs, delivery costs, sales tax, and special fees and then subtracting all special discounts and price adjustments.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Good and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
     * @param Amount|null $value Value to set for the total property.
    */
    public function setTotal(?Amount $value): void {
        $this->total = $value;
    }

}
