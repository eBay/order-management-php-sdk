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
 * This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for <i>eBay Guaranteed Delivery</i> as well as for non-guaranteed delivery.
*/
class LineItemFulfillmentInstructions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $destinationTimeZone This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
    */
    private ?string $destinationTimeZone = null;
    
    /**
     * @var bool|null $guaranteedDelivery Although this field is still returned, it can be ignored since eBay Guaranteed Delivery is no longer a supported feature on any marketplace. This field may get removed from the schema in the future.
    */
    private ?bool $guaranteedDelivery = null;
    
    /**
     * @var string|null $maxEstimatedDeliveryDate The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. The seller must pay extra attention to this date, as a failure to deliver by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
    */
    private ?string $maxEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $minEstimatedDeliveryDate The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options.<br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
    */
    private ?string $minEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $shipByDate The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. The seller must pay extra attention to this date, as a failure to physically ship the line item by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
    */
    private ?string $shipByDate = null;
    
    /**
     * @var string|null $sourceTimeZone This field is reserved for internal or future use. <!-- Source time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Ship by date is calculated relative to this time zone. -->
    */
    private ?string $sourceTimeZone = null;
    
    /**
     * Instantiates a new LineItemFulfillmentInstructions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineItemFulfillmentInstructions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineItemFulfillmentInstructions {
        return new LineItemFulfillmentInstructions();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the destinationTimeZone property value. This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
     * @return string|null
    */
    public function getDestinationTimeZone(): ?string {
        return $this->destinationTimeZone;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'destinationTimeZone' => fn(ParseNode $n) => $o->setDestinationTimeZone($n->getStringValue()),
            'guaranteedDelivery' => fn(ParseNode $n) => $o->setGuaranteedDelivery($n->getBooleanValue()),
            'maxEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMaxEstimatedDeliveryDate($n->getStringValue()),
            'minEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMinEstimatedDeliveryDate($n->getStringValue()),
            'shipByDate' => fn(ParseNode $n) => $o->setShipByDate($n->getStringValue()),
            'sourceTimeZone' => fn(ParseNode $n) => $o->setSourceTimeZone($n->getStringValue()),
        ];
    }

    /**
     * Gets the guaranteedDelivery property value. Although this field is still returned, it can be ignored since eBay Guaranteed Delivery is no longer a supported feature on any marketplace. This field may get removed from the schema in the future.
     * @return bool|null
    */
    public function getGuaranteedDelivery(): ?bool {
        return $this->guaranteedDelivery;
    }

    /**
     * Gets the maxEstimatedDeliveryDate property value. The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. The seller must pay extra attention to this date, as a failure to deliver by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @return string|null
    */
    public function getMaxEstimatedDeliveryDate(): ?string {
        return $this->maxEstimatedDeliveryDate;
    }

    /**
     * Gets the minEstimatedDeliveryDate property value. The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options.<br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @return string|null
    */
    public function getMinEstimatedDeliveryDate(): ?string {
        return $this->minEstimatedDeliveryDate;
    }

    /**
     * Gets the shipByDate property value. The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. The seller must pay extra attention to this date, as a failure to physically ship the line item by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @return string|null
    */
    public function getShipByDate(): ?string {
        return $this->shipByDate;
    }

    /**
     * Gets the sourceTimeZone property value. This field is reserved for internal or future use. <!-- Source time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Ship by date is calculated relative to this time zone. -->
     * @return string|null
    */
    public function getSourceTimeZone(): ?string {
        return $this->sourceTimeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('destinationTimeZone', $this->getDestinationTimeZone());
        $writer->writeBooleanValue('guaranteedDelivery', $this->getGuaranteedDelivery());
        $writer->writeStringValue('maxEstimatedDeliveryDate', $this->getMaxEstimatedDeliveryDate());
        $writer->writeStringValue('minEstimatedDeliveryDate', $this->getMinEstimatedDeliveryDate());
        $writer->writeStringValue('shipByDate', $this->getShipByDate());
        $writer->writeStringValue('sourceTimeZone', $this->getSourceTimeZone());
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
     * Sets the destinationTimeZone property value. This field is reserved for internal or future use. <!-- Destination time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Delivery dates are calculated relative to this time zone. -->
     * @param string|null $value Value to set for the destinationTimeZone property.
    */
    public function setDestinationTimeZone(?string $value): void {
        $this->destinationTimeZone = $value;
    }

    /**
     * Sets the guaranteedDelivery property value. Although this field is still returned, it can be ignored since eBay Guaranteed Delivery is no longer a supported feature on any marketplace. This field may get removed from the schema in the future.
     * @param bool|null $value Value to set for the guaranteedDelivery property.
    */
    public function setGuaranteedDelivery(?bool $value): void {
        $this->guaranteedDelivery = $value;
    }

    /**
     * Sets the maxEstimatedDeliveryDate property value. The estimated latest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options. The seller must pay extra attention to this date, as a failure to deliver by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @param string|null $value Value to set for the maxEstimatedDeliveryDate property.
    */
    public function setMaxEstimatedDeliveryDate(?string $value): void {
        $this->maxEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the minEstimatedDeliveryDate property value. The estimated earliest date and time that the buyer can expect to receive the line item based on the seller's stated handling time and the transit times of the available shipping service options.<br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @param string|null $value Value to set for the minEstimatedDeliveryDate property.
    */
    public function setMinEstimatedDeliveryDate(?string $value): void {
        $this->minEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the shipByDate property value. The latest date and time by which the seller should ship line item in order to meet the expected delivery window. This timestamp will be set by eBay based on time of purchase and the seller's stated handling time. The seller must pay extra attention to this date, as a failure to physically ship the line item by this date/time can result in a 'Late shipment' seller defect, and can affect seller level and Top-Rated Seller status. In addition to the seller defect, buyers will be eligible for a shipping cost refund, and will also be eligible to return the item for a full refund (with no return shipping charge) if they choose. <br><br><span class="tablenote"><strong>Note:</strong> This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code></span>
     * @param string|null $value Value to set for the shipByDate property.
    */
    public function setShipByDate(?string $value): void {
        $this->shipByDate = $value;
    }

    /**
     * Sets the sourceTimeZone property value. This field is reserved for internal or future use. <!-- Source time zone. This is time zone id from Olson database. Example: America/Los_Angeles. Ship by date is calculated relative to this time zone. -->
     * @param string|null $value Value to set for the sourceTimeZone property.
    */
    public function setSourceTimeZone(?string $value): void {
        $this->sourceTimeZone = $value;
    }

}
