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
 * This is the base type of the issueRefund response payload. As long as the issueRefund method does not trigger an error, a response payload will be returned.
*/
class Refund implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $refundId The unique identifier of the order refund. This value is returned unless the refund operation fails (refundStatus value shows FAILED). This identifier can be used to track the status of the refund through a getOrder or getOrders call. For order-level refunds, check the paymentSummary.refunds.refundId field in the getOrder/getOrders response, and for line item level refunds, check the lineItems.refunds.refundId field(s) in the getOrder/getOrders response.
    */
    private ?string $refundId = null;
    
    /**
     * @var RefundStatusEnum|null $refundStatus The value returned in this field indicates the success or failure of the refund operation. A successful <strong>issueRefund</strong> operation should result in a value of <code>PENDING</code>. A failed <strong>issueRefund</strong> operation should result in a value of <code>FAILED</code>, and an HTTP status code and/or API error code may also get returned to possibly indicate the issue.<br><br>The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent <strong>getOrder</strong> call to check the status of the refund.  The status of an order refund can be found in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder.orderrefund.refundstatus" target="_blank">paymentSummary.refunds.refundStatus</a> field of the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> response.
    */
    private ?RefundStatusEnum $refundStatus = null;
    
    /**
     * Instantiates a new Refund and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Refund
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Refund {
        return new Refund();
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
            'refundId' => fn(ParseNode $n) => $o->setRefundId($n->getStringValue()),
            'refundStatus' => fn(ParseNode $n) => $o->setRefundStatus($n->getEnumValue(RefundStatusEnum::class)),
        ];
    }

    /**
     * Gets the refundId property value. The unique identifier of the order refund. This value is returned unless the refund operation fails (refundStatus value shows FAILED). This identifier can be used to track the status of the refund through a getOrder or getOrders call. For order-level refunds, check the paymentSummary.refunds.refundId field in the getOrder/getOrders response, and for line item level refunds, check the lineItems.refunds.refundId field(s) in the getOrder/getOrders response.
     * @return string|null
    */
    public function getRefundId(): ?string {
        return $this->refundId;
    }

    /**
     * Gets the refundStatus property value. The value returned in this field indicates the success or failure of the refund operation. A successful <strong>issueRefund</strong> operation should result in a value of <code>PENDING</code>. A failed <strong>issueRefund</strong> operation should result in a value of <code>FAILED</code>, and an HTTP status code and/or API error code may also get returned to possibly indicate the issue.<br><br>The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent <strong>getOrder</strong> call to check the status of the refund.  The status of an order refund can be found in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder.orderrefund.refundstatus" target="_blank">paymentSummary.refunds.refundStatus</a> field of the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> response.
     * @return RefundStatusEnum|null
    */
    public function getRefundStatus(): ?RefundStatusEnum {
        return $this->refundStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('refundId', $this->getRefundId());
        $writer->writeEnumValue('refundStatus', $this->getRefundStatus());
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
     * Sets the refundId property value. The unique identifier of the order refund. This value is returned unless the refund operation fails (refundStatus value shows FAILED). This identifier can be used to track the status of the refund through a getOrder or getOrders call. For order-level refunds, check the paymentSummary.refunds.refundId field in the getOrder/getOrders response, and for line item level refunds, check the lineItems.refunds.refundId field(s) in the getOrder/getOrders response.
     * @param string|null $value Value to set for the refundId property.
    */
    public function setRefundId(?string $value): void {
        $this->refundId = $value;
    }

    /**
     * Sets the refundStatus property value. The value returned in this field indicates the success or failure of the refund operation. A successful <strong>issueRefund</strong> operation should result in a value of <code>PENDING</code>. A failed <strong>issueRefund</strong> operation should result in a value of <code>FAILED</code>, and an HTTP status code and/or API error code may also get returned to possibly indicate the issue.<br><br>The refunds issued through this method are processed asynchronously, so the refund will not show as 'Refunded' right away. A seller will have to make a subsequent <strong>getOrder</strong> call to check the status of the refund.  The status of an order refund can be found in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder.orderrefund.refundstatus" target="_blank">paymentSummary.refunds.refundStatus</a> field of the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> response.
     * @param RefundStatusEnum|null $value Value to set for the refundStatus property.
    */
    public function setRefundStatus(?RefundStatusEnum $value): void {
        $this->refundStatus = $value;
    }

}
