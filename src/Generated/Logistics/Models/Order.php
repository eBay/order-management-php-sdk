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
 * This complex type defines an order from which a seller is including one or more line items in a single package to be shipped.
*/
class Order implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $channel The marketplace where the order was created.<br><br>Use the value <code>EBAY</code> to get the rates available for eBay orders.
    */
    private ?string $channel = null;
    
    /**
     * @var string|null $orderId The unique identifier of the order. The <a href=/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> method of the <b>Fulfillment API</b> can be used to retrieve order IDs.
    */
    private ?string $orderId = null;
    
    /**
     * Instantiates a new Order and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Order
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Order {
        return new Order();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the channel property value. The marketplace where the order was created.<br><br>Use the value <code>EBAY</code> to get the rates available for eBay orders.
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
        ];
    }

    /**
     * Gets the orderId property value. The unique identifier of the order. The <a href=/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> method of the <b>Fulfillment API</b> can be used to retrieve order IDs.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeStringValue('orderId', $this->getOrderId());
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
     * Sets the channel property value. The marketplace where the order was created.<br><br>Use the value <code>EBAY</code> to get the rates available for eBay orders.
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the order. The <a href=/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> method of the <b>Fulfillment API</b> can be used to retrieve order IDs.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

}
