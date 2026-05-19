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
 * The base type used by the request payload of the <b>issueRefund</b> method.
*/
class IssueRefundRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $comment This free-text field allows the seller to clarify why the refund is being issued to the buyer.<br><br><b>Max Length</b>: 100
    */
    private ?string $comment = null;
    
    /**
     * @var SimpleAmount|null $orderLevelRefundAmount This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $orderLevelRefundAmount = null;
    
    /**
     * @var string|null $reasonForRefund The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the <b>ReasonForRefundEnum</b> type must be used.<br><br>This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.<br><br><span class="tablenote"><strong>Note:</strong> If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate <b>issueRefund</b> calls, one for each refund reason. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
    */
    private ?string $reasonForRefund = null;
    
    /**
     * @var array<RefundItem>|null $refundItems The <b>refundItems</b> array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
    */
    private ?array $refundItems = null;
    
    /**
     * Instantiates a new IssueRefundRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IssueRefundRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IssueRefundRequest {
        return new IssueRefundRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. This free-text field allows the seller to clarify why the refund is being issued to the buyer.<br><br><b>Max Length</b>: 100
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'orderLevelRefundAmount' => fn(ParseNode $n) => $o->setOrderLevelRefundAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'reasonForRefund' => fn(ParseNode $n) => $o->setReasonForRefund($n->getStringValue()),
            'refundItems' => fn(ParseNode $n) => $o->setRefundItems($n->getCollectionOfObjectValues([RefundItem::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orderLevelRefundAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getOrderLevelRefundAmount(): ?SimpleAmount {
        return $this->orderLevelRefundAmount;
    }

    /**
     * Gets the reasonForRefund property value. The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the <b>ReasonForRefundEnum</b> type must be used.<br><br>This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.<br><br><span class="tablenote"><strong>Note:</strong> If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate <b>issueRefund</b> calls, one for each refund reason. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReasonForRefund(): ?string {
        return $this->reasonForRefund;
    }

    /**
     * Gets the refundItems property value. The <b>refundItems</b> array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
     * @return array<RefundItem>|null
    */
    public function getRefundItems(): ?array {
        return $this->refundItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeObjectValue('orderLevelRefundAmount', $this->getOrderLevelRefundAmount());
        $writer->writeStringValue('reasonForRefund', $this->getReasonForRefund());
        $writer->writeCollectionOfObjectValues('refundItems', $this->getRefundItems());
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
     * Sets the comment property value. This free-text field allows the seller to clarify why the refund is being issued to the buyer.<br><br><b>Max Length</b>: 100
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->comment = $value;
    }

    /**
     * Sets the orderLevelRefundAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the orderLevelRefundAmount property.
    */
    public function setOrderLevelRefundAmount(?SimpleAmount $value): void {
        $this->orderLevelRefundAmount = $value;
    }

    /**
     * Sets the reasonForRefund property value. The enumeration value passed into this field indicates the reason for the refund. One of the defined enumeration values in the <b>ReasonForRefundEnum</b> type must be used.<br><br>This field is required, and it is highly recommended that sellers use the correct refund reason, especially in the case of a buyer-requested cancellation or 'buyer remorse' return to indicate that there was nothing wrong with the item(s) or with the shipment of the order.<br><br><span class="tablenote"><strong>Note:</strong> If issuing refunds for more than one order line item, keep in mind that the refund reason must be the same for each of the order line items. If the refund reason is different for one or more order line items in an order, the seller would need to make separate <b>issueRefund</b> calls, one for each refund reason. </span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ReasonForRefundEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reasonForRefund property.
    */
    public function setReasonForRefund(?string $value): void {
        $this->reasonForRefund = $value;
    }

    /**
     * Sets the refundItems property value. The <b>refundItems</b> array is only required if the seller is issuing a refund for one or more individual order line items in a multiple line item order. Otherwise, the seller just uses the <b>orderLevelRefundAmount</b> container to specify the amount of the refund for the entire order.
     * @param array<RefundItem>|null $value Value to set for the refundItems property.
    */
    public function setRefundItems(?array $value): void {
        $this->refundItems = $value;
    }

}
