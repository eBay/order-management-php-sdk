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
 * This type provides information related to the appeal of a case decision.
*/
class AppealDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $appealCloseReasonEnum This enumeration value indicates why the appeal on the case decision was closed. This field will only be returned if an appeal was made on a case decision and this appeal has been closed.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealCloseReasonEnum.html">AppealCloseReasonEnum</a> type definition.
    */
    private ?string $appealCloseReasonEnum = null;
    
    /**
     * @var DateTime|null $appealDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $appealDate = null;
    
    /**
     * @var string|null $appealReasonCode This string value is a string representation of why the buyer or seller appealed the case decision. This field is only returned if the buyer or seller made an appeal on the case decision.
    */
    private ?string $appealReasonCode = null;
    
    /**
     * @var Amount|null $appealRefundAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $appealRefundAmount = null;
    
    /**
     * @var AppealGrantStatusEnum|null $appealStatus This enumeration type contains the possible outcomes of a case decision that has been appealed by the buyer or seller.
    */
    private ?AppealGrantStatusEnum $appealStatus = null;
    
    /**
     * @var string|null $appealStatusEnum This enumeration value indicates the current status of the appeal against the case decision.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealStatusEnum.html">AppealStatusEnum</a> type definition.
    */
    private ?string $appealStatusEnum = null;
    
    /**
     * @var bool|null $eligibleForAppeal This boolean field will be returned as <code>true</code> if the buyer or seller is eligible to appeal the decision on the case.
    */
    private ?bool $eligibleForAppeal = null;
    
    /**
     * Instantiates a new AppealDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppealDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppealDetails {
        return new AppealDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appealCloseReasonEnum property value. This enumeration value indicates why the appeal on the case decision was closed. This field will only be returned if an appeal was made on a case decision and this appeal has been closed.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealCloseReasonEnum.html">AppealCloseReasonEnum</a> type definition.
     * @return string|null
    */
    public function getAppealCloseReasonEnum(): ?string {
        return $this->appealCloseReasonEnum;
    }

    /**
     * Gets the appealDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getAppealDate(): ?DateTime {
        return $this->appealDate;
    }

    /**
     * Gets the appealReasonCode property value. This string value is a string representation of why the buyer or seller appealed the case decision. This field is only returned if the buyer or seller made an appeal on the case decision.
     * @return string|null
    */
    public function getAppealReasonCode(): ?string {
        return $this->appealReasonCode;
    }

    /**
     * Gets the appealRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getAppealRefundAmount(): ?Amount {
        return $this->appealRefundAmount;
    }

    /**
     * Gets the appealStatus property value. This enumeration type contains the possible outcomes of a case decision that has been appealed by the buyer or seller.
     * @return AppealGrantStatusEnum|null
    */
    public function getAppealStatus(): ?AppealGrantStatusEnum {
        return $this->appealStatus;
    }

    /**
     * Gets the appealStatusEnum property value. This enumeration value indicates the current status of the appeal against the case decision.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealStatusEnum.html">AppealStatusEnum</a> type definition.
     * @return string|null
    */
    public function getAppealStatusEnum(): ?string {
        return $this->appealStatusEnum;
    }

    /**
     * Gets the eligibleForAppeal property value. This boolean field will be returned as <code>true</code> if the buyer or seller is eligible to appeal the decision on the case.
     * @return bool|null
    */
    public function getEligibleForAppeal(): ?bool {
        return $this->eligibleForAppeal;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appealCloseReasonEnum' => fn(ParseNode $n) => $o->setAppealCloseReasonEnum($n->getStringValue()),
            'appealDate' => fn(ParseNode $n) => $o->setAppealDate($n->getDateTimeValue()),
            'appealReasonCode' => fn(ParseNode $n) => $o->setAppealReasonCode($n->getStringValue()),
            'appealRefundAmount' => fn(ParseNode $n) => $o->setAppealRefundAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'appealStatus' => fn(ParseNode $n) => $o->setAppealStatus($n->getEnumValue(AppealGrantStatusEnum::class)),
            'appealStatusEnum' => fn(ParseNode $n) => $o->setAppealStatusEnum($n->getStringValue()),
            'eligibleForAppeal' => fn(ParseNode $n) => $o->setEligibleForAppeal($n->getBooleanValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appealCloseReasonEnum', $this->getAppealCloseReasonEnum());
        $writer->writeDateTimeValue('appealDate', $this->getAppealDate());
        $writer->writeStringValue('appealReasonCode', $this->getAppealReasonCode());
        $writer->writeObjectValue('appealRefundAmount', $this->getAppealRefundAmount());
        $writer->writeEnumValue('appealStatus', $this->getAppealStatus());
        $writer->writeStringValue('appealStatusEnum', $this->getAppealStatusEnum());
        $writer->writeBooleanValue('eligibleForAppeal', $this->getEligibleForAppeal());
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
     * Sets the appealCloseReasonEnum property value. This enumeration value indicates why the appeal on the case decision was closed. This field will only be returned if an appeal was made on a case decision and this appeal has been closed.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealCloseReasonEnum.html">AppealCloseReasonEnum</a> type definition.
     * @param string|null $value Value to set for the appealCloseReasonEnum property.
    */
    public function setAppealCloseReasonEnum(?string $value): void {
        $this->appealCloseReasonEnum = $value;
    }

    /**
     * Sets the appealDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the appealDate property.
    */
    public function setAppealDate(?DateTime $value): void {
        $this->appealDate = $value;
    }

    /**
     * Sets the appealReasonCode property value. This string value is a string representation of why the buyer or seller appealed the case decision. This field is only returned if the buyer or seller made an appeal on the case decision.
     * @param string|null $value Value to set for the appealReasonCode property.
    */
    public function setAppealReasonCode(?string $value): void {
        $this->appealReasonCode = $value;
    }

    /**
     * Sets the appealRefundAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the appealRefundAmount property.
    */
    public function setAppealRefundAmount(?Amount $value): void {
        $this->appealRefundAmount = $value;
    }

    /**
     * Sets the appealStatus property value. This enumeration type contains the possible outcomes of a case decision that has been appealed by the buyer or seller.
     * @param AppealGrantStatusEnum|null $value Value to set for the appealStatus property.
    */
    public function setAppealStatus(?AppealGrantStatusEnum $value): void {
        $this->appealStatus = $value;
    }

    /**
     * Sets the appealStatusEnum property value. This enumeration value indicates the current status of the appeal against the case decision.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/AppealStatusEnum.html">AppealStatusEnum</a> type definition.
     * @param string|null $value Value to set for the appealStatusEnum property.
    */
    public function setAppealStatusEnum(?string $value): void {
        $this->appealStatusEnum = $value;
    }

    /**
     * Sets the eligibleForAppeal property value. This boolean field will be returned as <code>true</code> if the buyer or seller is eligible to appeal the decision on the case.
     * @param bool|null $value Value to set for the eligibleForAppeal property.
    */
    public function setEligibleForAppeal(?bool $value): void {
        $this->eligibleForAppeal = $value;
    }

}
