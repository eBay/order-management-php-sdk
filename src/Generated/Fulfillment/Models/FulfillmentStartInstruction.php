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
 * This type contains a set of specifications for processing a fulfillment of an order, including the type of fulfillment, shipping carrier and service, addressing details, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.
*/
class FulfillmentStartInstruction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AppointmentDetails|null $appointment This container provides information used by the installation provider concerning appointment details selected by the buyer.
    */
    private ?AppointmentDetails $appointment = null;
    
    /**
     * @var string|null $destinationTimeZone This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
    */
    private ?string $destinationTimeZone = null;
    
    /**
     * @var bool|null $ebaySupportedFulfillment This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. <br><br>For more information, see the <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646 " target="_blank">Global Shipping Program</a> help topic.
    */
    private ?bool $ebaySupportedFulfillment = null;
    
    /**
     * @var Address|null $finalDestinationAddress This container is only returned if the value of <strong>ebaySupportedFulfillment</strong> field is <code>true</code>. <br><br>This is the final destination address for a Global Shipping Program shipment or an eBay International Shipping shipment, which is usually the recipient's home. Sellers should not ship directly to this address; instead they should ship this package to their international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address.<br><br>For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.<p> <span class="tablenote"><strong>Note:</strong> For Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer shipping address.</span></p>
    */
    private ?Address $finalDestinationAddress = null;
    
    /**
     * @var FulfillmentInstructionsType|null $fulfillmentInstructionsType The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <strong>ebaySupportedFulfillment</strong> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types.
    */
    private ?FulfillmentInstructionsType $fulfillmentInstructionsType = null;
    
    /**
     * @var string|null $maxEstimatedDeliveryDate This is the estimated latest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $maxEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $minEstimatedDeliveryDate This is the estimated earliest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $minEstimatedDeliveryDate = null;
    
    /**
     * @var PickupStep|null $pickupStep This container is only returned for In-Store Pickup orders, and it indicates the specific merchant's store where the buyer will pick up the order. The In-Store Pickup feature is supported in the US, Canada, UK, Germany, and Australia marketplaces.
    */
    private ?PickupStep $pickupStep = null;
    
    /**
     * @var ShippingStep|null $shippingStep This container consists of shipping information for this fulfillment, including the shipping carrier, the shipping service option, and the shipment destination. This container is not returned if the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code>, or for In-Store Pickup orders. <br><br> For Click and Collect orders, the shipping destination will be a brick-and-mortar store where the buyer will pick up the order.
    */
    private ?ShippingStep $shippingStep = null;
    
    /**
     * Instantiates a new FulfillmentStartInstruction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FulfillmentStartInstruction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FulfillmentStartInstruction {
        return new FulfillmentStartInstruction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appointment property value. This container provides information used by the installation provider concerning appointment details selected by the buyer.
     * @return AppointmentDetails|null
    */
    public function getAppointment(): ?AppointmentDetails {
        return $this->appointment;
    }

    /**
     * Gets the destinationTimeZone property value. This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
     * @return string|null
    */
    public function getDestinationTimeZone(): ?string {
        return $this->destinationTimeZone;
    }

    /**
     * Gets the ebaySupportedFulfillment property value. This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. <br><br>For more information, see the <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646 " target="_blank">Global Shipping Program</a> help topic.
     * @return bool|null
    */
    public function getEbaySupportedFulfillment(): ?bool {
        return $this->ebaySupportedFulfillment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appointment' => fn(ParseNode $n) => $o->setAppointment($n->getObjectValue([AppointmentDetails::class, 'createFromDiscriminatorValue'])),
            'destinationTimeZone' => fn(ParseNode $n) => $o->setDestinationTimeZone($n->getStringValue()),
            'ebaySupportedFulfillment' => fn(ParseNode $n) => $o->setEbaySupportedFulfillment($n->getBooleanValue()),
            'finalDestinationAddress' => fn(ParseNode $n) => $o->setFinalDestinationAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'fulfillmentInstructionsType' => fn(ParseNode $n) => $o->setFulfillmentInstructionsType($n->getEnumValue(FulfillmentInstructionsType::class)),
            'maxEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMaxEstimatedDeliveryDate($n->getStringValue()),
            'minEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMinEstimatedDeliveryDate($n->getStringValue()),
            'pickupStep' => fn(ParseNode $n) => $o->setPickupStep($n->getObjectValue([PickupStep::class, 'createFromDiscriminatorValue'])),
            'shippingStep' => fn(ParseNode $n) => $o->setShippingStep($n->getObjectValue([ShippingStep::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the finalDestinationAddress property value. This container is only returned if the value of <strong>ebaySupportedFulfillment</strong> field is <code>true</code>. <br><br>This is the final destination address for a Global Shipping Program shipment or an eBay International Shipping shipment, which is usually the recipient's home. Sellers should not ship directly to this address; instead they should ship this package to their international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address.<br><br>For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.<p> <span class="tablenote"><strong>Note:</strong> For Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer shipping address.</span></p>
     * @return Address|null
    */
    public function getFinalDestinationAddress(): ?Address {
        return $this->finalDestinationAddress;
    }

    /**
     * Gets the fulfillmentInstructionsType property value. The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <strong>ebaySupportedFulfillment</strong> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types.
     * @return FulfillmentInstructionsType|null
    */
    public function getFulfillmentInstructionsType(): ?FulfillmentInstructionsType {
        return $this->fulfillmentInstructionsType;
    }

    /**
     * Gets the maxEstimatedDeliveryDate property value. This is the estimated latest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getMaxEstimatedDeliveryDate(): ?string {
        return $this->maxEstimatedDeliveryDate;
    }

    /**
     * Gets the minEstimatedDeliveryDate property value. This is the estimated earliest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getMinEstimatedDeliveryDate(): ?string {
        return $this->minEstimatedDeliveryDate;
    }

    /**
     * Gets the pickupStep property value. This container is only returned for In-Store Pickup orders, and it indicates the specific merchant's store where the buyer will pick up the order. The In-Store Pickup feature is supported in the US, Canada, UK, Germany, and Australia marketplaces.
     * @return PickupStep|null
    */
    public function getPickupStep(): ?PickupStep {
        return $this->pickupStep;
    }

    /**
     * Gets the shippingStep property value. This container consists of shipping information for this fulfillment, including the shipping carrier, the shipping service option, and the shipment destination. This container is not returned if the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code>, or for In-Store Pickup orders. <br><br> For Click and Collect orders, the shipping destination will be a brick-and-mortar store where the buyer will pick up the order.
     * @return ShippingStep|null
    */
    public function getShippingStep(): ?ShippingStep {
        return $this->shippingStep;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('appointment', $this->getAppointment());
        $writer->writeStringValue('destinationTimeZone', $this->getDestinationTimeZone());
        $writer->writeBooleanValue('ebaySupportedFulfillment', $this->getEbaySupportedFulfillment());
        $writer->writeObjectValue('finalDestinationAddress', $this->getFinalDestinationAddress());
        $writer->writeEnumValue('fulfillmentInstructionsType', $this->getFulfillmentInstructionsType());
        $writer->writeStringValue('maxEstimatedDeliveryDate', $this->getMaxEstimatedDeliveryDate());
        $writer->writeStringValue('minEstimatedDeliveryDate', $this->getMinEstimatedDeliveryDate());
        $writer->writeObjectValue('pickupStep', $this->getPickupStep());
        $writer->writeObjectValue('shippingStep', $this->getShippingStep());
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
     * Sets the appointment property value. This container provides information used by the installation provider concerning appointment details selected by the buyer.
     * @param AppointmentDetails|null $value Value to set for the appointment property.
    */
    public function setAppointment(?AppointmentDetails $value): void {
        $this->appointment = $value;
    }

    /**
     * Sets the destinationTimeZone property value. This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
     * @param string|null $value Value to set for the destinationTimeZone property.
    */
    public function setDestinationTimeZone(?string $value): void {
        $this->destinationTimeZone = $value;
    }

    /**
     * Sets the ebaySupportedFulfillment property value. This field is only returned if its value is <code>true</code> and indicates that the fulfillment will be shipped via eBay's Global Shipping Program, eBay International Shipping, or the Authenticity Guarantee service program. <br><br>For more information, see the <a href="https://www.ebay.com/help/selling/shipping-items/setting-shipping-options/global-shipping-program?id=4646 " target="_blank">Global Shipping Program</a> help topic.
     * @param bool|null $value Value to set for the ebaySupportedFulfillment property.
    */
    public function setEbaySupportedFulfillment(?bool $value): void {
        $this->ebaySupportedFulfillment = $value;
    }

    /**
     * Sets the finalDestinationAddress property value. This container is only returned if the value of <strong>ebaySupportedFulfillment</strong> field is <code>true</code>. <br><br>This is the final destination address for a Global Shipping Program shipment or an eBay International Shipping shipment, which is usually the recipient's home. Sellers should not ship directly to this address; instead they should ship this package to their international shipping provider's domestic warehouse. The international shipping provider is responsible for delivery to the final destination address.<br><br>For more information, see <a href="/api-docs/user-guides/static/trading-user-guide/global-shipping-addressing.html" target="_blank">Addressing Shipments</a>.<p> <span class="tablenote"><strong>Note:</strong> For Authenticity Guarantee program shipment, this is the address of the authenticator's warehouse. The authenticator is responsible for delivery to the buyer shipping address.</span></p>
     * @param Address|null $value Value to set for the finalDestinationAddress property.
    */
    public function setFinalDestinationAddress(?Address $value): void {
        $this->finalDestinationAddress = $value;
    }

    /**
     * Sets the fulfillmentInstructionsType property value. The enumeration value returned in this field indicates the method of fulfillment that will be used to deliver this set of line items (this package) to the buyer. This field will have a value of <code>SHIP_TO</code> if the <strong>ebaySupportedFulfillment</strong> field is returned with a value of <code>true</code>. See the <strong>FulfillmentInstructionsType</strong> definition for more information about different fulfillment types.
     * @param FulfillmentInstructionsType|null $value Value to set for the fulfillmentInstructionsType property.
    */
    public function setFulfillmentInstructionsType(?FulfillmentInstructionsType $value): void {
        $this->fulfillmentInstructionsType = $value;
    }

    /**
     * Sets the maxEstimatedDeliveryDate property value. This is the estimated latest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned ifthe value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the maxEstimatedDeliveryDate property.
    */
    public function setMaxEstimatedDeliveryDate(?string $value): void {
        $this->maxEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the minEstimatedDeliveryDate property value. This is the estimated earliest date that the fulfillment will be completed. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned if  the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code> or <code>PREPARE_FOR_PICKUP</code>.  <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the minEstimatedDeliveryDate property.
    */
    public function setMinEstimatedDeliveryDate(?string $value): void {
        $this->minEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the pickupStep property value. This container is only returned for In-Store Pickup orders, and it indicates the specific merchant's store where the buyer will pick up the order. The In-Store Pickup feature is supported in the US, Canada, UK, Germany, and Australia marketplaces.
     * @param PickupStep|null $value Value to set for the pickupStep property.
    */
    public function setPickupStep(?PickupStep $value): void {
        $this->pickupStep = $value;
    }

    /**
     * Sets the shippingStep property value. This container consists of shipping information for this fulfillment, including the shipping carrier, the shipping service option, and the shipment destination. This container is not returned if the value of the <strong>fulfillmentInstructionsType</strong> field is <code>DIGITAL</code>, or for In-Store Pickup orders. <br><br> For Click and Collect orders, the shipping destination will be a brick-and-mortar store where the buyer will pick up the order.
     * @param ShippingStep|null $value Value to set for the shippingStep property.
    */
    public function setShippingStep(?ShippingStep $value): void {
        $this->shippingStep = $value;
    }

}
