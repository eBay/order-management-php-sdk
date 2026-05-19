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
 * Type defining the <b>legacyReference</b> container. This container is needed if the seller is issuing a refund for an individual order line item, and wishes to use an item ID and transaction ID to identify the order line item.
*/
class LegacyReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $legacyItemId The unique identifier of a listing.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>.<br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
    */
    private ?string $legacyItemId = null;
    
    /**
     * @var string|null $legacyTransactionId The unique identifier of a sale/transaction in legacy/Trading API format. A 'transaction ID' is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>. <br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
    */
    private ?string $legacyTransactionId = null;
    
    /**
     * Instantiates a new LegacyReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LegacyReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LegacyReference {
        return new LegacyReference();
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
            'legacyItemId' => fn(ParseNode $n) => $o->setLegacyItemId($n->getStringValue()),
            'legacyTransactionId' => fn(ParseNode $n) => $o->setLegacyTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the legacyItemId property value. The unique identifier of a listing.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>.<br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
     * @return string|null
    */
    public function getLegacyItemId(): ?string {
        return $this->legacyItemId;
    }

    /**
     * Gets the legacyTransactionId property value. The unique identifier of a sale/transaction in legacy/Trading API format. A 'transaction ID' is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>. <br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
     * @return string|null
    */
    public function getLegacyTransactionId(): ?string {
        return $this->legacyTransactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('legacyItemId', $this->getLegacyItemId());
        $writer->writeStringValue('legacyTransactionId', $this->getLegacyTransactionId());
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
     * Sets the legacyItemId property value. The unique identifier of a listing.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>.<br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
     * @param string|null $value Value to set for the legacyItemId property.
    */
    public function setLegacyItemId(?string $value): void {
        $this->legacyItemId = $value;
    }

    /**
     * Sets the legacyTransactionId property value. The unique identifier of a sale/transaction in legacy/Trading API format. A 'transaction ID' is created once a buyer purchases a 'Buy It Now' item or if an auction listing ends with a winning bidder.<br><br> This value can be found in the <a href="/devzone/xml/docs/reference/ebay/getorders.html#Response.OrderArray.Order.TransactionArray.Transaction" target="_blank">Transaction</a> container in the response of the <a href="/devzone/xml/docs/reference/ebay/getorders.html" target="_blank">getOrder</a> call of the <b>Trading API</b>. <br><br><span class="tablenote"><strong>Note:</strong> Both <b>legacyItemId</b> and <b>legacyTransactionId</b> are needed to identify an order line item. </span>
     * @param string|null $value Value to set for the legacyTransactionId property.
    */
    public function setLegacyTransactionId(?string $value): void {
        $this->legacyTransactionId = $value;
    }

}
