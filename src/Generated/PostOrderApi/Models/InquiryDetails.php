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
 * Type used by the <b>inquiryDetails</b> container of the <b>GET /post-order/v2/inquiry/{inquiryId}</b> response. The <b>inquiryDetails</b> container provides details about a specific INR inquiry that is identified through a path parameter in the request.
*/
class InquiryDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AppealDetails|null $appealDetails This type provides information related to the appeal of a case decision.
    */
    private ?AppealDetails $appealDetails = null;
    
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
     * @var ProvisionalRefund|null $provisionalRefund This type defines whether a provisional refund was issued to the buyer and whether the provisional refund was later reversed.
    */
    private ?ProvisionalRefund $provisionalRefund = null;
    
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
     * @var Amount|null $totalAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $totalAmount = null;
    
    /**
     * Instantiates a new InquiryDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InquiryDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InquiryDetails {
        return new InquiryDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appealDetails property value. This type provides information related to the appeal of a case decision.
     * @return AppealDetails|null
    */
    public function getAppealDetails(): ?AppealDetails {
        return $this->appealDetails;
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
            'appealDetails' => fn(ParseNode $n) => $o->setAppealDetails($n->getObjectValue([AppealDetails::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getDateTimeValue()),
            'escalationDate' => fn(ParseNode $n) => $o->setEscalationDate($n->getDateTimeValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getDateTimeValue()),
            'lastBuyerRespDate' => fn(ParseNode $n) => $o->setLastBuyerRespDate($n->getDateTimeValue()),
            'provisionalRefund' => fn(ParseNode $n) => $o->setProvisionalRefund($n->getObjectValue([ProvisionalRefund::class, 'createFromDiscriminatorValue'])),
            'refundAmounts' => fn(ParseNode $n) => $o->setRefundAmounts($n->getObjectValue([RefundAmounts::class, 'createFromDiscriminatorValue'])),
            'refundChargeAmount' => fn(ParseNode $n) => $o->setRefundChargeAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'refundDeadlineDate' => fn(ParseNode $n) => $o->setRefundDeadlineDate($n->getDateTimeValue()),
            'totalAmount' => fn(ParseNode $n) => $o->setTotalAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
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
     * Gets the provisionalRefund property value. This type defines whether a provisional refund was issued to the buyer and whether the provisional refund was later reversed.
     * @return ProvisionalRefund|null
    */
    public function getProvisionalRefund(): ?ProvisionalRefund {
        return $this->provisionalRefund;
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
        $writer->writeObjectValue('appealDetails', $this->getAppealDetails());
        $writer->writeDateTimeValue('creationDate', $this->getCreationDate());
        $writer->writeDateTimeValue('escalationDate', $this->getEscalationDate());
        $writer->writeDateTimeValue('expirationDate', $this->getExpirationDate());
        $writer->writeDateTimeValue('lastBuyerRespDate', $this->getLastBuyerRespDate());
        $writer->writeObjectValue('provisionalRefund', $this->getProvisionalRefund());
        $writer->writeObjectValue('refundAmounts', $this->getRefundAmounts());
        $writer->writeObjectValue('refundChargeAmount', $this->getRefundChargeAmount());
        $writer->writeDateTimeValue('refundDeadlineDate', $this->getRefundDeadlineDate());
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
     * Sets the appealDetails property value. This type provides information related to the appeal of a case decision.
     * @param AppealDetails|null $value Value to set for the appealDetails property.
    */
    public function setAppealDetails(?AppealDetails $value): void {
        $this->appealDetails = $value;
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
     * Sets the provisionalRefund property value. This type defines whether a provisional refund was issued to the buyer and whether the provisional refund was later reversed.
     * @param ProvisionalRefund|null $value Value to set for the provisionalRefund property.
    */
    public function setProvisionalRefund(?ProvisionalRefund $value): void {
        $this->provisionalRefund = $value;
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
     * Sets the totalAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the totalAmount property.
    */
    public function setTotalAmount(?Amount $value): void {
        $this->totalAmount = $value;
    }

}
