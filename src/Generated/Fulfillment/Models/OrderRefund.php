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
 * This type contains information about a refund issued for an order. This does not include line item level refunds.
*/
class OrderRefund implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This field shows the refund amount for an order. This container is always returned for each refund.<br><br><span class="tablenote"><strong>Note:</strong> The refund amount shown is the seller's <em>net amount</em> received from the sale/transaction. eBay-collected tax will not be included in this amount, so the actual amount of the buyer's refund may be higher than this value.</span>
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $refundDate The date and time that the refund was issued. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $refundDate = null;
    
    /**
     * @var string|null $refundId Unique identifier of a refund that was initiated for an order through the <strong>issueRefund</strong> method. If the <strong>issueRefund</strong> method was used to issue one or more refunds at the line item level, these refund identifiers are returned at the line item level instead (<strong>lineItems.refunds.refundId</strong> field).<br><br> A <strong>refundId</strong> value is returned in the response of the <strong>issueRefund</strong> method, and this same value will be returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> responses for pending and completed refunds. For other refunds, see the <strong>refundReferenceId</strong> field.
    */
    private ?string $refundId = null;
    
    /**
     * @var string|null $refundReferenceId The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued.
    */
    private ?string $refundReferenceId = null;
    
    /**
     * @var RefundStatusEnum|null $refundStatus This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund.
    */
    private ?RefundStatusEnum $refundStatus = null;
    
    /**
     * Instantiates a new OrderRefund and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderRefund
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderRefund {
        return new OrderRefund();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This field shows the refund amount for an order. This container is always returned for each refund.<br><br><span class="tablenote"><strong>Note:</strong> The refund amount shown is the seller's <em>net amount</em> received from the sale/transaction. eBay-collected tax will not be included in this amount, so the actual amount of the buyer's refund may be higher than this value.</span>
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundDate' => fn(ParseNode $n) => $o->setRefundDate($n->getStringValue()),
            'refundId' => fn(ParseNode $n) => $o->setRefundId($n->getStringValue()),
            'refundReferenceId' => fn(ParseNode $n) => $o->setRefundReferenceId($n->getStringValue()),
            'refundStatus' => fn(ParseNode $n) => $o->setRefundStatus($n->getEnumValue(RefundStatusEnum::class)),
        ];
    }

    /**
     * Gets the refundDate property value. The date and time that the refund was issued. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getRefundDate(): ?string {
        return $this->refundDate;
    }

    /**
     * Gets the refundId property value. Unique identifier of a refund that was initiated for an order through the <strong>issueRefund</strong> method. If the <strong>issueRefund</strong> method was used to issue one or more refunds at the line item level, these refund identifiers are returned at the line item level instead (<strong>lineItems.refunds.refundId</strong> field).<br><br> A <strong>refundId</strong> value is returned in the response of the <strong>issueRefund</strong> method, and this same value will be returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> responses for pending and completed refunds. For other refunds, see the <strong>refundReferenceId</strong> field.
     * @return string|null
    */
    public function getRefundId(): ?string {
        return $this->refundId;
    }

    /**
     * Gets the refundReferenceId property value. The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued.
     * @return string|null
    */
    public function getRefundReferenceId(): ?string {
        return $this->refundReferenceId;
    }

    /**
     * Gets the refundStatus property value. This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund.
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
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('refundDate', $this->getRefundDate());
        $writer->writeStringValue('refundId', $this->getRefundId());
        $writer->writeStringValue('refundReferenceId', $this->getRefundReferenceId());
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
     * Sets the amount property value. This field shows the refund amount for an order. This container is always returned for each refund.<br><br><span class="tablenote"><strong>Note:</strong> The refund amount shown is the seller's <em>net amount</em> received from the sale/transaction. eBay-collected tax will not be included in this amount, so the actual amount of the buyer's refund may be higher than this value.</span>
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the refundDate property value. The date and time that the refund was issued. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the refund has been issued. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the refundDate property.
    */
    public function setRefundDate(?string $value): void {
        $this->refundDate = $value;
    }

    /**
     * Sets the refundId property value. Unique identifier of a refund that was initiated for an order through the <strong>issueRefund</strong> method. If the <strong>issueRefund</strong> method was used to issue one or more refunds at the line item level, these refund identifiers are returned at the line item level instead (<strong>lineItems.refunds.refundId</strong> field).<br><br> A <strong>refundId</strong> value is returned in the response of the <strong>issueRefund</strong> method, and this same value will be returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> responses for pending and completed refunds. For other refunds, see the <strong>refundReferenceId</strong> field.
     * @param string|null $value Value to set for the refundId property.
    */
    public function setRefundId(?string $value): void {
        $this->refundId = $value;
    }

    /**
     * Sets the refundReferenceId property value. The eBay-generated unique identifier for the refund. This field is not returned until the refund has been issued.
     * @param string|null $value Value to set for the refundReferenceId property.
    */
    public function setRefundReferenceId(?string $value): void {
        $this->refundReferenceId = $value;
    }

    /**
     * Sets the refundStatus property value. This enumeration value indicates the current status of the refund to the buyer. This container is always returned for each refund.
     * @param RefundStatusEnum|null $value Value to set for the refundStatus property.
    */
    public function setRefundStatus(?RefundStatusEnum $value): void {
        $this->refundStatus = $value;
    }

}
