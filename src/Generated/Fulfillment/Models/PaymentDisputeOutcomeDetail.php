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
 * This type is used by the <strong>resolution</strong> container that is returned for payment disputes that have been resolved.
*/
class PaymentDisputeOutcomeDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SimpleAmount|null $fees This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $fees = null;
    
    /**
     * @var SimpleAmount|null $protectedAmount This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $protectedAmount = null;
    
    /**
     * @var string|null $protectionStatus This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum'>eBay API documentation</a>
    */
    private ?string $protectionStatus = null;
    
    /**
     * @var string|null $reasonForClosure The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum'>eBay API documentation</a>
    */
    private ?string $reasonForClosure = null;
    
    /**
     * @var SimpleAmount|null $recoupAmount This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $recoupAmount = null;
    
    /**
     * @var SimpleAmount|null $totalFeeCredit This type defines the monetary value of the payment dispute, and the currency used.
    */
    private ?SimpleAmount $totalFeeCredit = null;
    
    /**
     * Instantiates a new PaymentDisputeOutcomeDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDisputeOutcomeDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDisputeOutcomeDetail {
        return new PaymentDisputeOutcomeDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the fees property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getFees(): ?SimpleAmount {
        return $this->fees;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fees' => fn(ParseNode $n) => $o->setFees($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'protectedAmount' => fn(ParseNode $n) => $o->setProtectedAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'protectionStatus' => fn(ParseNode $n) => $o->setProtectionStatus($n->getStringValue()),
            'reasonForClosure' => fn(ParseNode $n) => $o->setReasonForClosure($n->getStringValue()),
            'recoupAmount' => fn(ParseNode $n) => $o->setRecoupAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'totalFeeCredit' => fn(ParseNode $n) => $o->setTotalFeeCredit($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the protectedAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getProtectedAmount(): ?SimpleAmount {
        return $this->protectedAmount;
    }

    /**
     * Gets the protectionStatus property value. This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getProtectionStatus(): ?string {
        return $this->protectionStatus;
    }

    /**
     * Gets the reasonForClosure property value. The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReasonForClosure(): ?string {
        return $this->reasonForClosure;
    }

    /**
     * Gets the recoupAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getRecoupAmount(): ?SimpleAmount {
        return $this->recoupAmount;
    }

    /**
     * Gets the totalFeeCredit property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @return SimpleAmount|null
    */
    public function getTotalFeeCredit(): ?SimpleAmount {
        return $this->totalFeeCredit;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fees', $this->getFees());
        $writer->writeObjectValue('protectedAmount', $this->getProtectedAmount());
        $writer->writeStringValue('protectionStatus', $this->getProtectionStatus());
        $writer->writeStringValue('reasonForClosure', $this->getReasonForClosure());
        $writer->writeObjectValue('recoupAmount', $this->getRecoupAmount());
        $writer->writeObjectValue('totalFeeCredit', $this->getTotalFeeCredit());
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
     * Sets the fees property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the fees property.
    */
    public function setFees(?SimpleAmount $value): void {
        $this->fees = $value;
    }

    /**
     * Sets the protectedAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the protectedAmount property.
    */
    public function setProtectedAmount(?SimpleAmount $value): void {
        $this->protectedAmount = $value;
    }

    /**
     * Sets the protectionStatus property value. This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ProtectionStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the protectionStatus property.
    */
    public function setProtectionStatus(?string $value): void {
        $this->protectionStatus = $value;
    }

    /**
     * Sets the reasonForClosure property value. The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:OutcomeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reasonForClosure property.
    */
    public function setReasonForClosure(?string $value): void {
        $this->reasonForClosure = $value;
    }

    /**
     * Sets the recoupAmount property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the recoupAmount property.
    */
    public function setRecoupAmount(?SimpleAmount $value): void {
        $this->recoupAmount = $value;
    }

    /**
     * Sets the totalFeeCredit property value. This type defines the monetary value of the payment dispute, and the currency used.
     * @param SimpleAmount|null $value Value to set for the totalFeeCredit property.
    */
    public function setTotalFeeCredit(?SimpleAmount $value): void {
        $this->totalFeeCredit = $value;
    }

}
