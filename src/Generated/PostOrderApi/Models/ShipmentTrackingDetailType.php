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

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to show detailed shipment tracking information if an INR item is being shipped to the buyer, or if the buyer is returning an item to the seller.
*/
class ShipmentTrackingDetailType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $carrier The name of the shipping carrier handling the shipment. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
    */
    private ?string $carrier = null;
    
    /**
     * @var string|null $currentStatus The current status of the shipment, such as delivered or still in-transit. This field is returned if it is known and available.
    */
    private ?string $currentStatus = null;
    
    /**
     * @var DateTime|null $estimateFromDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $estimateFromDate = null;
    
    /**
     * @var DateTime|null $estimateToDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $estimateToDate = null;
    
    /**
     * @var string|null $trackingNumber A unique identifier used to track the shipment of the order line item. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
    */
    private ?string $trackingNumber = null;
    
    /**
     * @var string|null $trackingURL This field provides the URL to the shipping carrier's shipment tracking page. This field is returned if available.
    */
    private ?string $trackingURL = null;
    
    /**
     * Instantiates a new ShipmentTrackingDetailType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShipmentTrackingDetailType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShipmentTrackingDetailType {
        return new ShipmentTrackingDetailType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the carrier property value. The name of the shipping carrier handling the shipment. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
     * @return string|null
    */
    public function getCarrier(): ?string {
        return $this->carrier;
    }

    /**
     * Gets the currentStatus property value. The current status of the shipment, such as delivered or still in-transit. This field is returned if it is known and available.
     * @return string|null
    */
    public function getCurrentStatus(): ?string {
        return $this->currentStatus;
    }

    /**
     * Gets the estimateFromDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getEstimateFromDate(): ?DateTime {
        return $this->estimateFromDate;
    }

    /**
     * Gets the estimateToDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getEstimateToDate(): ?DateTime {
        return $this->estimateToDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'carrier' => fn(ParseNode $n) => $o->setCarrier($n->getStringValue()),
            'currentStatus' => fn(ParseNode $n) => $o->setCurrentStatus($n->getStringValue()),
            'estimateFromDate' => fn(ParseNode $n) => $o->setEstimateFromDate($n->getDateTimeValue()),
            'estimateToDate' => fn(ParseNode $n) => $o->setEstimateToDate($n->getDateTimeValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
            'trackingURL' => fn(ParseNode $n) => $o->setTrackingURL($n->getStringValue()),
        ];
    }

    /**
     * Gets the trackingNumber property value. A unique identifier used to track the shipment of the order line item. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Gets the trackingURL property value. This field provides the URL to the shipping carrier's shipment tracking page. This field is returned if available.
     * @return string|null
    */
    public function getTrackingURL(): ?string {
        return $this->trackingURL;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('carrier', $this->getCarrier());
        $writer->writeStringValue('currentStatus', $this->getCurrentStatus());
        $writer->writeDateTimeValue('estimateFromDate', $this->getEstimateFromDate());
        $writer->writeDateTimeValue('estimateToDate', $this->getEstimateToDate());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
        $writer->writeStringValue('trackingURL', $this->getTrackingURL());
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
     * Sets the carrier property value. The name of the shipping carrier handling the shipment. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
     * @param string|null $value Value to set for the carrier property.
    */
    public function setCarrier(?string $value): void {
        $this->carrier = $value;
    }

    /**
     * Sets the currentStatus property value. The current status of the shipment, such as delivered or still in-transit. This field is returned if it is known and available.
     * @param string|null $value Value to set for the currentStatus property.
    */
    public function setCurrentStatus(?string $value): void {
        $this->currentStatus = $value;
    }

    /**
     * Sets the estimateFromDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the estimateFromDate property.
    */
    public function setEstimateFromDate(?DateTime $value): void {
        $this->estimateFromDate = $value;
    }

    /**
     * Sets the estimateToDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the estimateToDate property.
    */
    public function setEstimateToDate(?DateTime $value): void {
        $this->estimateToDate = $value;
    }

    /**
     * Sets the trackingNumber property value. A unique identifier used to track the shipment of the order line item. This field is generally always returned with the <b>shipmentTrackingDetails</b> container unless the tracking number has yet to be provided for the order line item.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

    /**
     * Sets the trackingURL property value. This field provides the URL to the shipping carrier's shipment tracking page. This field is returned if available.
     * @param string|null $value Value to set for the trackingURL property.
    */
    public function setTrackingURL(?string $value): void {
        $this->trackingURL = $value;
    }

}
