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
     * @var SimpleAmount|null $donationCreditAmount This container shows the amount of money in donation credits.
    */
    private ?SimpleAmount $donationCreditAmount = null;
    
    /**
     * @var SimpleAmount|null $fees This container will show the dollar value of any fees associated with the payment dispute. This container is only returned if there are fees associated with the payment dispute.
    */
    private ?SimpleAmount $fees = null;
    
    /**
     * @var SimpleAmount|null $protectedAmount This container shows the amount of money that the seller is protected against in a payment dispute under eBay's seller protection policy.
    */
    private ?SimpleAmount $protectedAmount = null;
    
    /**
     * @var ProtectionStatusEnum|null $protectionStatus This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved.
    */
    private ?ProtectionStatusEnum $protectionStatus = null;
    
    /**
     * @var OutcomeEnum|null $reasonForClosure The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved.
    */
    private ?OutcomeEnum $reasonForClosure = null;
    
    /**
     * @var SimpleAmount|null $recoupAmount This container shows the dollar amount being recouped from the seller. This container is empty if the seller wins the payment dispute or if the seller is fully protected by eBay's seller protection policy.
    */
    private ?SimpleAmount $recoupAmount = null;
    
    /**
     * @var SimpleAmount|null $totalFeeCredit This container shows the amount of money in selling fee credits due back to the seller after a payment dispute is settled.
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
     * Gets the donationCreditAmount property value. This container shows the amount of money in donation credits.
     * @return SimpleAmount|null
    */
    public function getDonationCreditAmount(): ?SimpleAmount {
        return $this->donationCreditAmount;
    }

    /**
     * Gets the fees property value. This container will show the dollar value of any fees associated with the payment dispute. This container is only returned if there are fees associated with the payment dispute.
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
            'donationCreditAmount' => fn(ParseNode $n) => $o->setDonationCreditAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'fees' => fn(ParseNode $n) => $o->setFees($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'protectedAmount' => fn(ParseNode $n) => $o->setProtectedAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'protectionStatus' => fn(ParseNode $n) => $o->setProtectionStatus($n->getEnumValue(ProtectionStatusEnum::class)),
            'reasonForClosure' => fn(ParseNode $n) => $o->setReasonForClosure($n->getEnumValue(OutcomeEnum::class)),
            'recoupAmount' => fn(ParseNode $n) => $o->setRecoupAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'totalFeeCredit' => fn(ParseNode $n) => $o->setTotalFeeCredit($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the protectedAmount property value. This container shows the amount of money that the seller is protected against in a payment dispute under eBay's seller protection policy.
     * @return SimpleAmount|null
    */
    public function getProtectedAmount(): ?SimpleAmount {
        return $this->protectedAmount;
    }

    /**
     * Gets the protectionStatus property value. This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved.
     * @return ProtectionStatusEnum|null
    */
    public function getProtectionStatus(): ?ProtectionStatusEnum {
        return $this->protectionStatus;
    }

    /**
     * Gets the reasonForClosure property value. The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved.
     * @return OutcomeEnum|null
    */
    public function getReasonForClosure(): ?OutcomeEnum {
        return $this->reasonForClosure;
    }

    /**
     * Gets the recoupAmount property value. This container shows the dollar amount being recouped from the seller. This container is empty if the seller wins the payment dispute or if the seller is fully protected by eBay's seller protection policy.
     * @return SimpleAmount|null
    */
    public function getRecoupAmount(): ?SimpleAmount {
        return $this->recoupAmount;
    }

    /**
     * Gets the totalFeeCredit property value. This container shows the amount of money in selling fee credits due back to the seller after a payment dispute is settled.
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
        $writer->writeObjectValue('donationCreditAmount', $this->getDonationCreditAmount());
        $writer->writeObjectValue('fees', $this->getFees());
        $writer->writeObjectValue('protectedAmount', $this->getProtectedAmount());
        $writer->writeEnumValue('protectionStatus', $this->getProtectionStatus());
        $writer->writeEnumValue('reasonForClosure', $this->getReasonForClosure());
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
     * Sets the donationCreditAmount property value. This container shows the amount of money in donation credits.
     * @param SimpleAmount|null $value Value to set for the donationCreditAmount property.
    */
    public function setDonationCreditAmount(?SimpleAmount $value): void {
        $this->donationCreditAmount = $value;
    }

    /**
     * Sets the fees property value. This container will show the dollar value of any fees associated with the payment dispute. This container is only returned if there are fees associated with the payment dispute.
     * @param SimpleAmount|null $value Value to set for the fees property.
    */
    public function setFees(?SimpleAmount $value): void {
        $this->fees = $value;
    }

    /**
     * Sets the protectedAmount property value. This container shows the amount of money that the seller is protected against in a payment dispute under eBay's seller protection policy.
     * @param SimpleAmount|null $value Value to set for the protectedAmount property.
    */
    public function setProtectedAmount(?SimpleAmount $value): void {
        $this->protectedAmount = $value;
    }

    /**
     * Sets the protectionStatus property value. This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved.
     * @param ProtectionStatusEnum|null $value Value to set for the protectionStatus property.
    */
    public function setProtectionStatus(?ProtectionStatusEnum $value): void {
        $this->protectionStatus = $value;
    }

    /**
     * Sets the reasonForClosure property value. The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved.
     * @param OutcomeEnum|null $value Value to set for the reasonForClosure property.
    */
    public function setReasonForClosure(?OutcomeEnum $value): void {
        $this->reasonForClosure = $value;
    }

    /**
     * Sets the recoupAmount property value. This container shows the dollar amount being recouped from the seller. This container is empty if the seller wins the payment dispute or if the seller is fully protected by eBay's seller protection policy.
     * @param SimpleAmount|null $value Value to set for the recoupAmount property.
    */
    public function setRecoupAmount(?SimpleAmount $value): void {
        $this->recoupAmount = $value;
    }

    /**
     * Sets the totalFeeCredit property value. This container shows the amount of money in selling fee credits due back to the seller after a payment dispute is settled.
     * @param SimpleAmount|null $value Value to set for the totalFeeCredit property.
    */
    public function setTotalFeeCredit(?SimpleAmount $value): void {
        $this->totalFeeCredit = $value;
    }

}
