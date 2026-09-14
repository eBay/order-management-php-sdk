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
 * The base request type of the <b>POST /post-order/v2/return/{returnId}/decide</b> method.
*/
class DecideReturnRequest implements AdditionalDataHolder, Parsable 
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
     * @var DecisionEnum|null $decision This enumerated type lists all values that can be passed in the <b>decision</b> field of the <b>POST /post-order/v2/return/{returnId}/decide</b> request. With the values supported in the <b>decision</b> field, the seller can offer the return option to the buyer, approve or decline a return request, offer a partial refund to the buyer, or provide a Return Merchandise Authorization (RMA) number to the buyer. There are only a few supported values for a buyer, and these are discussed in the descriptions below.
    */
    private ?DecisionEnum $decision = null;
    
    /**
     * @var bool|null $keepOriginalItem The seller can include this field and set it to <code>true</code> if they are OK with the buyer keeping the original item they received, and not requiring them to return the item. A seller may choose to do this in the case of a SNAD item or if the buyer is claiming that the item arrived damaged or was missing parts. <br/><br/><b>Default:</b> <code>false</code>
    */
    private ?bool $keepOriginalItem = null;
    
    /**
     * @var Amount|null $partialRefundAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $partialRefundAmount = null;
    
    /**
     * @var string|null $rMANumber This field is conditionally required if the seller is using the <b>POST /post-order/v2/return/{returnId}/decide</b> method to provide a return merchandise authorization (RMA) to the buyer. The RMA value cannot be validated by eBay, so the seller should pay close attention to ensure that the RMA is accurate. If an RMA is provided in this field, the <b>decision</b> value should be <code>PROVIDE_RMA</code>.
    */
    private ?string $rMANumber = null;
    
    /**
     * @var bool|null $rMAProvided If set to <code>true</code>, it indicates that the seller provided an RMA number to the buyer for processing of the return.  <br/><br/><b>Default:</b> <code>false</code>
    */
    private ?bool $rMAProvided = null;
    
    /**
     * Instantiates a new DecideReturnRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DecideReturnRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DecideReturnRequest {
        return new DecideReturnRequest();
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
     * Gets the decision property value. This enumerated type lists all values that can be passed in the <b>decision</b> field of the <b>POST /post-order/v2/return/{returnId}/decide</b> request. With the values supported in the <b>decision</b> field, the seller can offer the return option to the buyer, approve or decline a return request, offer a partial refund to the buyer, or provide a Return Merchandise Authorization (RMA) number to the buyer. There are only a few supported values for a buyer, and these are discussed in the descriptions below.
     * @return DecisionEnum|null
    */
    public function getDecision(): ?DecisionEnum {
        return $this->decision;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'decision' => fn(ParseNode $n) => $o->setDecision($n->getEnumValue(DecisionEnum::class)),
            'keepOriginalItem' => fn(ParseNode $n) => $o->setKeepOriginalItem($n->getBooleanValue()),
            'partialRefundAmount' => fn(ParseNode $n) => $o->setPartialRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'RMANumber' => fn(ParseNode $n) => $o->setRMANumber($n->getStringValue()),
            'rMAProvided' => fn(ParseNode $n) => $o->setRMAProvided($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the keepOriginalItem property value. The seller can include this field and set it to <code>true</code> if they are OK with the buyer keeping the original item they received, and not requiring them to return the item. A seller may choose to do this in the case of a SNAD item or if the buyer is claiming that the item arrived damaged or was missing parts. <br/><br/><b>Default:</b> <code>false</code>
     * @return bool|null
    */
    public function getKeepOriginalItem(): ?bool {
        return $this->keepOriginalItem;
    }

    /**
     * Gets the partialRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getPartialRefundAmount(): ?Amount {
        return $this->partialRefundAmount;
    }

    /**
     * Gets the RMANumber property value. This field is conditionally required if the seller is using the <b>POST /post-order/v2/return/{returnId}/decide</b> method to provide a return merchandise authorization (RMA) to the buyer. The RMA value cannot be validated by eBay, so the seller should pay close attention to ensure that the RMA is accurate. If an RMA is provided in this field, the <b>decision</b> value should be <code>PROVIDE_RMA</code>.
     * @return string|null
    */
    public function getRMANumber(): ?string {
        return $this->rMANumber;
    }

    /**
     * Gets the rMAProvided property value. If set to <code>true</code>, it indicates that the seller provided an RMA number to the buyer for processing of the return.  <br/><br/><b>Default:</b> <code>false</code>
     * @return bool|null
    */
    public function getRMAProvided(): ?bool {
        return $this->rMAProvided;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeEnumValue('decision', $this->getDecision());
        $writer->writeBooleanValue('keepOriginalItem', $this->getKeepOriginalItem());
        $writer->writeObjectValue('partialRefundAmount', $this->getPartialRefundAmount());
        $writer->writeStringValue('RMANumber', $this->getRMANumber());
        $writer->writeBooleanValue('rMAProvided', $this->getRMAProvided());
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
     * Sets the decision property value. This enumerated type lists all values that can be passed in the <b>decision</b> field of the <b>POST /post-order/v2/return/{returnId}/decide</b> request. With the values supported in the <b>decision</b> field, the seller can offer the return option to the buyer, approve or decline a return request, offer a partial refund to the buyer, or provide a Return Merchandise Authorization (RMA) number to the buyer. There are only a few supported values for a buyer, and these are discussed in the descriptions below.
     * @param DecisionEnum|null $value Value to set for the decision property.
    */
    public function setDecision(?DecisionEnum $value): void {
        $this->decision = $value;
    }

    /**
     * Sets the keepOriginalItem property value. The seller can include this field and set it to <code>true</code> if they are OK with the buyer keeping the original item they received, and not requiring them to return the item. A seller may choose to do this in the case of a SNAD item or if the buyer is claiming that the item arrived damaged or was missing parts. <br/><br/><b>Default:</b> <code>false</code>
     * @param bool|null $value Value to set for the keepOriginalItem property.
    */
    public function setKeepOriginalItem(?bool $value): void {
        $this->keepOriginalItem = $value;
    }

    /**
     * Sets the partialRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the partialRefundAmount property.
    */
    public function setPartialRefundAmount(?Amount $value): void {
        $this->partialRefundAmount = $value;
    }

    /**
     * Sets the RMANumber property value. This field is conditionally required if the seller is using the <b>POST /post-order/v2/return/{returnId}/decide</b> method to provide a return merchandise authorization (RMA) to the buyer. The RMA value cannot be validated by eBay, so the seller should pay close attention to ensure that the RMA is accurate. If an RMA is provided in this field, the <b>decision</b> value should be <code>PROVIDE_RMA</code>.
     * @param string|null $value Value to set for the RMANumber property.
    */
    public function setRMANumber(?string $value): void {
        $this->rMANumber = $value;
    }

    /**
     * Sets the rMAProvided property value. If set to <code>true</code>, it indicates that the seller provided an RMA number to the buyer for processing of the return.  <br/><br/><b>Default:</b> <code>false</code>
     * @param bool|null $value Value to set for the rMAProvided property.
    */
    public function setRMAProvided(?bool $value): void {
        $this->rMAProvided = $value;
    }

}
