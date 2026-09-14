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
 * This type contains the complete details of an existing fulfillment for an order.
*/
class ShippingFulfillment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fulfillmentId The unique identifier of the fulfillment; for example, <code>9405509699937003457459</code>. This eBay-generated value is created with a successful <strong>createShippingFulfillment</strong> call.
    */
    private ?string $fulfillmentId = null;
    
    /**
     * @var array<LineItemReference>|null $lineItems This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies.
    */
    private ?array $lineItems = null;
    
    /**
     * @var string|null $shipmentTrackingNumber The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available.
    */
    private ?string $shipmentTrackingNumber = null;
    
    /**
     * @var string|null $shippedDate The date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been shipped.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $shippedDate = null;
    
    /**
     * @var string|null $shippingCarrierCode The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <strong>ShippingCarrierCodeType</strong> enumeration type contains the most current list of eBay shipping carrier codes and the countries served by each carrier. See <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html " target="_blank">ShippingCarrierCodeType</a>.</span>
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * Instantiates a new ShippingFulfillment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingFulfillment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingFulfillment {
        return new ShippingFulfillment();
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
            'fulfillmentId' => fn(ParseNode $n) => $o->setFulfillmentId($n->getStringValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([LineItemReference::class, 'createFromDiscriminatorValue'])),
            'shipmentTrackingNumber' => fn(ParseNode $n) => $o->setShipmentTrackingNumber($n->getStringValue()),
            'shippedDate' => fn(ParseNode $n) => $o->setShippedDate($n->getStringValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the fulfillmentId property value. The unique identifier of the fulfillment; for example, <code>9405509699937003457459</code>. This eBay-generated value is created with a successful <strong>createShippingFulfillment</strong> call.
     * @return string|null
    */
    public function getFulfillmentId(): ?string {
        return $this->fulfillmentId;
    }

    /**
     * Gets the lineItems property value. This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies.
     * @return array<LineItemReference>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the shipmentTrackingNumber property value. The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available.
     * @return string|null
    */
    public function getShipmentTrackingNumber(): ?string {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Gets the shippedDate property value. The date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been shipped.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getShippedDate(): ?string {
        return $this->shippedDate;
    }

    /**
     * Gets the shippingCarrierCode property value. The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <strong>ShippingCarrierCodeType</strong> enumeration type contains the most current list of eBay shipping carrier codes and the countries served by each carrier. See <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html " target="_blank">ShippingCarrierCodeType</a>.</span>
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fulfillmentId', $this->getFulfillmentId());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeStringValue('shipmentTrackingNumber', $this->getShipmentTrackingNumber());
        $writer->writeStringValue('shippedDate', $this->getShippedDate());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
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
     * Sets the fulfillmentId property value. The unique identifier of the fulfillment; for example, <code>9405509699937003457459</code>. This eBay-generated value is created with a successful <strong>createShippingFulfillment</strong> call.
     * @param string|null $value Value to set for the fulfillmentId property.
    */
    public function setFulfillmentId(?string $value): void {
        $this->fulfillmentId = $value;
    }

    /**
     * Sets the lineItems property value. This array contains a list of one or more line items (and purchased quantity) to which the fulfillment applies.
     * @param array<LineItemReference>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the shipmentTrackingNumber property value. The tracking number provided by the shipping carrier for the package shipped in this fulfillment. This field is returned if available.
     * @param string|null $value Value to set for the shipmentTrackingNumber property.
    */
    public function setShipmentTrackingNumber(?string $value): void {
        $this->shipmentTrackingNumber = $value;
    }

    /**
     * Sets the shippedDate property value. The date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field should only be returned if the package has been shipped.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the shippedDate property.
    */
    public function setShippedDate(?string $value): void {
        $this->shippedDate = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. The eBay code identifying the shipping carrier for this fulfillment. This field is returned if available. <br><br><span class="tablenote"><strong>Note:</strong> The Trading API's <strong>ShippingCarrierCodeType</strong> enumeration type contains the most current list of eBay shipping carrier codes and the countries served by each carrier. See <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html " target="_blank">ShippingCarrierCodeType</a>.</span>
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

}
