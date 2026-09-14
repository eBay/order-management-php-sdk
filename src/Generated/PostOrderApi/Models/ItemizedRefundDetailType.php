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

namespace EBay\OrderManagement\Generated\PostOrderApi\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>itemizedRefundDetail</b> container to provide details about a refund that was issued, or is in the process of being issued to the buyer. An <b>itemizedRefundDetail</b> container is required for each different refund type, such as purchase price and original shipping.
*/
class ItemizedRefundDetailType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $refundAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $refundAmount = null;
    
    /**
     * @var string|null $refundFeeType This enumerated value indicates the type of refund. When issuing a refund through the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, or if marking a refund as sent with the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method, the seller must use a separate <b>itemizedRefundDetail</b> container for each refund type, such as one for the purchase price, and one for original shipping.<br/><br/>The supported enumeration values representing refund fee types are defined in the <a href="/devzone/post-order/types/RefundFeeTypeEnum.html">RefundFeeTypeEnum</a> type definition.
    */
    private ?string $refundFeeType = null;
    
    /**
     * @var string|null $restockingFeePercentage <b>THIS FIELD IS DEPRECATED. DO NOT USE.
    */
    private ?string $restockingFeePercentage = null;
    
    /**
     * Instantiates a new ItemizedRefundDetailType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemizedRefundDetailType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemizedRefundDetailType {
        return new ItemizedRefundDetailType();
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
            'refundAmount' => fn(ParseNode $n) => $o->setRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundFeeType' => fn(ParseNode $n) => $o->setRefundFeeType($n->getStringValue()),
            'restockingFeePercentage' => fn(ParseNode $n) => $o->setRestockingFeePercentage($n->getStringValue()),
        ];
    }

    /**
     * Gets the refundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getRefundAmount(): ?Amount {
        return $this->refundAmount;
    }

    /**
     * Gets the refundFeeType property value. This enumerated value indicates the type of refund. When issuing a refund through the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, or if marking a refund as sent with the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method, the seller must use a separate <b>itemizedRefundDetail</b> container for each refund type, such as one for the purchase price, and one for original shipping.<br/><br/>The supported enumeration values representing refund fee types are defined in the <a href="/devzone/post-order/types/RefundFeeTypeEnum.html">RefundFeeTypeEnum</a> type definition.
     * @return string|null
    */
    public function getRefundFeeType(): ?string {
        return $this->refundFeeType;
    }

    /**
     * Gets the restockingFeePercentage property value. <b>THIS FIELD IS DEPRECATED. DO NOT USE.
     * @return string|null
    */
    public function getRestockingFeePercentage(): ?string {
        return $this->restockingFeePercentage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('refundAmount', $this->getRefundAmount());
        $writer->writeStringValue('refundFeeType', $this->getRefundFeeType());
        $writer->writeStringValue('restockingFeePercentage', $this->getRestockingFeePercentage());
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
     * Sets the refundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the refundAmount property.
    */
    public function setRefundAmount(?Amount $value): void {
        $this->refundAmount = $value;
    }

    /**
     * Sets the refundFeeType property value. This enumerated value indicates the type of refund. When issuing a refund through the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, or if marking a refund as sent with the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method, the seller must use a separate <b>itemizedRefundDetail</b> container for each refund type, such as one for the purchase price, and one for original shipping.<br/><br/>The supported enumeration values representing refund fee types are defined in the <a href="/devzone/post-order/types/RefundFeeTypeEnum.html">RefundFeeTypeEnum</a> type definition.
     * @param string|null $value Value to set for the refundFeeType property.
    */
    public function setRefundFeeType(?string $value): void {
        $this->refundFeeType = $value;
    }

    /**
     * Sets the restockingFeePercentage property value. <b>THIS FIELD IS DEPRECATED. DO NOT USE.
     * @param string|null $value Value to set for the restockingFeePercentage property.
    */
    public function setRestockingFeePercentage(?string $value): void {
        $this->restockingFeePercentage = $value;
    }

}
