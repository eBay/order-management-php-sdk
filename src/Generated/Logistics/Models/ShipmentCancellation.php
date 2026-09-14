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

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines a shipment cancellation by the date and time the cancellation request was made and the current status of the request.
*/
class ShipmentCancellation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cancellationRequestedDate The time and date the request was made to cancel the shipment, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> UTC string.
    */
    private ?string $cancellationRequestedDate = null;
    
    /**
     * @var ShipmentCancellationStatusEnum|null $cancellationStatus This enum specifies the current cancellation status of a shipment, if a cancellation request has been made.
    */
    private ?ShipmentCancellationStatusEnum $cancellationStatus = null;
    
    /**
     * Instantiates a new ShipmentCancellation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShipmentCancellation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShipmentCancellation {
        return new ShipmentCancellation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancellationRequestedDate property value. The time and date the request was made to cancel the shipment, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> UTC string.
     * @return string|null
    */
    public function getCancellationRequestedDate(): ?string {
        return $this->cancellationRequestedDate;
    }

    /**
     * Gets the cancellationStatus property value. This enum specifies the current cancellation status of a shipment, if a cancellation request has been made.
     * @return ShipmentCancellationStatusEnum|null
    */
    public function getCancellationStatus(): ?ShipmentCancellationStatusEnum {
        return $this->cancellationStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancellationRequestedDate' => fn(ParseNode $n) => $o->setCancellationRequestedDate($n->getStringValue()),
            'cancellationStatus' => fn(ParseNode $n) => $o->setCancellationStatus($n->getEnumValue(ShipmentCancellationStatusEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancellationRequestedDate', $this->getCancellationRequestedDate());
        $writer->writeEnumValue('cancellationStatus', $this->getCancellationStatus());
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
     * Sets the cancellationRequestedDate property value. The time and date the request was made to cancel the shipment, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> UTC string.
     * @param string|null $value Value to set for the cancellationRequestedDate property.
    */
    public function setCancellationRequestedDate(?string $value): void {
        $this->cancellationRequestedDate = $value;
    }

    /**
     * Sets the cancellationStatus property value. This enum specifies the current cancellation status of a shipment, if a cancellation request has been made.
     * @param ShipmentCancellationStatusEnum|null $value Value to set for the cancellationStatus property.
    */
    public function setCancellationStatus(?ShipmentCancellationStatusEnum $value): void {
        $this->cancellationStatus = $value;
    }

}
