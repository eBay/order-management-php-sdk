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
 * This type contains combine-shipping information for an order line item. If this container is returned, the line item has been assigned to a combine-shipping group.
*/
class CombineShipping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ShippingWindow|null $shippingWindow This container consists of details about the combine-shipping window associated with the order line item.
    */
    private ?ShippingWindow $shippingWindow = null;
    
    /**
     * Instantiates a new CombineShipping and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CombineShipping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CombineShipping {
        return new CombineShipping();
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
            'shippingWindow' => fn(ParseNode $n) => $o->setShippingWindow($n->getObjectValue([ShippingWindow::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the shippingWindow property value. This container consists of details about the combine-shipping window associated with the order line item.
     * @return ShippingWindow|null
    */
    public function getShippingWindow(): ?ShippingWindow {
        return $this->shippingWindow;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('shippingWindow', $this->getShippingWindow());
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
     * Sets the shippingWindow property value. This container consists of details about the combine-shipping window associated with the order line item.
     * @param ShippingWindow|null $value Value to set for the shippingWindow property.
    */
    public function setShippingWindow(?ShippingWindow $value): void {
        $this->shippingWindow = $value;
    }

}
