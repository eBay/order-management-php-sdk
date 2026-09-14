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
 * This type provided details related to the expected and actual buyer refund amounts associated with an INR inquiry or case.
*/
class RefundAmounts implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $buyerFinalAcceptRefundAmt This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $buyerFinalAcceptRefundAmt = null;
    
    /**
     * @var Amount|null $buyerInitExpectRefundAmt This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $buyerInitExpectRefundAmt = null;
    
    /**
     * @var Amount|null $donationAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $donationAmount = null;
    
    /**
     * @var Amount|null $feeCreditAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $feeCreditAmount = null;
    
    /**
     * @var Amount|null $internationalRefundAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $internationalRefundAmount = null;
    
    /**
     * @var Amount|null $refundAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $refundAmount = null;
    
    /**
     * Instantiates a new RefundAmounts and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RefundAmounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RefundAmounts {
        return new RefundAmounts();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyerFinalAcceptRefundAmt property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getBuyerFinalAcceptRefundAmt(): ?Amount {
        return $this->buyerFinalAcceptRefundAmt;
    }

    /**
     * Gets the buyerInitExpectRefundAmt property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getBuyerInitExpectRefundAmt(): ?Amount {
        return $this->buyerInitExpectRefundAmt;
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
            'buyerFinalAcceptRefundAmt' => fn(ParseNode $n) => $o->setBuyerFinalAcceptRefundAmt($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'buyerInitExpectRefundAmt' => fn(ParseNode $n) => $o->setBuyerInitExpectRefundAmt($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'donationAmount' => fn(ParseNode $n) => $o->setDonationAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'feeCreditAmount' => fn(ParseNode $n) => $o->setFeeCreditAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'internationalRefundAmount' => fn(ParseNode $n) => $o->setInternationalRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundAmount' => fn(ParseNode $n) => $o->setRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the internationalRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getInternationalRefundAmount(): ?Amount {
        return $this->internationalRefundAmount;
    }

    /**
     * Gets the refundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getRefundAmount(): ?Amount {
        return $this->refundAmount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyerFinalAcceptRefundAmt', $this->getBuyerFinalAcceptRefundAmt());
        $writer->writeObjectValue('buyerInitExpectRefundAmt', $this->getBuyerInitExpectRefundAmt());
        $writer->writeObjectValue('donationAmount', $this->getDonationAmount());
        $writer->writeObjectValue('feeCreditAmount', $this->getFeeCreditAmount());
        $writer->writeObjectValue('internationalRefundAmount', $this->getInternationalRefundAmount());
        $writer->writeObjectValue('refundAmount', $this->getRefundAmount());
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
     * Sets the buyerFinalAcceptRefundAmt property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the buyerFinalAcceptRefundAmt property.
    */
    public function setBuyerFinalAcceptRefundAmt(?Amount $value): void {
        $this->buyerFinalAcceptRefundAmt = $value;
    }

    /**
     * Sets the buyerInitExpectRefundAmt property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the buyerInitExpectRefundAmt property.
    */
    public function setBuyerInitExpectRefundAmt(?Amount $value): void {
        $this->buyerInitExpectRefundAmt = $value;
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
     * Sets the internationalRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the internationalRefundAmount property.
    */
    public function setInternationalRefundAmount(?Amount $value): void {
        $this->internationalRefundAmount = $value;
    }

    /**
     * Sets the refundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the refundAmount property.
    */
    public function setRefundAmount(?Amount $value): void {
        $this->refundAmount = $value;
    }

}
