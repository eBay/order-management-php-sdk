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
 * The base request type for the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, which is used to issue a refund to the buyer for a returned item.
*/
class IssueRefundRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Text|null $comments This type is used by all containers that consist of text that is input by the buyer or seller.
    */
    private ?Text $comments = null;
    
    /**
     * @var RefundDetailType|null $refundDetail This type is used by <b>refundDetail</b> container in the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> and <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> methods to specify the total amount of the refund, as well as an <b>itemizedRefundDetail</b> container for each refund type (refund on purchase price, refund on original shipping, or any other costs paid by the buyer). The amount(s) in the <b>itemizedRefundDetail.amount</b> field(s) should equal the amount in the <b>refundDetail.totalAmount</b> field. This type is also used by the <b>actualRefund</b> container in the response of a <b>POST /post-order/v2/return</b> method to provide information about a successful refund for a return.
    */
    private ?RefundDetailType $refundDetail = null;
    
    /**
     * @var bool|null $relistItem This field should be included and set to <code>true</code> if the seller wants to relist/restock the returned item automatically after the refund operation succeeds. <br/><br/>Sellers can check the eligibility for an item to be relisted by calling <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistStatus">Get Return</a>. In the response, check the <b>itemDetail.relistStatus</b> field for eligibility. This field will also show the status of a relist request as either <code>SUCCESS</code> (the relist succeeded) or <code>FAILED</code> (the relist request did not succeed).  <br/><br/>If the relist request succeeds, call <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistedItemId">Get Return</a> and check the <b>itemDetail.relistedItemId</b> to get the listing ID of the newly relisted item (the ID should match the ID of the original item listing).
    */
    private ?bool $relistItem = null;
    
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
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'refundDetail' => fn(ParseNode $n) => $o->setRefundDetail($n->getObjectValue([RefundDetailType::class, 'createFromDiscriminatorValue'])),
            'relistItem' => fn(ParseNode $n) => $o->setRelistItem($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the refundDetail property value. This type is used by <b>refundDetail</b> container in the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> and <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> methods to specify the total amount of the refund, as well as an <b>itemizedRefundDetail</b> container for each refund type (refund on purchase price, refund on original shipping, or any other costs paid by the buyer). The amount(s) in the <b>itemizedRefundDetail.amount</b> field(s) should equal the amount in the <b>refundDetail.totalAmount</b> field. This type is also used by the <b>actualRefund</b> container in the response of a <b>POST /post-order/v2/return</b> method to provide information about a successful refund for a return.
     * @return RefundDetailType|null
    */
    public function getRefundDetail(): ?RefundDetailType {
        return $this->refundDetail;
    }

    /**
     * Gets the relistItem property value. This field should be included and set to <code>true</code> if the seller wants to relist/restock the returned item automatically after the refund operation succeeds. <br/><br/>Sellers can check the eligibility for an item to be relisted by calling <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistStatus">Get Return</a>. In the response, check the <b>itemDetail.relistStatus</b> field for eligibility. This field will also show the status of a relist request as either <code>SUCCESS</code> (the relist succeeded) or <code>FAILED</code> (the relist request did not succeed).  <br/><br/>If the relist request succeeds, call <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistedItemId">Get Return</a> and check the <b>itemDetail.relistedItemId</b> to get the listing ID of the newly relisted item (the ID should match the ID of the original item listing).
     * @return bool|null
    */
    public function getRelistItem(): ?bool {
        return $this->relistItem;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeObjectValue('refundDetail', $this->getRefundDetail());
        $writer->writeBooleanValue('relistItem', $this->getRelistItem());
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
     * Sets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @param Text|null $value Value to set for the comments property.
    */
    public function setComments(?Text $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the refundDetail property value. This type is used by <b>refundDetail</b> container in the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> and <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> methods to specify the total amount of the refund, as well as an <b>itemizedRefundDetail</b> container for each refund type (refund on purchase price, refund on original shipping, or any other costs paid by the buyer). The amount(s) in the <b>itemizedRefundDetail.amount</b> field(s) should equal the amount in the <b>refundDetail.totalAmount</b> field. This type is also used by the <b>actualRefund</b> container in the response of a <b>POST /post-order/v2/return</b> method to provide information about a successful refund for a return.
     * @param RefundDetailType|null $value Value to set for the refundDetail property.
    */
    public function setRefundDetail(?RefundDetailType $value): void {
        $this->refundDetail = $value;
    }

    /**
     * Sets the relistItem property value. This field should be included and set to <code>true</code> if the seller wants to relist/restock the returned item automatically after the refund operation succeeds. <br/><br/>Sellers can check the eligibility for an item to be relisted by calling <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistStatus">Get Return</a>. In the response, check the <b>itemDetail.relistStatus</b> field for eligibility. This field will also show the status of a relist request as either <code>SUCCESS</code> (the relist succeeded) or <code>FAILED</code> (the relist request did not succeed).  <br/><br/>If the relist request succeeds, call <a href="/devzone/post-order/post-order_v2_return-returnId__get.html#Response.detail.itemDetail.relistedItemId">Get Return</a> and check the <b>itemDetail.relistedItemId</b> to get the listing ID of the newly relisted item (the ID should match the ID of the original item listing).
     * @param bool|null $value Value to set for the relistItem property.
    */
    public function setRelistItem(?bool $value): void {
        $this->relistItem = $value;
    }

}
