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
 * Base request type for the <b>POST /post-order/v2/inquiry/{inquiryId}/provide_shipment_info</b> method, which is used to provide shipment information about an order line item that is on its way to the buyer.
*/
class ShipmentInfoRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $proofOfShipmentUploaded This boolean field should be included and set to <code>true</code> if shipment tracking information for the order line item is already available in the eBay system. If this field is included in the request and set to <code>true</code>, no other shipment tracking fields are necessary, although they can still be provided by the seller.
    */
    private ?bool $proofOfShipmentUploaded = null;
    
    /**
     * @var Text|null $sellerComments This type is used by all containers that consist of text that is input by the buyer or seller.
    */
    private ?Text $sellerComments = null;
    
    /**
     * @var bool|null $shippedWithTracking This field can be included and set to <code>true</code> if the shipping carrier used to ship the package uses tracking information. Most, but not all shipping carriers provide shipment tracking numbers.
    */
    private ?bool $shippedWithTracking = null;
    
    /**
     * @var string|null $shippingCarrierName The seller provides the name of the shipping carrier in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>). A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
    */
    private ?string $shippingCarrierName = null;
    
    /**
     * @var DateTime|null $shippingDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $shippingDate = null;
    
    /**
     * @var string|null $trackingNumber The seller provides the shipping carrier's tracking number in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>).<br/><br/>The accuracy of this tracking number cannot be verified by eBay, so the seller should make sure that the number is accurate.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ShipmentInfoRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShipmentInfoRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShipmentInfoRequest {
        return new ShipmentInfoRequest();
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
            'proofOfShipmentUploaded' => fn(ParseNode $n) => $o->setProofOfShipmentUploaded($n->getBooleanValue()),
            'sellerComments' => fn(ParseNode $n) => $o->setSellerComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'shippedWithTracking' => fn(ParseNode $n) => $o->setShippedWithTracking($n->getBooleanValue()),
            'shippingCarrierName' => fn(ParseNode $n) => $o->setShippingCarrierName($n->getStringValue()),
            'shippingDate' => fn(ParseNode $n) => $o->setShippingDate($n->getDateTimeValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the proofOfShipmentUploaded property value. This boolean field should be included and set to <code>true</code> if shipment tracking information for the order line item is already available in the eBay system. If this field is included in the request and set to <code>true</code>, no other shipment tracking fields are necessary, although they can still be provided by the seller.
     * @return bool|null
    */
    public function getProofOfShipmentUploaded(): ?bool {
        return $this->proofOfShipmentUploaded;
    }

    /**
     * Gets the sellerComments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @return Text|null
    */
    public function getSellerComments(): ?Text {
        return $this->sellerComments;
    }

    /**
     * Gets the shippedWithTracking property value. This field can be included and set to <code>true</code> if the shipping carrier used to ship the package uses tracking information. Most, but not all shipping carriers provide shipment tracking numbers.
     * @return bool|null
    */
    public function getShippedWithTracking(): ?bool {
        return $this->shippedWithTracking;
    }

    /**
     * Gets the shippingCarrierName property value. The seller provides the name of the shipping carrier in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>). A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @return string|null
    */
    public function getShippingCarrierName(): ?string {
        return $this->shippingCarrierName;
    }

    /**
     * Gets the shippingDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getShippingDate(): ?DateTime {
        return $this->shippingDate;
    }

    /**
     * Gets the trackingNumber property value. The seller provides the shipping carrier's tracking number in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>).<br/><br/>The accuracy of this tracking number cannot be verified by eBay, so the seller should make sure that the number is accurate.
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
        $writer->writeBooleanValue('proofOfShipmentUploaded', $this->getProofOfShipmentUploaded());
        $writer->writeObjectValue('sellerComments', $this->getSellerComments());
        $writer->writeBooleanValue('shippedWithTracking', $this->getShippedWithTracking());
        $writer->writeStringValue('shippingCarrierName', $this->getShippingCarrierName());
        $writer->writeDateTimeValue('shippingDate', $this->getShippingDate());
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
     * Sets the proofOfShipmentUploaded property value. This boolean field should be included and set to <code>true</code> if shipment tracking information for the order line item is already available in the eBay system. If this field is included in the request and set to <code>true</code>, no other shipment tracking fields are necessary, although they can still be provided by the seller.
     * @param bool|null $value Value to set for the proofOfShipmentUploaded property.
    */
    public function setProofOfShipmentUploaded(?bool $value): void {
        $this->proofOfShipmentUploaded = $value;
    }

    /**
     * Sets the sellerComments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @param Text|null $value Value to set for the sellerComments property.
    */
    public function setSellerComments(?Text $value): void {
        $this->sellerComments = $value;
    }

    /**
     * Sets the shippedWithTracking property value. This field can be included and set to <code>true</code> if the shipping carrier used to ship the package uses tracking information. Most, but not all shipping carriers provide shipment tracking numbers.
     * @param bool|null $value Value to set for the shippedWithTracking property.
    */
    public function setShippedWithTracking(?bool $value): void {
        $this->shippedWithTracking = $value;
    }

    /**
     * Sets the shippingCarrierName property value. The seller provides the name of the shipping carrier in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>). A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @param string|null $value Value to set for the shippingCarrierName property.
    */
    public function setShippingCarrierName(?string $value): void {
        $this->shippingCarrierName = $value;
    }

    /**
     * Sets the shippingDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the shippingDate property.
    */
    public function setShippingDate(?DateTime $value): void {
        $this->shippingDate = $value;
    }

    /**
     * Sets the trackingNumber property value. The seller provides the shipping carrier's tracking number in this field. This field is conditionally required unless shipment tracking information has already been uploaded to the eBay system (<b>proofOfShipmentUploaded</b>=<code>true</code>).<br/><br/>The accuracy of this tracking number cannot be verified by eBay, so the seller should make sure that the number is accurate.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
