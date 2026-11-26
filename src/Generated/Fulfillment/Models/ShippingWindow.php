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
 * This type contains the details of the combine-shipping window associated with an order line item.
*/
class ShippingWindow implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $shippingWindowEndDate The date and time when the shipping window ends. This timestamp is in ISO 8601 format, which uses the 24-hour UTC clock. This field is returned only when an end date is available for the shipping window.
    */
    private ?DateTime $shippingWindowEndDate = null;
    
    /**
     * @var ShippingWindowStatusEnum|null $status This enumeration value indicates the current status of the combine-shipping window.
    */
    private ?ShippingWindowStatusEnum $status = null;
    
    /**
     * @var string|null $windowId This field is used to specify the unique identifier of the combine-shipping group associated with the order line item.
    */
    private ?string $windowId = null;
    
    /**
     * Instantiates a new ShippingWindow and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingWindow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingWindow {
        return new ShippingWindow();
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
            'shippingWindowEndDate' => fn(ParseNode $n) => $o->setShippingWindowEndDate($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ShippingWindowStatusEnum::class)),
            'windowId' => fn(ParseNode $n) => $o->setWindowId($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingWindowEndDate property value. The date and time when the shipping window ends. This timestamp is in ISO 8601 format, which uses the 24-hour UTC clock. This field is returned only when an end date is available for the shipping window.
     * @return DateTime|null
    */
    public function getShippingWindowEndDate(): ?DateTime {
        return $this->shippingWindowEndDate;
    }

    /**
     * Gets the status property value. This enumeration value indicates the current status of the combine-shipping window.
     * @return ShippingWindowStatusEnum|null
    */
    public function getStatus(): ?ShippingWindowStatusEnum {
        return $this->status;
    }

    /**
     * Gets the windowId property value. This field is used to specify the unique identifier of the combine-shipping group associated with the order line item.
     * @return string|null
    */
    public function getWindowId(): ?string {
        return $this->windowId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('shippingWindowEndDate', $this->getShippingWindowEndDate());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('windowId', $this->getWindowId());
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
     * Sets the shippingWindowEndDate property value. The date and time when the shipping window ends. This timestamp is in ISO 8601 format, which uses the 24-hour UTC clock. This field is returned only when an end date is available for the shipping window.
     * @param DateTime|null $value Value to set for the shippingWindowEndDate property.
    */
    public function setShippingWindowEndDate(?DateTime $value): void {
        $this->shippingWindowEndDate = $value;
    }

    /**
     * Sets the status property value. This enumeration value indicates the current status of the combine-shipping window.
     * @param ShippingWindowStatusEnum|null $value Value to set for the status property.
    */
    public function setStatus(?ShippingWindowStatusEnum $value): void {
        $this->status = $value;
    }

    /**
     * Sets the windowId property value. This field is used to specify the unique identifier of the combine-shipping group associated with the order line item.
     * @param string|null $value Value to set for the windowId property.
    */
    public function setWindowId(?string $value): void {
        $this->windowId = $value;
    }

}
