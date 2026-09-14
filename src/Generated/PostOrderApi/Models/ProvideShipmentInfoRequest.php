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

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base request type of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_shipment_info</b> method, which is used to provide return shipment tracking information.
*/
class ProvideShipmentInfoRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $shippingCarrierName The shipping carrier enumeration value is passed into this field, and represents the shipping carrier being used to return the item. <br/><br/>A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
    */
    private ?string $shippingCarrierName = null;
    
    /**
     * @var string|null $trackingNumber The shipment tracking number is passed into this field. This value should be passed in without hyphens or spaces. The seller is responsible for the accuracy of this value, as eBay can only validate that the format is consistent with the format that is used by the specified shipping carrier.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ProvideShipmentInfoRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvideShipmentInfoRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvideShipmentInfoRequest {
        return new ProvideShipmentInfoRequest();
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
            'shippingCarrierName' => fn(ParseNode $n) => $o->setShippingCarrierName($n->getStringValue()),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingCarrierName property value. The shipping carrier enumeration value is passed into this field, and represents the shipping carrier being used to return the item. <br/><br/>A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @return string|null
    */
    public function getShippingCarrierName(): ?string {
        return $this->shippingCarrierName;
    }

    /**
     * Gets the trackingNumber property value. The shipment tracking number is passed into this field. This value should be passed in without hyphens or spaces. The seller is responsible for the accuracy of this value, as eBay can only validate that the format is consistent with the format that is used by the specified shipping carrier.
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
        $writer->writeStringValue('shippingCarrierName', $this->getShippingCarrierName());
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
     * Sets the shippingCarrierName property value. The shipping carrier enumeration value is passed into this field, and represents the shipping carrier being used to return the item. <br/><br/>A list of shipping carrier enumeration values can be found in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @param string|null $value Value to set for the shippingCarrierName property.
    */
    public function setShippingCarrierName(?string $value): void {
        $this->shippingCarrierName = $value;
    }

    /**
     * Sets the trackingNumber property value. The shipment tracking number is passed into this field. This value should be passed in without hyphens or spaces. The seller is responsible for the accuracy of this value, as eBay can only validate that the format is consistent with the format that is used by the specified shipping carrier.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
