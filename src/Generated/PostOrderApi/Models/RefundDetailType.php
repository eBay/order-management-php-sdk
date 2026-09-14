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
 * This type is used by <b>refundDetail</b> container in the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> and <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> methods to specify the total amount of the refund, as well as an <b>itemizedRefundDetail</b> container for each refund type (refund on purchase price, refund on original shipping, or any other costs paid by the buyer). The amount(s) in the <b>itemizedRefundDetail.amount</b> field(s) should equal the amount in the <b>refundDetail.totalAmount</b> field. This type is also used by the <b>actualRefund</b> container in the response of a <b>POST /post-order/v2/return</b> method to provide information about a successful refund for a return.
*/
class RefundDetailType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $donationAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $donationAmount = null;
    
    /**
     * @var Amount|null $feeCreditAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $feeCreditAmount = null;
    
    /**
     * @var array<ItemizedRefundDetailType>|null $itemizedRefundDetail This container is used to declare a refund that is being issued, or has been issued to the buyer. An <b>itemizedRefundDetail</b> container is required for each different refund type, such as purchase price and original shipping. This container is required when using the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method to issue a refund, or when using the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method to mark a refund as sent. In the <b>POST /post-order/v2/return</b> and <b>GET /post-order/v2/return/{returnId}</b> methods, this container will be returned under the <b>actualRefund</b> container if a refund has occurred.
    */
    private ?array $itemizedRefundDetail = null;
    
    /**
     * @var Amount|null $totalAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $totalAmount = null;
    
    /**
     * Instantiates a new RefundDetailType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefundDetailType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefundDetailType {
        return new RefundDetailType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the donationAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getDonationAmount(): ?Amount {
        return $this->donationAmount;
    }

    /**
     * Gets the feeCreditAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getFeeCreditAmount(): ?Amount {
        return $this->feeCreditAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'donationAmount' => fn(ParseNode $n) => $o->setDonationAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'feeCreditAmount' => fn(ParseNode $n) => $o->setFeeCreditAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'itemizedRefundDetail' => fn(ParseNode $n) => $o->setItemizedRefundDetail($n->getCollectionOfObjectValues([ItemizedRefundDetailType::class, 'createFromDiscriminatorValue'])),
            'totalAmount' => fn(ParseNode $n) => $o->setTotalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemizedRefundDetail property value. This container is used to declare a refund that is being issued, or has been issued to the buyer. An <b>itemizedRefundDetail</b> container is required for each different refund type, such as purchase price and original shipping. This container is required when using the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method to issue a refund, or when using the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method to mark a refund as sent. In the <b>POST /post-order/v2/return</b> and <b>GET /post-order/v2/return/{returnId}</b> methods, this container will be returned under the <b>actualRefund</b> container if a refund has occurred.
     * @return array<ItemizedRefundDetailType>|null
    */
    public function getItemizedRefundDetail(): ?array {
        return $this->itemizedRefundDetail;
    }

    /**
     * Gets the totalAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getTotalAmount(): ?Amount {
        return $this->totalAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('donationAmount', $this->getDonationAmount());
        $writer->writeObjectValue('feeCreditAmount', $this->getFeeCreditAmount());
        $writer->writeCollectionOfObjectValues('itemizedRefundDetail', $this->getItemizedRefundDetail());
        $writer->writeObjectValue('totalAmount', $this->getTotalAmount());
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
     * Sets the donationAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the donationAmount property.
    */
    public function setDonationAmount(?Amount $value): void {
        $this->donationAmount = $value;
    }

    /**
     * Sets the feeCreditAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the feeCreditAmount property.
    */
    public function setFeeCreditAmount(?Amount $value): void {
        $this->feeCreditAmount = $value;
    }

    /**
     * Sets the itemizedRefundDetail property value. This container is used to declare a refund that is being issued, or has been issued to the buyer. An <b>itemizedRefundDetail</b> container is required for each different refund type, such as purchase price and original shipping. This container is required when using the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method to issue a refund, or when using the <b>POST /post-order/v2/return/{returnId}/mark_refund_sent</b> method to mark a refund as sent. In the <b>POST /post-order/v2/return</b> and <b>GET /post-order/v2/return/{returnId}</b> methods, this container will be returned under the <b>actualRefund</b> container if a refund has occurred.
     * @param array<ItemizedRefundDetailType>|null $value Value to set for the itemizedRefundDetail property.
    */
    public function setItemizedRefundDetail(?array $value): void {
        $this->itemizedRefundDetail = $value;
    }

    /**
     * Sets the totalAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the totalAmount property.
    */
    public function setTotalAmount(?Amount $value): void {
        $this->totalAmount = $value;
    }

}
