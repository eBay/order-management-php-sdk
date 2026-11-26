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

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains the details for creating an additional shipping fulfillment for an order that is being shipped in multiple packages.
*/
class ShippingTrackingDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<LineItemReference>|null $lineItems This array contains the line items and quantities that are included in the package associated with the additional shipping fulfillment.
    */
    private ?array $lineItems = null;
    
    /**
     * @var DateTime|null $shippedDate This is the actual date and time that the package associated with the additional shipping fulfillment was shipped. If this field is omitted, it will default to the current date and time.
    */
    private ?DateTime $shippedDate = null;
    
    /**
     * @var string|null $shippingCarrierCode This field is used to specify the shipping carrier used to ship the package associated with the additional shipping fulfillment.
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var string|null $trackingNumber This field is used to specify the shipment tracking number for the package associated with the additional shipping fulfillment.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ShippingTrackingDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingTrackingDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingTrackingDetails {
        return new ShippingTrackingDetails();
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
            'shippedDate' => fn(ParseNode $n) => $o->setShippedDate($n->getDateTimeValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the lineItems property value. This array contains the line items and quantities that are included in the package associated with the additional shipping fulfillment.
     * @return array<LineItemReference>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the shippedDate property value. This is the actual date and time that the package associated with the additional shipping fulfillment was shipped. If this field is omitted, it will default to the current date and time.
     * @return DateTime|null
    */
    public function getShippedDate(): ?DateTime {
        return $this->shippedDate;
    }

    /**
     * Gets the shippingCarrierCode property value. This field is used to specify the shipping carrier used to ship the package associated with the additional shipping fulfillment.
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the trackingNumber property value. This field is used to specify the shipment tracking number for the package associated with the additional shipping fulfillment.
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
        $writer->writeDateTimeValue('shippedDate', $this->getShippedDate());
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
     * Sets the lineItems property value. This array contains the line items and quantities that are included in the package associated with the additional shipping fulfillment.
     * @param array<LineItemReference>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the shippedDate property value. This is the actual date and time that the package associated with the additional shipping fulfillment was shipped. If this field is omitted, it will default to the current date and time.
     * @param DateTime|null $value Value to set for the shippedDate property.
    */
    public function setShippedDate(?DateTime $value): void {
        $this->shippedDate = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. This field is used to specify the shipping carrier used to ship the package associated with the additional shipping fulfillment.
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the trackingNumber property value. This field is used to specify the shipment tracking number for the package associated with the additional shipping fulfillment.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
