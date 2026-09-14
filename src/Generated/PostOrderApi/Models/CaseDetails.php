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

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>caseDetails</b> container that is returned in the <b>GET /post-order/v2/casemanagement/{caseId}</b> method to provide detailed information about the case.
*/
class CaseDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $buyerFinalAcceptResolution This string value indicates what the buyer ultimately agreed to with the seller to resolve the case.
    */
    private ?string $buyerFinalAcceptResolution = null;
    
    /**
     * @var string|null $buyerInitExpectResolution This string value indicates what the buyer initially agreed to with the seller to resolve the case.
    */
    private ?string $buyerInitExpectResolution = null;
    
    /**
     * @var DateTime|null $creationDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $creationDate = null;
    
    /**
     * @var DateTime|null $escalationDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $escalationDate = null;
    
    /**
     * @var DateTime|null $expirationDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $expirationDate = null;
    
    /**
     * @var DateTime|null $lastBuyerRespDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $lastBuyerRespDate = null;
    
    /**
     * @var DateTime|null $lastSellerRespDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $lastSellerRespDate = null;
    
    /**
     * @var bool|null $paypalPaid <b>THIS FIELD IS DEPRECATED</b>.
    */
    private ?bool $paypalPaid = null;
    
    /**
     * @var RefundAmounts|null $refundAmounts This type provided details related to the expected and actual buyer refund amounts associated with an INR inquiry or case.
    */
    private ?RefundAmounts $refundAmounts = null;
    
    /**
     * @var Amount|null $refundChargeAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $refundChargeAmount = null;
    
    /**
     * @var DateTime|null $refundDeadlineDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $refundDeadlineDate = null;
    
    /**
     * @var RefundType|null $refundType This enumeration type contains the possible types of refunds - partial or full.
    */
    private ?RefundType $refundType = null;
    
    /**
     * Instantiates a new CaseDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseDetails {
        return new CaseDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyerFinalAcceptResolution property value. This string value indicates what the buyer ultimately agreed to with the seller to resolve the case.
     * @return string|null
    */
    public function getBuyerFinalAcceptResolution(): ?string {
        return $this->buyerFinalAcceptResolution;
    }

    /**
     * Gets the buyerInitExpectResolution property value. This string value indicates what the buyer initially agreed to with the seller to resolve the case.
     * @return string|null
    */
    public function getBuyerInitExpectResolution(): ?string {
        return $this->buyerInitExpectResolution;
    }

    /**
     * Gets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getCreationDate(): ?DateTime {
        return $this->creationDate;
    }

    /**
     * Gets the escalationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getEscalationDate(): ?DateTime {
        return $this->escalationDate;
    }

    /**
     * Gets the expirationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getExpirationDate(): ?DateTime {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyerFinalAcceptResolution' => fn(ParseNode $n) => $o->setBuyerFinalAcceptResolution($n->getStringValue()),
            'buyerInitExpectResolution' => fn(ParseNode $n) => $o->setBuyerInitExpectResolution($n->getStringValue()),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getDateTimeValue()),
            'escalationDate' => fn(ParseNode $n) => $o->setEscalationDate($n->getDateTimeValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateTimeValue()),
            'lastBuyerRespDate' => fn(ParseNode $n) => $o->setLastBuyerRespDate($n->getDateTimeValue()),
            'lastSellerRespDate' => fn(ParseNode $n) => $o->setLastSellerRespDate($n->getDateTimeValue()),
            'paypalPaid' => fn(ParseNode $n) => $o->setPaypalPaid($n->getBooleanValue()),
            'refundAmounts' => fn(ParseNode $n) => $o->setRefundAmounts($n->getObjectValue([RefundAmounts::class, 'createFromDiscriminatorValue'])),
            'refundChargeAmount' => fn(ParseNode $n) => $o->setRefundChargeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundDeadlineDate' => fn(ParseNode $n) => $o->setRefundDeadlineDate($n->getDateTimeValue()),
            'refundType' => fn(ParseNode $n) => $o->setRefundType($n->getEnumValue(RefundType::class)),
        ];
    }

    /**
     * Gets the lastBuyerRespDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getLastBuyerRespDate(): ?DateTime {
        return $this->lastBuyerRespDate;
    }

    /**
     * Gets the lastSellerRespDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getLastSellerRespDate(): ?DateTime {
        return $this->lastSellerRespDate;
    }

    /**
     * Gets the paypalPaid property value. <b>THIS FIELD IS DEPRECATED</b>.
     * @return bool|null
    */
    public function getPaypalPaid(): ?bool {
        return $this->paypalPaid;
    }

    /**
     * Gets the refundAmounts property value. This type provided details related to the expected and actual buyer refund amounts associated with an INR inquiry or case.
     * @return RefundAmounts|null
    */
    public function getRefundAmounts(): ?RefundAmounts {
        return $this->refundAmounts;
    }

    /**
     * Gets the refundChargeAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getRefundChargeAmount(): ?Amount {
        return $this->refundChargeAmount;
    }

    /**
     * Gets the refundDeadlineDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getRefundDeadlineDate(): ?DateTime {
        return $this->refundDeadlineDate;
    }

    /**
     * Gets the refundType property value. This enumeration type contains the possible types of refunds - partial or full.
     * @return RefundType|null
    */
    public function getRefundType(): ?RefundType {
        return $this->refundType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('buyerFinalAcceptResolution', $this->getBuyerFinalAcceptResolution());
        $writer->writeStringValue('buyerInitExpectResolution', $this->getBuyerInitExpectResolution());
        $writer->writeDateTimeValue('creationDate', $this->getCreationDate());
        $writer->writeDateTimeValue('escalationDate', $this->getEscalationDate());
        $writer->writeDateTimeValue('expirationDate', $this->getExpirationDate());
        $writer->writeDateTimeValue('lastBuyerRespDate', $this->getLastBuyerRespDate());
        $writer->writeDateTimeValue('lastSellerRespDate', $this->getLastSellerRespDate());
        $writer->writeBooleanValue('paypalPaid', $this->getPaypalPaid());
        $writer->writeObjectValue('refundAmounts', $this->getRefundAmounts());
        $writer->writeObjectValue('refundChargeAmount', $this->getRefundChargeAmount());
        $writer->writeDateTimeValue('refundDeadlineDate', $this->getRefundDeadlineDate());
        $writer->writeEnumValue('refundType', $this->getRefundType());
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
     * Sets the buyerFinalAcceptResolution property value. This string value indicates what the buyer ultimately agreed to with the seller to resolve the case.
     * @param string|null $value Value to set for the buyerFinalAcceptResolution property.
    */
    public function setBuyerFinalAcceptResolution(?string $value): void {
        $this->buyerFinalAcceptResolution = $value;
    }

    /**
     * Sets the buyerInitExpectResolution property value. This string value indicates what the buyer initially agreed to with the seller to resolve the case.
     * @param string|null $value Value to set for the buyerInitExpectResolution property.
    */
    public function setBuyerInitExpectResolution(?string $value): void {
        $this->buyerInitExpectResolution = $value;
    }

    /**
     * Sets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?DateTime $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the escalationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the escalationDate property.
    */
    public function setEscalationDate(?DateTime $value): void {
        $this->escalationDate = $value;
    }

    /**
     * Sets the expirationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?DateTime $value): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the lastBuyerRespDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the lastBuyerRespDate property.
    */
    public function setLastBuyerRespDate(?DateTime $value): void {
        $this->lastBuyerRespDate = $value;
    }

    /**
     * Sets the lastSellerRespDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the lastSellerRespDate property.
    */
    public function setLastSellerRespDate(?DateTime $value): void {
        $this->lastSellerRespDate = $value;
    }

    /**
     * Sets the paypalPaid property value. <b>THIS FIELD IS DEPRECATED</b>.
     * @param bool|null $value Value to set for the paypalPaid property.
    */
    public function setPaypalPaid(?bool $value): void {
        $this->paypalPaid = $value;
    }

    /**
     * Sets the refundAmounts property value. This type provided details related to the expected and actual buyer refund amounts associated with an INR inquiry or case.
     * @param RefundAmounts|null $value Value to set for the refundAmounts property.
    */
    public function setRefundAmounts(?RefundAmounts $value): void {
        $this->refundAmounts = $value;
    }

    /**
     * Sets the refundChargeAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the refundChargeAmount property.
    */
    public function setRefundChargeAmount(?Amount $value): void {
        $this->refundChargeAmount = $value;
    }

    /**
     * Sets the refundDeadlineDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the refundDeadlineDate property.
    */
    public function setRefundDeadlineDate(?DateTime $value): void {
        $this->refundDeadlineDate = $value;
    }

    /**
     * Sets the refundType property value. This enumeration type contains the possible types of refunds - partial or full.
     * @param RefundType|null $value Value to set for the refundType property.
    */
    public function setRefundType(?RefundType $value): void {
        $this->refundType = $value;
    }

}
