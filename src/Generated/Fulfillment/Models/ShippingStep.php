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
 * This type contains shipping information for a fulfillment, including the shipping carrier, the shipping service option, the shipment destination, and the Global Shipping Program reference ID.
*/
class ShippingStep implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $shippingCarrierCode The unique identifier of the shipping carrier being used to ship the line item. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <a href="https://developer.ebay.com/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call can be used to retrieve the latest shipping carrier and shipping service option enumeration values.</span>
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var string|null $shippingServiceCode The unique identifier of the shipping service option being used to ship the line item.<br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier and shipping service option enumeration values. When making the <a href="/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingServiceDetails</code>. Each valid shipping service option (returned in <strong>ShippingServiceDetails.ShippingService</strong> field) and corresponding shipping carrier (returned in <strong>ShippingServiceDetails.ShippingCarrier</strong> field) is returned in response payload.</span>
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * @var ExtendedContact|null $shipTo This container consists of shipping and contact information about the individual or organization to whom the fulfillment package will be shipped.<br><span class="tablenote"><strong>Note:</strong> When <strong>FulfillmentInstructionsType</strong> is <code>FULFILLED_BY_EBAY</code>, there will be no <strong>shipTo</strong> address displayed.</span><br><span class="tablenote"><strong>Note:</strong> For Digitally Delivered Goods (DDG), this address is the same as the Buyer's Registration Address.</span><br><span class="tablenote"><strong>Note:</strong> For a Global Shipping Program shipment, this is the address of the international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.</span>
    */
    private ?ExtendedContact $shipTo = null;
    
    /**
     * @var string|null $shipToReferenceId This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the <strong>fulfillmentStartInstructions.ebaySupportedFulfillment</strong> field will be <code>true</code>. The international shipping provider uses the <strong>shipToReferenceId</strong> value as the primary reference number to retrieve the relevant details about the buyer, the order, and the fulfillment, so the shipment can be completed. <br><br>Sellers must include this value on the shipping label immediately above the street address of the international shipping provider. <br><br>Example: "Reference #1234567890123456" <br><br><span class="tablenote"><strong>Note:</strong> This value is the same as the <strong>ShipToAddress.ReferenceID</strong> value returned by the Trading API's GetOrders call.</span>
    */
    private ?string $shipToReferenceId = null;
    
    /**
     * Instantiates a new ShippingStep and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingStep {
        return new ShippingStep();
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
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'shippingServiceCode' => fn(ParseNode $n) => $o->setShippingServiceCode($n->getStringValue()),
            'shipTo' => fn(ParseNode $n) => $o->setShipTo($n->getObjectValue([ExtendedContact::class, 'createFromDiscriminatorValue'])),
            'shipToReferenceId' => fn(ParseNode $n) => $o->setShipToReferenceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingCarrierCode property value. The unique identifier of the shipping carrier being used to ship the line item. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <a href="https://developer.ebay.com/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call can be used to retrieve the latest shipping carrier and shipping service option enumeration values.</span>
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the shippingServiceCode property value. The unique identifier of the shipping service option being used to ship the line item.<br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier and shipping service option enumeration values. When making the <a href="/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingServiceDetails</code>. Each valid shipping service option (returned in <strong>ShippingServiceDetails.ShippingService</strong> field) and corresponding shipping carrier (returned in <strong>ShippingServiceDetails.ShippingCarrier</strong> field) is returned in response payload.</span>
     * @return string|null
    */
    public function getShippingServiceCode(): ?string {
        return $this->shippingServiceCode;
    }

    /**
     * Gets the shipTo property value. This container consists of shipping and contact information about the individual or organization to whom the fulfillment package will be shipped.<br><span class="tablenote"><strong>Note:</strong> When <strong>FulfillmentInstructionsType</strong> is <code>FULFILLED_BY_EBAY</code>, there will be no <strong>shipTo</strong> address displayed.</span><br><span class="tablenote"><strong>Note:</strong> For Digitally Delivered Goods (DDG), this address is the same as the Buyer's Registration Address.</span><br><span class="tablenote"><strong>Note:</strong> For a Global Shipping Program shipment, this is the address of the international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.</span>
     * @return ExtendedContact|null
    */
    public function getShipTo(): ?ExtendedContact {
        return $this->shipTo;
    }

    /**
     * Gets the shipToReferenceId property value. This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the <strong>fulfillmentStartInstructions.ebaySupportedFulfillment</strong> field will be <code>true</code>. The international shipping provider uses the <strong>shipToReferenceId</strong> value as the primary reference number to retrieve the relevant details about the buyer, the order, and the fulfillment, so the shipment can be completed. <br><br>Sellers must include this value on the shipping label immediately above the street address of the international shipping provider. <br><br>Example: "Reference #1234567890123456" <br><br><span class="tablenote"><strong>Note:</strong> This value is the same as the <strong>ShipToAddress.ReferenceID</strong> value returned by the Trading API's GetOrders call.</span>
     * @return string|null
    */
    public function getShipToReferenceId(): ?string {
        return $this->shipToReferenceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
        $writer->writeStringValue('shippingServiceCode', $this->getShippingServiceCode());
        $writer->writeObjectValue('shipTo', $this->getShipTo());
        $writer->writeStringValue('shipToReferenceId', $this->getShipToReferenceId());
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
     * Sets the shippingCarrierCode property value. The unique identifier of the shipping carrier being used to ship the line item. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <a href="https://developer.ebay.com/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call can be used to retrieve the latest shipping carrier and shipping service option enumeration values.</span>
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the shippingServiceCode property value. The unique identifier of the shipping service option being used to ship the line item.<br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier and shipping service option enumeration values. When making the <a href="/devzone/XML/docs/Reference/eBay/GeteBayDetails.html " target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingServiceDetails</code>. Each valid shipping service option (returned in <strong>ShippingServiceDetails.ShippingService</strong> field) and corresponding shipping carrier (returned in <strong>ShippingServiceDetails.ShippingCarrier</strong> field) is returned in response payload.</span>
     * @param string|null $value Value to set for the shippingServiceCode property.
    */
    public function setShippingServiceCode(?string $value): void {
        $this->shippingServiceCode = $value;
    }

    /**
     * Sets the shipTo property value. This container consists of shipping and contact information about the individual or organization to whom the fulfillment package will be shipped.<br><span class="tablenote"><strong>Note:</strong> When <strong>FulfillmentInstructionsType</strong> is <code>FULFILLED_BY_EBAY</code>, there will be no <strong>shipTo</strong> address displayed.</span><br><span class="tablenote"><strong>Note:</strong> For Digitally Delivered Goods (DDG), this address is the same as the Buyer's Registration Address.</span><br><span class="tablenote"><strong>Note:</strong> For a Global Shipping Program shipment, this is the address of the international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address. For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.</span>
     * @param ExtendedContact|null $value Value to set for the shipTo property.
    */
    public function setShipTo(?ExtendedContact $value): void {
        $this->shipTo = $value;
    }

    /**
     * Sets the shipToReferenceId property value. This is the unique identifer of the Global Shipping Program (GSP) shipment. This field is only returned if the line item is being shipped via GSP (the value of the <strong>fulfillmentStartInstructions.ebaySupportedFulfillment</strong> field will be <code>true</code>. The international shipping provider uses the <strong>shipToReferenceId</strong> value as the primary reference number to retrieve the relevant details about the buyer, the order, and the fulfillment, so the shipment can be completed. <br><br>Sellers must include this value on the shipping label immediately above the street address of the international shipping provider. <br><br>Example: "Reference #1234567890123456" <br><br><span class="tablenote"><strong>Note:</strong> This value is the same as the <strong>ShipToAddress.ReferenceID</strong> value returned by the Trading API's GetOrders call.</span>
     * @param string|null $value Value to set for the shipToReferenceId property.
    */
    public function setShipToReferenceId(?string $value): void {
        $this->shipToReferenceId = $value;
    }

}
