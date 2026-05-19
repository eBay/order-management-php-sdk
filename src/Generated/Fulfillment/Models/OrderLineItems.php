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
 * This type is used by the <strong>lineItems</strong> array that is used to identify one or more line items in the order with the payment dispute.
*/
class OrderLineItems implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $itemId The unique identifier of the eBay listing associated with the order.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $lineItemId The unique identifier of the line item within the order.
    */
    private ?string $lineItemId = null;
    
    /**
     * Instantiates a new OrderLineItems and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderLineItems
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderLineItems {
        return new OrderLineItems();
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
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing associated with the order.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the lineItemId property value. The unique identifier of the line item within the order.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
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
     * Sets the itemId property value. The unique identifier of the eBay listing associated with the order.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the lineItemId property value. The unique identifier of the line item within the order.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

}
