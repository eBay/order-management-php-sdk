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
 * This type contains the details for creating a fulfillment for an order.
*/
class ShippingFulfillmentDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<LineItemReference>|null $lineItems This array contains a list of or more line items and the quantity that will be shipped in the same package.
    */
    private ?array $lineItems = null;
    
    /**
     * @var string|null $shippedDate This is the actual date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. The seller should use the actual date/time that the package was shipped, but if this field is omitted, it will default to the current date/time.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code><br><br><strong>Default:</strong> The current date and time.
    */
    private ?string $shippedDate = null;
    
    /**
     * @var string|null $shippingCarrierCode The unique identifier of the shipping carrier being used to ship the line item(s). Technically, the <strong>shippingCarrierCode</strong> and <strong>trackingNumber</strong> fields are optional, but generally these fields will be provided if the shipping carrier and tracking number are known. <br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier enumeration values. When making the <a href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/GeteBayDetails.html" target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingCarrierDetails</code>. Each valid shipping carrier enumeration value is returned in a <strong>ShippingCarrierDetails.ShippingCarrier</strong> field in the response payload.</span>
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var string|null $trackingNumber The tracking number provided by the shipping carrier for this fulfillment. The seller should be careful that this tracking number is accurate since the buyer will use this tracking number to track shipment, and eBay has no way to verify the accuracy of this number.<br><br>This field and the <strong>shippingCarrierCode</strong> field are mutually dependent. If you include one, you must also include the other.<br><br><span class="tablenote"><strong>Note:</strong> If you include <strong>trackingNumber</strong> (and <strong>shippingCarrierCode</strong>) in the request, the resulting fulfillment's ID (returned in the HTTP location response header) is the tracking number. If you do not include shipment tracking information, the resulting fulfillment ID will default to an arbitrary number such as <code>999</code>.</span><br><span class="tablenote"><strong>Note:</strong> Only alphanumeric characters are supported for shipment tracking numbers. Spaces, hyphens, and all other special characters are not supported. Do not include a space in the tracking number even if a space appears in the tracking number on the shipping label.</span>
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ShippingFulfillmentDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingFulfillmentDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingFulfillmentDetails {
        return new ShippingFulfillmentDetails();
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
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([LineItemReference::class, 'createFromDiscriminatorValue'])),
            'shippedDate' => fn(ParseNode $n) => $o->setShippedDate($n->getStringValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the lineItems property value. This array contains a list of or more line items and the quantity that will be shipped in the same package.
     * @return array<LineItemReference>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the shippedDate property value. This is the actual date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. The seller should use the actual date/time that the package was shipped, but if this field is omitted, it will default to the current date/time.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code><br><br><strong>Default:</strong> The current date and time.
     * @return string|null
    */
    public function getShippedDate(): ?string {
        return $this->shippedDate;
    }

    /**
     * Gets the shippingCarrierCode property value. The unique identifier of the shipping carrier being used to ship the line item(s). Technically, the <strong>shippingCarrierCode</strong> and <strong>trackingNumber</strong> fields are optional, but generally these fields will be provided if the shipping carrier and tracking number are known. <br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier enumeration values. When making the <a href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/GeteBayDetails.html" target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingCarrierDetails</code>. Each valid shipping carrier enumeration value is returned in a <strong>ShippingCarrierDetails.ShippingCarrier</strong> field in the response payload.</span>
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the trackingNumber property value. The tracking number provided by the shipping carrier for this fulfillment. The seller should be careful that this tracking number is accurate since the buyer will use this tracking number to track shipment, and eBay has no way to verify the accuracy of this number.<br><br>This field and the <strong>shippingCarrierCode</strong> field are mutually dependent. If you include one, you must also include the other.<br><br><span class="tablenote"><strong>Note:</strong> If you include <strong>trackingNumber</strong> (and <strong>shippingCarrierCode</strong>) in the request, the resulting fulfillment's ID (returned in the HTTP location response header) is the tracking number. If you do not include shipment tracking information, the resulting fulfillment ID will default to an arbitrary number such as <code>999</code>.</span><br><span class="tablenote"><strong>Note:</strong> Only alphanumeric characters are supported for shipment tracking numbers. Spaces, hyphens, and all other special characters are not supported. Do not include a space in the tracking number even if a space appears in the tracking number on the shipping label.</span>
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeStringValue('shippedDate', $this->getShippedDate());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
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
     * Sets the lineItems property value. This array contains a list of or more line items and the quantity that will be shipped in the same package.
     * @param array<LineItemReference>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the shippedDate property value. This is the actual date and time that the fulfillment package was shipped. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. The seller should use the actual date/time that the package was shipped, but if this field is omitted, it will default to the current date/time.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code><br><br><strong>Default:</strong> The current date and time.
     * @param string|null $value Value to set for the shippedDate property.
    */
    public function setShippedDate(?string $value): void {
        $this->shippedDate = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. The unique identifier of the shipping carrier being used to ship the line item(s). Technically, the <strong>shippingCarrierCode</strong> and <strong>trackingNumber</strong> fields are optional, but generally these fields will be provided if the shipping carrier and tracking number are known. <br><br><span class="tablenote"><strong>Note:</strong> Use the Trading API's <strong>GeteBayDetails</strong> call to retrieve the latest shipping carrier enumeration values. When making the <a href="https://developer.ebay.com/devzone/xml/docs/reference/ebay/GeteBayDetails.html" target="_blank">GeteBayDetails</a> call, include the <strong>DetailName</strong> field in the request payload and set its value to <code>ShippingCarrierDetails</code>. Each valid shipping carrier enumeration value is returned in a <strong>ShippingCarrierDetails.ShippingCarrier</strong> field in the response payload.</span>
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number provided by the shipping carrier for this fulfillment. The seller should be careful that this tracking number is accurate since the buyer will use this tracking number to track shipment, and eBay has no way to verify the accuracy of this number.<br><br>This field and the <strong>shippingCarrierCode</strong> field are mutually dependent. If you include one, you must also include the other.<br><br><span class="tablenote"><strong>Note:</strong> If you include <strong>trackingNumber</strong> (and <strong>shippingCarrierCode</strong>) in the request, the resulting fulfillment's ID (returned in the HTTP location response header) is the tracking number. If you do not include shipment tracking information, the resulting fulfillment ID will default to an arbitrary number such as <code>999</code>.</span><br><span class="tablenote"><strong>Note:</strong> Only alphanumeric characters are supported for shipment tracking numbers. Spaces, hyphens, and all other special characters are not supported. Do not include a space in the tracking number even if a space appears in the tracking number on the shipping label.</span>
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
