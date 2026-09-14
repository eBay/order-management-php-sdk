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
 * The base request type of the <b>POST /post-order/v2/inquiry</b> method, which is used to create an Item Not Received (INR) inquiry on behalf of the buyer.
*/
class CreateInquiryRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $claimQuantity This integer is the quantity of the line item purchased by the buyer. This value will usually be <code>1</code> unless the buyer purchased multiple quantity of a line item in a multiple-quantity, fixed-priced listing. <br/><br/>If this field is omitted, its value defaults to <code>1</code>.
    */
    private ?int $claimQuantity = null;
    
    /**
     * @var Text|null $comments This type is used by all containers that consist of text that is input by the buyer or seller.
    */
    private ?Text $comments = null;
    
    /**
     * @var DesiredOutcomeTypeEnum|null $desiredOutcome This enumerated type lists the desired outcomes that the buyer may specify when creating an INR inquiry.
    */
    private ?DesiredOutcomeTypeEnum $desiredOutcome = null;
    
    /**
     * @var string|null $itemId The unique identifier of the eBay listing where the line item was purchased. This field and the <b>transactionId</b> field are required in order to identify the line item for which an INR inquiry will be created.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $transactionId The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field and the <b>itemId</b> field are required in order to identify the line item for which an INR inquiry will be created.
    */
    private ?string $transactionId = null;
    
    /**
     * Instantiates a new CreateInquiryRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateInquiryRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateInquiryRequest {
        return new CreateInquiryRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the claimQuantity property value. This integer is the quantity of the line item purchased by the buyer. This value will usually be <code>1</code> unless the buyer purchased multiple quantity of a line item in a multiple-quantity, fixed-priced listing. <br/><br/>If this field is omitted, its value defaults to <code>1</code>.
     * @return int|null
    */
    public function getClaimQuantity(): ?int {
        return $this->claimQuantity;
    }

    /**
     * Gets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @return Text|null
    */
    public function getComments(): ?Text {
        return $this->comments;
    }

    /**
     * Gets the desiredOutcome property value. This enumerated type lists the desired outcomes that the buyer may specify when creating an INR inquiry.
     * @return DesiredOutcomeTypeEnum|null
    */
    public function getDesiredOutcome(): ?DesiredOutcomeTypeEnum {
        return $this->desiredOutcome;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'claimQuantity' => fn(ParseNode $n) => $o->setClaimQuantity($n->getIntegerValue()),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'desiredOutcome' => fn(ParseNode $n) => $o->setDesiredOutcome($n->getEnumValue(DesiredOutcomeTypeEnum::class)),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field and the <b>transactionId</b> field are required in order to identify the line item for which an INR inquiry will be created.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the transactionId property value. The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field and the <b>itemId</b> field are required in order to identify the line item for which an INR inquiry will be created.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('claimQuantity', $this->getClaimQuantity());
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeEnumValue('desiredOutcome', $this->getDesiredOutcome());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
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
     * Sets the claimQuantity property value. This integer is the quantity of the line item purchased by the buyer. This value will usually be <code>1</code> unless the buyer purchased multiple quantity of a line item in a multiple-quantity, fixed-priced listing. <br/><br/>If this field is omitted, its value defaults to <code>1</code>.
     * @param int|null $value Value to set for the claimQuantity property.
    */
    public function setClaimQuantity(?int $value): void {
        $this->claimQuantity = $value;
    }

    /**
     * Sets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @param Text|null $value Value to set for the comments property.
    */
    public function setComments(?Text $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the desiredOutcome property value. This enumerated type lists the desired outcomes that the buyer may specify when creating an INR inquiry.
     * @param DesiredOutcomeTypeEnum|null $value Value to set for the desiredOutcome property.
    */
    public function setDesiredOutcome(?DesiredOutcomeTypeEnum $value): void {
        $this->desiredOutcome = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field and the <b>transactionId</b> field are required in order to identify the line item for which an INR inquiry will be created.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier for the purchase of a item. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field and the <b>itemId</b> field are required in order to identify the line item for which an INR inquiry will be created.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
