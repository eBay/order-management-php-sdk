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
 * This type is used by the <b>returnRequest</b> container that is used in numerous methods to provide details about the buyer's return request, including the order line item (and quantity) that is being returned and the reason for the return.
*/
class ReturnRequestType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $carrier This enumeration value indicates the shipping carrier that will be used to ship the return item.<br/><br/>The supported enumeration values representing shipping carriers are defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
    */
    private ?string $carrier = null;
    
    /**
     * @var Text|null $comments This type is used by all containers that consist of text that is input by the buyer or seller.
    */
    private ?Text $comments = null;
    
    /**
     * @var string|null $itemId The unique identifier of the eBay listing where the item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item within an order.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $reason This enumerated value indicates the buyer's reason for creating a return request or draft.<br/><br/>The supported enumeration values representing valid return reasons are defined in the <a href="/devzone/post-order/types/ReturnReasonEnum.html">ReturnReasonEnum</a> type definition.
    */
    private ?string $reason = null;
    
    /**
     * @var RequestTypeEnum|null $requestType This enumerated type allows a user to differentiate between a return request and a return request draft.
    */
    private ?RequestTypeEnum $requestType = null;
    
    /**
     * @var int|null $returnQuantity This integer value indicates the quantity of the line item being returned. This number is generally <code>1</code>, unless the buyer bought multiple quantity of the item in a multiple-quantity, fixed-price listing. This value defaults to <code>1</code> if this field is omitted when a return is created.
    */
    private ?int $returnQuantity = null;
    
    /**
     * @var string|null $transactionId The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify a line item within an order.
    */
    private ?string $transactionId = null;
    
    /**
     * @var ReturnTypeEnum|null $type This enumerated type lists the possible values that the buyer can pass in the <b>type</b> field when the buyer is creating a return request or draft with the <b>POST /post-order/v2/return</b> or <b>POST /post-order/v2/return/draft</b> methods. <p class="tablenote"><b>Note:</b> Currently, <code>MONEY_BACK</code> is the only supported value.</p>
    */
    private ?ReturnTypeEnum $type = null;
    
    /**
     * Instantiates a new ReturnRequestType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnRequestType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnRequestType {
        return new ReturnRequestType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the carrier property value. This enumeration value indicates the shipping carrier that will be used to ship the return item.<br/><br/>The supported enumeration values representing shipping carriers are defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @return string|null
    */
    public function getCarrier(): ?string {
        return $this->carrier;
    }

    /**
     * Gets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @return Text|null
    */
    public function getComments(): ?Text {
        return $this->comments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'carrier' => fn(ParseNode $n) => $o->setCarrier($n->getStringValue()),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getEnumValue(RequestTypeEnum::class)),
            'returnQuantity' => fn(ParseNode $n) => $o->setReturnQuantity($n->getIntegerValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(ReturnTypeEnum::class)),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing where the item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item within an order.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the reason property value. This enumerated value indicates the buyer's reason for creating a return request or draft.<br/><br/>The supported enumeration values representing valid return reasons are defined in the <a href="/devzone/post-order/types/ReturnReasonEnum.html">ReturnReasonEnum</a> type definition.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the requestType property value. This enumerated type allows a user to differentiate between a return request and a return request draft.
     * @return RequestTypeEnum|null
    */
    public function getRequestType(): ?RequestTypeEnum {
        return $this->requestType;
    }

    /**
     * Gets the returnQuantity property value. This integer value indicates the quantity of the line item being returned. This number is generally <code>1</code>, unless the buyer bought multiple quantity of the item in a multiple-quantity, fixed-price listing. This value defaults to <code>1</code> if this field is omitted when a return is created.
     * @return int|null
    */
    public function getReturnQuantity(): ?int {
        return $this->returnQuantity;
    }

    /**
     * Gets the transactionId property value. The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify a line item within an order.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the type property value. This enumerated type lists the possible values that the buyer can pass in the <b>type</b> field when the buyer is creating a return request or draft with the <b>POST /post-order/v2/return</b> or <b>POST /post-order/v2/return/draft</b> methods. <p class="tablenote"><b>Note:</b> Currently, <code>MONEY_BACK</code> is the only supported value.</p>
     * @return ReturnTypeEnum|null
    */
    public function getType(): ?ReturnTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('carrier', $this->getCarrier());
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeEnumValue('requestType', $this->getRequestType());
        $writer->writeIntegerValue('returnQuantity', $this->getReturnQuantity());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the carrier property value. This enumeration value indicates the shipping carrier that will be used to ship the return item.<br/><br/>The supported enumeration values representing shipping carriers are defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition.
     * @param string|null $value Value to set for the carrier property.
    */
    public function setCarrier(?string $value): void {
        $this->carrier = $value;
    }

    /**
     * Sets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @param Text|null $value Value to set for the comments property.
    */
    public function setComments(?Text $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the eBay listing where the item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item within an order.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the reason property value. This enumerated value indicates the buyer's reason for creating a return request or draft.<br/><br/>The supported enumeration values representing valid return reasons are defined in the <a href="/devzone/post-order/types/ReturnReasonEnum.html">ReturnReasonEnum</a> type definition.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the requestType property value. This enumerated type allows a user to differentiate between a return request and a return request draft.
     * @param RequestTypeEnum|null $value Value to set for the requestType property.
    */
    public function setRequestType(?RequestTypeEnum $value): void {
        $this->requestType = $value;
    }

    /**
     * Sets the returnQuantity property value. This integer value indicates the quantity of the line item being returned. This number is generally <code>1</code>, unless the buyer bought multiple quantity of the item in a multiple-quantity, fixed-price listing. This value defaults to <code>1</code> if this field is omitted when a return is created.
     * @param int|null $value Value to set for the returnQuantity property.
    */
    public function setReturnQuantity(?int $value): void {
        $this->returnQuantity = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify a line item within an order.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the type property value. This enumerated type lists the possible values that the buyer can pass in the <b>type</b> field when the buyer is creating a return request or draft with the <b>POST /post-order/v2/return</b> or <b>POST /post-order/v2/return/draft</b> methods. <p class="tablenote"><b>Note:</b> Currently, <code>MONEY_BACK</code> is the only supported value.</p>
     * @param ReturnTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?ReturnTypeEnum $value): void {
        $this->type = $value;
    }

}
