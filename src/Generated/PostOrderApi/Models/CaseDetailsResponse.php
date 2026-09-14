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
 * The base response type for the <b>GET /post-order/v2/casemanagement/{caseId}</b> method. This type contains detailed information about an INR or Return case.
*/
class CaseDetailsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var ActionDeadlines|null $actionDeadlines This type is used by the <b>actionDeadlines</b> container, which  provides the number of remaining days that a buyer or seller has before being required to take action on an INR or Return case.
    */
    private ?ActionDeadlines $actionDeadlines = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AppealDetails|null $appealDetails This type provides information related to the appeal of a case decision.
    */
    private ?AppealDetails $appealDetails = null;
    
    /**
     * @var string|null $buyerClosureReason This enumeration value indicates why the buyer chose to close the case. This field is only returned if the buyer closed the case, or if the case was closed on behalf of the buyer.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
    */
    private ?string $buyerClosureReason = null;
    
    /**
     * @var string|null $buyerProtectedProgramLink This string value is the URL for the eBay Resolution Center.
    */
    private ?string $buyerProtectedProgramLink = null;
    
    /**
     * @var bool|null $caseContentOnHold This field indicates the item content related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding case content is on hold due to eBay policy violation; false otherwise.
    */
    private ?bool $caseContentOnHold = null;
    
    /**
     * @var CaseDetails|null $caseDetails This type is used by the <b>caseDetails</b> container that is returned in the <b>GET /post-order/v2/casemanagement/{caseId}</b> method to provide detailed information about the case.
    */
    private ?CaseDetails $caseDetails = null;
    
    /**
     * @var ClaimHistoryResponse|null $caseHistoryDetails This type is used to provide the history of events associated with an INR inquiry or a case.
    */
    private ?ClaimHistoryResponse $caseHistoryDetails = null;
    
    /**
     * @var string|null $caseId The unique identifier of an INR or Return case.
    */
    private ?string $caseId = null;
    
    /**
     * @var int|null $caseQuantity This integer value indicates the quantity of the line item purchased by the buyer.
    */
    private ?int $caseQuantity = null;
    
    /**
     * @var CaseTypeEnum|null $caseType This enumeration type lists the types of cases that may be created by the buyer or seller.
    */
    private ?CaseTypeEnum $caseType = null;
    
    /**
     * @var Amount|null $claimAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $claimAmount = null;
    
    /**
     * @var DateTime|null $creationDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $creationDate = null;
    
    /**
     * @var UserPartyEnum|null $escalatedBy This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
    */
    private ?UserPartyEnum $escalatedBy = null;
    
    /**
     * @var string|null $escalateReason Indicates why the buyer or seller escalated an INR inquiry or a return request into a case.<br/><br/>For an INR inquiry that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/InquiryEscalationReasonEnum.html">InquiryEscalationReasonEnum</a> type definition. type.<br/><br/>For a return request that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/EscalateReasonEnum.html">EscalateReasonEnum</a> type definition.
    */
    private ?string $escalateReason = null;
    
    /**
     * @var string|null $eventTicketsLink This string value is the URL for the event tickets page, where electronic event tickets can be downloaded by the purchaser. This field is only returned if the case involves an event tickets order.
    */
    private ?string $eventTicketsLink = null;
    
    /**
     * @var string|null $extTransactionId This string value is the unique identifier of the payment transaction for the order. This field will only be returned if the payment transaction happened outside of eBay's system.
    */
    private ?string $extTransactionId = null;
    
    /**
     * @var int|null $fsnadDaysToAddTrackingAfterShippingItem This integer value indicates the number of days that the buyer has to provide shipment tracking information for an item that is being returned to the seller.<br/><br/> This field is only returned for Return cases, and only if the buyer is being required to provide shipment tracking information for the item being returned.
    */
    private ?int $fsnadDaysToAddTrackingAfterShippingItem = null;
    
    /**
     * @var DateTime|null $fsnadShipToSellerByDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $fsnadShipToSellerByDate = null;
    
    /**
     * @var UserPartyEnum|null $initiator This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
    */
    private ?UserPartyEnum $initiator = null;
    
    /**
     * @var string|null $itemId The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
    */
    private ?string $itemId = null;
    
    /**
     * @var bool|null $itemOnHold This field indicates the item related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding item is on hold due to eBay policy violation; false otherwise.
    */
    private ?bool $itemOnHold = null;
    
    /**
     * @var DateTime|null $lastModifiedDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $lastModifiedDate = null;
    
    /**
     * @var string|null $payForItemLink This string value is the URL for the purchase item page. This field will be returned if available/applicable.
    */
    private ?string $payForItemLink = null;
    
    /**
     * @var string|null $priceSignatureConfirmationAmount This string value indicates the dollar value threshold for the signature confirmation add-on. The buyer must purchase the signature confirmation add-on for high-value items at or above this dollar value.
    */
    private ?string $priceSignatureConfirmationAmount = null;
    
    /**
     * @var string|null $recalledItemLink This string is the URL for the recalled item page. This field will be returned if available/applicable.
    */
    private ?string $recalledItemLink = null;
    
    /**
     * @var ReturnAddress|null $returnDetails This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
    */
    private ?ReturnAddress $returnDetails = null;
    
    /**
     * @var string|null $returnId The unique identifier of a return. This field is only returned if the case type is a Return.
    */
    private ?string $returnId = null;
    
    /**
     * @var string|null $sellerClosureReason This enumeration value indicates why the seller chose to close the case. This field is only returned if the seller closed the case, or if the case was closed on behalf of the seller.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
    */
    private ?string $sellerClosureReason = null;
    
    /**
     * @var Amount|null $shippingFee This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $shippingFee = null;
    
    /**
     * @var string|null $status This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $transactionId The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
    */
    private ?string $transactionId = null;
    
    /**
     * Instantiates a new CaseDetailsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseDetailsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseDetailsResponse {
        return new CaseDetailsResponse();
    }

    /**
     * Gets the actionDeadlines property value. This type is used by the <b>actionDeadlines</b> container, which  provides the number of remaining days that a buyer or seller has before being required to take action on an INR or Return case.
     * @return ActionDeadlines|null
    */
    public function getActionDeadlines(): ?ActionDeadlines {
        return $this->actionDeadlines;
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
     * Gets the buyerClosureReason property value. This enumeration value indicates why the buyer chose to close the case. This field is only returned if the buyer closed the case, or if the case was closed on behalf of the buyer.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
     * @return string|null
    */
    public function getBuyerClosureReason(): ?string {
        return $this->buyerClosureReason;
    }

    /**
     * Gets the buyerProtectedProgramLink property value. This string value is the URL for the eBay Resolution Center.
     * @return string|null
    */
    public function getBuyerProtectedProgramLink(): ?string {
        return $this->buyerProtectedProgramLink;
    }

    /**
     * Gets the caseContentOnHold property value. This field indicates the item content related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding case content is on hold due to eBay policy violation; false otherwise.
     * @return bool|null
    */
    public function getCaseContentOnHold(): ?bool {
        return $this->caseContentOnHold;
    }

    /**
     * Gets the caseDetails property value. This type is used by the <b>caseDetails</b> container that is returned in the <b>GET /post-order/v2/casemanagement/{caseId}</b> method to provide detailed information about the case.
     * @return CaseDetails|null
    */
    public function getCaseDetails(): ?CaseDetails {
        return $this->caseDetails;
    }

    /**
     * Gets the caseHistoryDetails property value. This type is used to provide the history of events associated with an INR inquiry or a case.
     * @return ClaimHistoryResponse|null
    */
    public function getCaseHistoryDetails(): ?ClaimHistoryResponse {
        return $this->caseHistoryDetails;
    }

    /**
     * Gets the caseId property value. The unique identifier of an INR or Return case.
     * @return string|null
    */
    public function getCaseId(): ?string {
        return $this->caseId;
    }

    /**
     * Gets the caseQuantity property value. This integer value indicates the quantity of the line item purchased by the buyer.
     * @return int|null
    */
    public function getCaseQuantity(): ?int {
        return $this->caseQuantity;
    }

    /**
     * Gets the caseType property value. This enumeration type lists the types of cases that may be created by the buyer or seller.
     * @return CaseTypeEnum|null
    */
    public function getCaseType(): ?CaseTypeEnum {
        return $this->caseType;
    }

    /**
     * Gets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getClaimAmount(): ?Amount {
        return $this->claimAmount;
    }

    /**
     * Gets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getCreationDate(): ?DateTime {
        return $this->creationDate;
    }

    /**
     * Gets the escalatedBy property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @return UserPartyEnum|null
    */
    public function getEscalatedBy(): ?UserPartyEnum {
        return $this->escalatedBy;
    }

    /**
     * Gets the escalateReason property value. Indicates why the buyer or seller escalated an INR inquiry or a return request into a case.<br/><br/>For an INR inquiry that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/InquiryEscalationReasonEnum.html">InquiryEscalationReasonEnum</a> type definition. type.<br/><br/>For a return request that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/EscalateReasonEnum.html">EscalateReasonEnum</a> type definition.
     * @return string|null
    */
    public function getEscalateReason(): ?string {
        return $this->escalateReason;
    }

    /**
     * Gets the eventTicketsLink property value. This string value is the URL for the event tickets page, where electronic event tickets can be downloaded by the purchaser. This field is only returned if the case involves an event tickets order.
     * @return string|null
    */
    public function getEventTicketsLink(): ?string {
        return $this->eventTicketsLink;
    }

    /**
     * Gets the extTransactionId property value. This string value is the unique identifier of the payment transaction for the order. This field will only be returned if the payment transaction happened outside of eBay's system.
     * @return string|null
    */
    public function getExtTransactionId(): ?string {
        return $this->extTransactionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionDeadlines' => fn(ParseNode $n) => $o->setActionDeadlines($n->getObjectValue([ActionDeadlines::class, 'createFromDiscriminatorValue'])),
            'appealDetails' => fn(ParseNode $n) => $o->setAppealDetails($n->getObjectValue([AppealDetails::class, 'createFromDiscriminatorValue'])),
            'buyerClosureReason' => fn(ParseNode $n) => $o->setBuyerClosureReason($n->getStringValue()),
            'buyerProtectedProgramLink' => fn(ParseNode $n) => $o->setBuyerProtectedProgramLink($n->getStringValue()),
            'caseContentOnHold' => fn(ParseNode $n) => $o->setCaseContentOnHold($n->getBooleanValue()),
            'caseDetails' => fn(ParseNode $n) => $o->setCaseDetails($n->getObjectValue([CaseDetails::class, 'createFromDiscriminatorValue'])),
            'caseHistoryDetails' => fn(ParseNode $n) => $o->setCaseHistoryDetails($n->getObjectValue([ClaimHistoryResponse::class, 'createFromDiscriminatorValue'])),
            'caseId' => fn(ParseNode $n) => $o->setCaseId($n->getStringValue()),
            'caseQuantity' => fn(ParseNode $n) => $o->setCaseQuantity($n->getIntegerValue()),
            'caseType' => fn(ParseNode $n) => $o->setCaseType($n->getEnumValue(CaseTypeEnum::class)),
            'claimAmount' => fn(ParseNode $n) => $o->setClaimAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getDateTimeValue()),
            'escalatedBy' => fn(ParseNode $n) => $o->setEscalatedBy($n->getEnumValue(UserPartyEnum::class)),
            'escalateReason' => fn(ParseNode $n) => $o->setEscalateReason($n->getStringValue()),
            'eventTicketsLink' => fn(ParseNode $n) => $o->setEventTicketsLink($n->getStringValue()),
            'extTransactionId' => fn(ParseNode $n) => $o->setExtTransactionId($n->getStringValue()),
            'fsnadDaysToAddTrackingAfterShippingItem' => fn(ParseNode $n) => $o->setFsnadDaysToAddTrackingAfterShippingItem($n->getIntegerValue()),
            'fsnadShipToSellerByDate' => fn(ParseNode $n) => $o->setFsnadShipToSellerByDate($n->getDateTimeValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getEnumValue(UserPartyEnum::class)),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'itemOnHold' => fn(ParseNode $n) => $o->setItemOnHold($n->getBooleanValue()),
            'lastModifiedDate' => fn(ParseNode $n) => $o->setLastModifiedDate($n->getDateTimeValue()),
            'payForItemLink' => fn(ParseNode $n) => $o->setPayForItemLink($n->getStringValue()),
            'priceSignatureConfirmationAmount' => fn(ParseNode $n) => $o->setPriceSignatureConfirmationAmount($n->getStringValue()),
            'recalledItemLink' => fn(ParseNode $n) => $o->setRecalledItemLink($n->getStringValue()),
            'returnDetails' => fn(ParseNode $n) => $o->setReturnDetails($n->getObjectValue([ReturnAddress::class, 'createFromDiscriminatorValue'])),
            'returnId' => fn(ParseNode $n) => $o->setReturnId($n->getStringValue()),
            'sellerClosureReason' => fn(ParseNode $n) => $o->setSellerClosureReason($n->getStringValue()),
            'shippingFee' => fn(ParseNode $n) => $o->setShippingFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fsnadDaysToAddTrackingAfterShippingItem property value. This integer value indicates the number of days that the buyer has to provide shipment tracking information for an item that is being returned to the seller.<br/><br/> This field is only returned for Return cases, and only if the buyer is being required to provide shipment tracking information for the item being returned.
     * @return int|null
    */
    public function getFsnadDaysToAddTrackingAfterShippingItem(): ?int {
        return $this->fsnadDaysToAddTrackingAfterShippingItem;
    }

    /**
     * Gets the fsnadShipToSellerByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getFsnadShipToSellerByDate(): ?DateTime {
        return $this->fsnadShipToSellerByDate;
    }

    /**
     * Gets the initiator property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @return UserPartyEnum|null
    */
    public function getInitiator(): ?UserPartyEnum {
        return $this->initiator;
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the itemOnHold property value. This field indicates the item related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding item is on hold due to eBay policy violation; false otherwise.
     * @return bool|null
    */
    public function getItemOnHold(): ?bool {
        return $this->itemOnHold;
    }

    /**
     * Gets the lastModifiedDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getLastModifiedDate(): ?DateTime {
        return $this->lastModifiedDate;
    }

    /**
     * Gets the payForItemLink property value. This string value is the URL for the purchase item page. This field will be returned if available/applicable.
     * @return string|null
    */
    public function getPayForItemLink(): ?string {
        return $this->payForItemLink;
    }

    /**
     * Gets the priceSignatureConfirmationAmount property value. This string value indicates the dollar value threshold for the signature confirmation add-on. The buyer must purchase the signature confirmation add-on for high-value items at or above this dollar value.
     * @return string|null
    */
    public function getPriceSignatureConfirmationAmount(): ?string {
        return $this->priceSignatureConfirmationAmount;
    }

    /**
     * Gets the recalledItemLink property value. This string is the URL for the recalled item page. This field will be returned if available/applicable.
     * @return string|null
    */
    public function getRecalledItemLink(): ?string {
        return $this->recalledItemLink;
    }

    /**
     * Gets the returnDetails property value. This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
     * @return ReturnAddress|null
    */
    public function getReturnDetails(): ?ReturnAddress {
        return $this->returnDetails;
    }

    /**
     * Gets the returnId property value. The unique identifier of a return. This field is only returned if the case type is a Return.
     * @return string|null
    */
    public function getReturnId(): ?string {
        return $this->returnId;
    }

    /**
     * Gets the sellerClosureReason property value. This enumeration value indicates why the seller chose to close the case. This field is only returned if the seller closed the case, or if the case was closed on behalf of the seller.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
     * @return string|null
    */
    public function getSellerClosureReason(): ?string {
        return $this->sellerClosureReason;
    }

    /**
     * Gets the shippingFee property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getShippingFee(): ?Amount {
        return $this->shippingFee;
    }

    /**
     * Gets the status property value. This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
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
        $writer->writeObjectValue('actionDeadlines', $this->getActionDeadlines());
        $writer->writeObjectValue('appealDetails', $this->getAppealDetails());
        $writer->writeStringValue('buyerClosureReason', $this->getBuyerClosureReason());
        $writer->writeStringValue('buyerProtectedProgramLink', $this->getBuyerProtectedProgramLink());
        $writer->writeBooleanValue('caseContentOnHold', $this->getCaseContentOnHold());
        $writer->writeObjectValue('caseDetails', $this->getCaseDetails());
        $writer->writeObjectValue('caseHistoryDetails', $this->getCaseHistoryDetails());
        $writer->writeStringValue('caseId', $this->getCaseId());
        $writer->writeIntegerValue('caseQuantity', $this->getCaseQuantity());
        $writer->writeEnumValue('caseType', $this->getCaseType());
        $writer->writeObjectValue('claimAmount', $this->getClaimAmount());
        $writer->writeDateTimeValue('creationDate', $this->getCreationDate());
        $writer->writeEnumValue('escalatedBy', $this->getEscalatedBy());
        $writer->writeStringValue('escalateReason', $this->getEscalateReason());
        $writer->writeStringValue('eventTicketsLink', $this->getEventTicketsLink());
        $writer->writeStringValue('extTransactionId', $this->getExtTransactionId());
        $writer->writeIntegerValue('fsnadDaysToAddTrackingAfterShippingItem', $this->getFsnadDaysToAddTrackingAfterShippingItem());
        $writer->writeDateTimeValue('fsnadShipToSellerByDate', $this->getFsnadShipToSellerByDate());
        $writer->writeEnumValue('initiator', $this->getInitiator());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeBooleanValue('itemOnHold', $this->getItemOnHold());
        $writer->writeDateTimeValue('lastModifiedDate', $this->getLastModifiedDate());
        $writer->writeStringValue('payForItemLink', $this->getPayForItemLink());
        $writer->writeStringValue('priceSignatureConfirmationAmount', $this->getPriceSignatureConfirmationAmount());
        $writer->writeStringValue('recalledItemLink', $this->getRecalledItemLink());
        $writer->writeObjectValue('returnDetails', $this->getReturnDetails());
        $writer->writeStringValue('returnId', $this->getReturnId());
        $writer->writeStringValue('sellerClosureReason', $this->getSellerClosureReason());
        $writer->writeObjectValue('shippingFee', $this->getShippingFee());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionDeadlines property value. This type is used by the <b>actionDeadlines</b> container, which  provides the number of remaining days that a buyer or seller has before being required to take action on an INR or Return case.
     * @param ActionDeadlines|null $value Value to set for the actionDeadlines property.
    */
    public function setActionDeadlines(?ActionDeadlines $value): void {
        $this->actionDeadlines = $value;
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
     * Sets the buyerClosureReason property value. This enumeration value indicates why the buyer chose to close the case. This field is only returned if the buyer closed the case, or if the case was closed on behalf of the buyer.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
     * @param string|null $value Value to set for the buyerClosureReason property.
    */
    public function setBuyerClosureReason(?string $value): void {
        $this->buyerClosureReason = $value;
    }

    /**
     * Sets the buyerProtectedProgramLink property value. This string value is the URL for the eBay Resolution Center.
     * @param string|null $value Value to set for the buyerProtectedProgramLink property.
    */
    public function setBuyerProtectedProgramLink(?string $value): void {
        $this->buyerProtectedProgramLink = $value;
    }

    /**
     * Sets the caseContentOnHold property value. This field indicates the item content related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding case content is on hold due to eBay policy violation; false otherwise.
     * @param bool|null $value Value to set for the caseContentOnHold property.
    */
    public function setCaseContentOnHold(?bool $value): void {
        $this->caseContentOnHold = $value;
    }

    /**
     * Sets the caseDetails property value. This type is used by the <b>caseDetails</b> container that is returned in the <b>GET /post-order/v2/casemanagement/{caseId}</b> method to provide detailed information about the case.
     * @param CaseDetails|null $value Value to set for the caseDetails property.
    */
    public function setCaseDetails(?CaseDetails $value): void {
        $this->caseDetails = $value;
    }

    /**
     * Sets the caseHistoryDetails property value. This type is used to provide the history of events associated with an INR inquiry or a case.
     * @param ClaimHistoryResponse|null $value Value to set for the caseHistoryDetails property.
    */
    public function setCaseHistoryDetails(?ClaimHistoryResponse $value): void {
        $this->caseHistoryDetails = $value;
    }

    /**
     * Sets the caseId property value. The unique identifier of an INR or Return case.
     * @param string|null $value Value to set for the caseId property.
    */
    public function setCaseId(?string $value): void {
        $this->caseId = $value;
    }

    /**
     * Sets the caseQuantity property value. This integer value indicates the quantity of the line item purchased by the buyer.
     * @param int|null $value Value to set for the caseQuantity property.
    */
    public function setCaseQuantity(?int $value): void {
        $this->caseQuantity = $value;
    }

    /**
     * Sets the caseType property value. This enumeration type lists the types of cases that may be created by the buyer or seller.
     * @param CaseTypeEnum|null $value Value to set for the caseType property.
    */
    public function setCaseType(?CaseTypeEnum $value): void {
        $this->caseType = $value;
    }

    /**
     * Sets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the claimAmount property.
    */
    public function setClaimAmount(?Amount $value): void {
        $this->claimAmount = $value;
    }

    /**
     * Sets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?DateTime $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the escalatedBy property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @param UserPartyEnum|null $value Value to set for the escalatedBy property.
    */
    public function setEscalatedBy(?UserPartyEnum $value): void {
        $this->escalatedBy = $value;
    }

    /**
     * Sets the escalateReason property value. Indicates why the buyer or seller escalated an INR inquiry or a return request into a case.<br/><br/>For an INR inquiry that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/InquiryEscalationReasonEnum.html">InquiryEscalationReasonEnum</a> type definition. type.<br/><br/>For a return request that was escalated, the applicable values are defined in the <a href="/devzone/post-order/types/EscalateReasonEnum.html">EscalateReasonEnum</a> type definition.
     * @param string|null $value Value to set for the escalateReason property.
    */
    public function setEscalateReason(?string $value): void {
        $this->escalateReason = $value;
    }

    /**
     * Sets the eventTicketsLink property value. This string value is the URL for the event tickets page, where electronic event tickets can be downloaded by the purchaser. This field is only returned if the case involves an event tickets order.
     * @param string|null $value Value to set for the eventTicketsLink property.
    */
    public function setEventTicketsLink(?string $value): void {
        $this->eventTicketsLink = $value;
    }

    /**
     * Sets the extTransactionId property value. This string value is the unique identifier of the payment transaction for the order. This field will only be returned if the payment transaction happened outside of eBay's system.
     * @param string|null $value Value to set for the extTransactionId property.
    */
    public function setExtTransactionId(?string $value): void {
        $this->extTransactionId = $value;
    }

    /**
     * Sets the fsnadDaysToAddTrackingAfterShippingItem property value. This integer value indicates the number of days that the buyer has to provide shipment tracking information for an item that is being returned to the seller.<br/><br/> This field is only returned for Return cases, and only if the buyer is being required to provide shipment tracking information for the item being returned.
     * @param int|null $value Value to set for the fsnadDaysToAddTrackingAfterShippingItem property.
    */
    public function setFsnadDaysToAddTrackingAfterShippingItem(?int $value): void {
        $this->fsnadDaysToAddTrackingAfterShippingItem = $value;
    }

    /**
     * Sets the fsnadShipToSellerByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the fsnadShipToSellerByDate property.
    */
    public function setFsnadShipToSellerByDate(?DateTime $value): void {
        $this->fsnadShipToSellerByDate = $value;
    }

    /**
     * Sets the initiator property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @param UserPartyEnum|null $value Value to set for the initiator property.
    */
    public function setInitiator(?UserPartyEnum $value): void {
        $this->initiator = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the itemOnHold property value. This field indicates the item related to the case is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding item is on hold due to eBay policy violation; false otherwise.
     * @param bool|null $value Value to set for the itemOnHold property.
    */
    public function setItemOnHold(?bool $value): void {
        $this->itemOnHold = $value;
    }

    /**
     * Sets the lastModifiedDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the lastModifiedDate property.
    */
    public function setLastModifiedDate(?DateTime $value): void {
        $this->lastModifiedDate = $value;
    }

    /**
     * Sets the payForItemLink property value. This string value is the URL for the purchase item page. This field will be returned if available/applicable.
     * @param string|null $value Value to set for the payForItemLink property.
    */
    public function setPayForItemLink(?string $value): void {
        $this->payForItemLink = $value;
    }

    /**
     * Sets the priceSignatureConfirmationAmount property value. This string value indicates the dollar value threshold for the signature confirmation add-on. The buyer must purchase the signature confirmation add-on for high-value items at or above this dollar value.
     * @param string|null $value Value to set for the priceSignatureConfirmationAmount property.
    */
    public function setPriceSignatureConfirmationAmount(?string $value): void {
        $this->priceSignatureConfirmationAmount = $value;
    }

    /**
     * Sets the recalledItemLink property value. This string is the URL for the recalled item page. This field will be returned if available/applicable.
     * @param string|null $value Value to set for the recalledItemLink property.
    */
    public function setRecalledItemLink(?string $value): void {
        $this->recalledItemLink = $value;
    }

    /**
     * Sets the returnDetails property value. This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
     * @param ReturnAddress|null $value Value to set for the returnDetails property.
    */
    public function setReturnDetails(?ReturnAddress $value): void {
        $this->returnDetails = $value;
    }

    /**
     * Sets the returnId property value. The unique identifier of a return. This field is only returned if the case type is a Return.
     * @param string|null $value Value to set for the returnId property.
    */
    public function setReturnId(?string $value): void {
        $this->returnId = $value;
    }

    /**
     * Sets the sellerClosureReason property value. This enumeration value indicates why the seller chose to close the case. This field is only returned if the seller closed the case, or if the case was closed on behalf of the seller.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseCloseReasonEnum.html">CaseCloseReasonEnum</a> type definition.
     * @param string|null $value Value to set for the sellerClosureReason property.
    */
    public function setSellerClosureReason(?string $value): void {
        $this->sellerClosureReason = $value;
    }

    /**
     * Sets the shippingFee property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the shippingFee property.
    */
    public function setShippingFee(?Amount $value): void {
        $this->shippingFee = $value;
    }

    /**
     * Sets the status property value. This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

}
