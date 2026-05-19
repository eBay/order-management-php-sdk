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
 * This type is used if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
*/
class RefundItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var LegacyReference|null $legacyReference Type defining the <b>legacyReference</b> container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
    */
    private ?LegacyReference $legacyReference = null;
    
    /**
     * @var string|null $lineItemId The unique identifier of an order line item. This identifier is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br>Either this field or the <b>legacyReference</b> container is needed to identify an individual order line item that will receive a refund.<br><br> This value is returned using the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank ">getOrders</a> method.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var SimpleAmount|null $refundAmount This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $refundAmount = null;
    
    /**
     * Instantiates a new RefundItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefundItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefundItem {
        return new RefundItem();
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
            'legacyReference' => fn(ParseNode $n) => $o->setLegacyReference($n->getObjectValue([LegacyReference::class, 'createFromDiscriminatorValue'])),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'refundAmount' => fn(ParseNode $n) => $o->setRefundAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the legacyReference property value. Type defining the <b>legacyReference</b> container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
     * @return LegacyReference|null
    */
    public function getLegacyReference(): ?LegacyReference {
        return $this->legacyReference;
    }

    /**
     * Gets the lineItemId property value. The unique identifier of an order line item. This identifier is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br>Either this field or the <b>legacyReference</b> container is needed to identify an individual order line item that will receive a refund.<br><br> This value is returned using the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank ">getOrders</a> method.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the refundAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getRefundAmount(): ?SimpleAmount {
        return $this->refundAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('legacyReference', $this->getLegacyReference());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeObjectValue('refundAmount', $this->getRefundAmount());
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
     * Sets the legacyReference property value. Type defining the <b>legacyReference</b> container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
     * @param LegacyReference|null $value Value to set for the legacyReference property.
    */
    public function setLegacyReference(?LegacyReference $value): void {
        $this->legacyReference = $value;
    }

    /**
     * Sets the lineItemId property value. The unique identifier of an order line item. This identifier is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br>Either this field or the <b>legacyReference</b> container is needed to identify an individual order line item that will receive a refund.<br><br> This value is returned using the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank ">getOrders</a> method.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the refundAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the refundAmount property.
    */
    public function setRefundAmount(?SimpleAmount $value): void {
        $this->refundAmount = $value;
    }

}
