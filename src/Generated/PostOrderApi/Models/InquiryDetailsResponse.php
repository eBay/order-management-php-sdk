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
 * The base response type for the <b>GET /post-order/v2/inquiry/{inquiryId}</b> method. This type provides full details on an INR inquiry.
*/
class InquiryDetailsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $claimAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $claimAmount = null;
    
    /**
     * @var string|null $creationReason The enumeration value in this field indicates why the buyer created an INR inquiry for the line item.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/INRCreationReasonEnum.html">INRCreationReasonEnum</a> type definition.
    */
    private ?string $creationReason = null;
    
    /**
     * @var string|null $extTransactionId This string value is the unique identifier of the payment transaction for the order. This field will only be returned if the payment transaction happened outside of eBay's system.
    */
    private ?string $extTransactionId = null;
    
    /**
     * @var UserPartyEnum|null $initiator This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
    */
    private ?UserPartyEnum $initiator = null;
    
    /**
     * @var DateTime|null $inquiryClosureDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $inquiryClosureDate = null;
    
    /**
     * @var bool|null $inquiryContentOnHold This field indicates the item content related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding inquiry content is on hold due to eBay policy violation; false otherwise.
    */
    private ?bool $inquiryContentOnHold = null;
    
    /**
     * @var InquiryDetails|null $inquiryDetails Type used by the <b>inquiryDetails</b> container of the <b>GET /post-order/v2/inquiry/{inquiryId}</b> response. The <b>inquiryDetails</b> container provides details about a specific INR inquiry that is identified through a path parameter in the request.
    */
    private ?InquiryDetails $inquiryDetails = null;
    
    /**
     * @var ClaimHistoryResponse|null $inquiryHistoryDetails This type is used to provide the history of events associated with an INR inquiry or a case.
    */
    private ?ClaimHistoryResponse $inquiryHistoryDetails = null;
    
    /**
     * @var string|null $inquiryId The unique identifier of the INR inquiry for which details have been retrieved. All information returned in the response is relevant to this specific INR inquiry.
    */
    private ?string $inquiryId = null;
    
    /**
     * @var int|null $inquiryQuantity This integer is the quantity of the line item purchased by the buyer. This value is the same value passed into the <b>claimQuantity</b> field when the INR inquiry was created. If the <b>claimQuantity</b> field was omitted when the INR inquiry was created, this value defaults to <code>1</code>. 
    */
    private ?int $inquiryQuantity = null;
    
    /**
     * @var ItemDetails|null $itemDetails This type provides information about the line item associated with the INR inquiry.
    */
    private ?ItemDetails $itemDetails = null;
    
    /**
     * @var string|null $itemId The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the INR inquiry.
    */
    private ?string $itemId = null;
    
    /**
     * @var ResolutionEstimate|null $resolutionEstimate This type defines the estimated resolution date for the inquiry.
    */
    private ?ResolutionEstimate $resolutionEstimate = null;
    
    /**
     * @var ReturnAddress|null $returnDetails This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
    */
    private ?ReturnAddress $returnDetails = null;
    
    /**
     * @var DateTime|null $sellerMakeItRightByDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $sellerMakeItRightByDate = null;
    
    /**
     * @var Amount|null $shippingCost This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var string|null $state This enumeration value indicates the current state of the INR inquiry. <br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStateEnum.html">InquiryStateEnum</a> type definition.
    */
    private ?string $state = null;
    
    /**
     * @var string|null $status This enumeration value indicates the current status of the INR inquiry.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStatusEnum.html">InquiryStatusEnum</a> type definition.
    */
    private ?string $status = null;
    
    /**
     * @var string|null $transactionId The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the INR inquiry.
    */
    private ?string $transactionId = null;
    
    /**
     * @var string|null $viewPPTrasanctionUrl <b>THIS FIELD IS DEPRECATED</b>.
    */
    private ?string $viewPPTrasanctionUrl = null;
    
    /**
     * Instantiates a new InquiryDetailsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InquiryDetailsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InquiryDetailsResponse {
        return new InquiryDetailsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getClaimAmount(): ?Amount {
        return $this->claimAmount;
    }

    /**
     * Gets the creationReason property value. The enumeration value in this field indicates why the buyer created an INR inquiry for the line item.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/INRCreationReasonEnum.html">INRCreationReasonEnum</a> type definition.
     * @return string|null
    */
    public function getCreationReason(): ?string {
        return $this->creationReason;
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
            'claimAmount' => fn(ParseNode $n) => $o->setClaimAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'creationReason' => fn(ParseNode $n) => $o->setCreationReason($n->getStringValue()),
            'extTransactionId' => fn(ParseNode $n) => $o->setExtTransactionId($n->getStringValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getEnumValue(UserPartyEnum::class)),
            'inquiryClosureDate' => fn(ParseNode $n) => $o->setInquiryClosureDate($n->getDateTimeValue()),
            'inquiryContentOnHold' => fn(ParseNode $n) => $o->setInquiryContentOnHold($n->getBooleanValue()),
            'inquiryDetails' => fn(ParseNode $n) => $o->setInquiryDetails($n->getObjectValue([InquiryDetails::class, 'createFromDiscriminatorValue'])),
            'inquiryHistoryDetails' => fn(ParseNode $n) => $o->setInquiryHistoryDetails($n->getObjectValue([ClaimHistoryResponse::class, 'createFromDiscriminatorValue'])),
            'inquiryId' => fn(ParseNode $n) => $o->setInquiryId($n->getStringValue()),
            'inquiryQuantity' => fn(ParseNode $n) => $o->setInquiryQuantity($n->getIntegerValue()),
            'itemDetails' => fn(ParseNode $n) => $o->setItemDetails($n->getObjectValue([ItemDetails::class, 'createFromDiscriminatorValue'])),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'resolutionEstimate' => fn(ParseNode $n) => $o->setResolutionEstimate($n->getObjectValue([ResolutionEstimate::class, 'createFromDiscriminatorValue'])),
            'returnDetails' => fn(ParseNode $n) => $o->setReturnDetails($n->getObjectValue([ReturnAddress::class, 'createFromDiscriminatorValue'])),
            'sellerMakeItRightByDate' => fn(ParseNode $n) => $o->setSellerMakeItRightByDate($n->getDateTimeValue()),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getStringValue()),
            'viewPPTrasanctionUrl' => fn(ParseNode $n) => $o->setViewPPTrasanctionUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the initiator property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @return UserPartyEnum|null
    */
    public function getInitiator(): ?UserPartyEnum {
        return $this->initiator;
    }

    /**
     * Gets the inquiryClosureDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getInquiryClosureDate(): ?DateTime {
        return $this->inquiryClosureDate;
    }

    /**
     * Gets the inquiryContentOnHold property value. This field indicates the item content related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding inquiry content is on hold due to eBay policy violation; false otherwise.
     * @return bool|null
    */
    public function getInquiryContentOnHold(): ?bool {
        return $this->inquiryContentOnHold;
    }

    /**
     * Gets the inquiryDetails property value. Type used by the <b>inquiryDetails</b> container of the <b>GET /post-order/v2/inquiry/{inquiryId}</b> response. The <b>inquiryDetails</b> container provides details about a specific INR inquiry that is identified through a path parameter in the request.
     * @return InquiryDetails|null
    */
    public function getInquiryDetails(): ?InquiryDetails {
        return $this->inquiryDetails;
    }

    /**
     * Gets the inquiryHistoryDetails property value. This type is used to provide the history of events associated with an INR inquiry or a case.
     * @return ClaimHistoryResponse|null
    */
    public function getInquiryHistoryDetails(): ?ClaimHistoryResponse {
        return $this->inquiryHistoryDetails;
    }

    /**
     * Gets the inquiryId property value. The unique identifier of the INR inquiry for which details have been retrieved. All information returned in the response is relevant to this specific INR inquiry.
     * @return string|null
    */
    public function getInquiryId(): ?string {
        return $this->inquiryId;
    }

    /**
     * Gets the inquiryQuantity property value. This integer is the quantity of the line item purchased by the buyer. This value is the same value passed into the <b>claimQuantity</b> field when the INR inquiry was created. If the <b>claimQuantity</b> field was omitted when the INR inquiry was created, this value defaults to <code>1</code>. 
     * @return int|null
    */
    public function getInquiryQuantity(): ?int {
        return $this->inquiryQuantity;
    }

    /**
     * Gets the itemDetails property value. This type provides information about the line item associated with the INR inquiry.
     * @return ItemDetails|null
    */
    public function getItemDetails(): ?ItemDetails {
        return $this->itemDetails;
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the INR inquiry.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the resolutionEstimate property value. This type defines the estimated resolution date for the inquiry.
     * @return ResolutionEstimate|null
    */
    public function getResolutionEstimate(): ?ResolutionEstimate {
        return $this->resolutionEstimate;
    }

    /**
     * Gets the returnDetails property value. This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
     * @return ReturnAddress|null
    */
    public function getReturnDetails(): ?ReturnAddress {
        return $this->returnDetails;
    }

    /**
     * Gets the sellerMakeItRightByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getSellerMakeItRightByDate(): ?DateTime {
        return $this->sellerMakeItRightByDate;
    }

    /**
     * Gets the shippingCost property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the state property value. This enumeration value indicates the current state of the INR inquiry. <br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStateEnum.html">InquiryStateEnum</a> type definition.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the status property value. This enumeration value indicates the current status of the INR inquiry.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStatusEnum.html">InquiryStatusEnum</a> type definition.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the INR inquiry.
     * @return string|null
    */
    public function getTransactionId(): ?string {
        return $this->transactionId;
    }

    /**
     * Gets the viewPPTrasanctionUrl property value. <b>THIS FIELD IS DEPRECATED</b>.
     * @return string|null
    */
    public function getViewPPTrasanctionUrl(): ?string {
        return $this->viewPPTrasanctionUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('claimAmount', $this->getClaimAmount());
        $writer->writeStringValue('creationReason', $this->getCreationReason());
        $writer->writeStringValue('extTransactionId', $this->getExtTransactionId());
        $writer->writeEnumValue('initiator', $this->getInitiator());
        $writer->writeDateTimeValue('inquiryClosureDate', $this->getInquiryClosureDate());
        $writer->writeBooleanValue('inquiryContentOnHold', $this->getInquiryContentOnHold());
        $writer->writeObjectValue('inquiryDetails', $this->getInquiryDetails());
        $writer->writeObjectValue('inquiryHistoryDetails', $this->getInquiryHistoryDetails());
        $writer->writeStringValue('inquiryId', $this->getInquiryId());
        $writer->writeIntegerValue('inquiryQuantity', $this->getInquiryQuantity());
        $writer->writeObjectValue('itemDetails', $this->getItemDetails());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeObjectValue('resolutionEstimate', $this->getResolutionEstimate());
        $writer->writeObjectValue('returnDetails', $this->getReturnDetails());
        $writer->writeDateTimeValue('sellerMakeItRightByDate', $this->getSellerMakeItRightByDate());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('transactionId', $this->getTransactionId());
        $writer->writeStringValue('viewPPTrasanctionUrl', $this->getViewPPTrasanctionUrl());
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
     * Sets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the claimAmount property.
    */
    public function setClaimAmount(?Amount $value): void {
        $this->claimAmount = $value;
    }

    /**
     * Sets the creationReason property value. The enumeration value in this field indicates why the buyer created an INR inquiry for the line item.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/INRCreationReasonEnum.html">INRCreationReasonEnum</a> type definition.
     * @param string|null $value Value to set for the creationReason property.
    */
    public function setCreationReason(?string $value): void {
        $this->creationReason = $value;
    }

    /**
     * Sets the extTransactionId property value. This string value is the unique identifier of the payment transaction for the order. This field will only be returned if the payment transaction happened outside of eBay's system.
     * @param string|null $value Value to set for the extTransactionId property.
    */
    public function setExtTransactionId(?string $value): void {
        $this->extTransactionId = $value;
    }

    /**
     * Sets the initiator property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @param UserPartyEnum|null $value Value to set for the initiator property.
    */
    public function setInitiator(?UserPartyEnum $value): void {
        $this->initiator = $value;
    }

    /**
     * Sets the inquiryClosureDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the inquiryClosureDate property.
    */
    public function setInquiryClosureDate(?DateTime $value): void {
        $this->inquiryClosureDate = $value;
    }

    /**
     * Sets the inquiryContentOnHold property value. This field indicates the item content related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the corresponding inquiry content is on hold due to eBay policy violation; false otherwise.
     * @param bool|null $value Value to set for the inquiryContentOnHold property.
    */
    public function setInquiryContentOnHold(?bool $value): void {
        $this->inquiryContentOnHold = $value;
    }

    /**
     * Sets the inquiryDetails property value. Type used by the <b>inquiryDetails</b> container of the <b>GET /post-order/v2/inquiry/{inquiryId}</b> response. The <b>inquiryDetails</b> container provides details about a specific INR inquiry that is identified through a path parameter in the request.
     * @param InquiryDetails|null $value Value to set for the inquiryDetails property.
    */
    public function setInquiryDetails(?InquiryDetails $value): void {
        $this->inquiryDetails = $value;
    }

    /**
     * Sets the inquiryHistoryDetails property value. This type is used to provide the history of events associated with an INR inquiry or a case.
     * @param ClaimHistoryResponse|null $value Value to set for the inquiryHistoryDetails property.
    */
    public function setInquiryHistoryDetails(?ClaimHistoryResponse $value): void {
        $this->inquiryHistoryDetails = $value;
    }

    /**
     * Sets the inquiryId property value. The unique identifier of the INR inquiry for which details have been retrieved. All information returned in the response is relevant to this specific INR inquiry.
     * @param string|null $value Value to set for the inquiryId property.
    */
    public function setInquiryId(?string $value): void {
        $this->inquiryId = $value;
    }

    /**
     * Sets the inquiryQuantity property value. This integer is the quantity of the line item purchased by the buyer. This value is the same value passed into the <b>claimQuantity</b> field when the INR inquiry was created. If the <b>claimQuantity</b> field was omitted when the INR inquiry was created, this value defaults to <code>1</code>. 
     * @param int|null $value Value to set for the inquiryQuantity property.
    */
    public function setInquiryQuantity(?int $value): void {
        $this->inquiryQuantity = $value;
    }

    /**
     * Sets the itemDetails property value. This type provides information about the line item associated with the INR inquiry.
     * @param ItemDetails|null $value Value to set for the itemDetails property.
    */
    public function setItemDetails(?ItemDetails $value): void {
        $this->itemDetails = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the INR inquiry.
     * @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the resolutionEstimate property value. This type defines the estimated resolution date for the inquiry.
     * @param ResolutionEstimate|null $value Value to set for the resolutionEstimate property.
    */
    public function setResolutionEstimate(?ResolutionEstimate $value): void {
        $this->resolutionEstimate = $value;
    }

    /**
     * Sets the returnDetails property value. This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
     * @param ReturnAddress|null $value Value to set for the returnDetails property.
    */
    public function setReturnDetails(?ReturnAddress $value): void {
        $this->returnDetails = $value;
    }

    /**
     * Sets the sellerMakeItRightByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the sellerMakeItRightByDate property.
    */
    public function setSellerMakeItRightByDate(?DateTime $value): void {
        $this->sellerMakeItRightByDate = $value;
    }

    /**
     * Sets the shippingCost property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the state property value. This enumeration value indicates the current state of the INR inquiry. <br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStateEnum.html">InquiryStateEnum</a> type definition.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->state = $value;
    }

    /**
     * Sets the status property value. This enumeration value indicates the current status of the INR inquiry.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/InquiryStatusEnum.html">InquiryStatusEnum</a> type definition.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the INR inquiry.
     * @param string|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?string $value): void {
        $this->transactionId = $value;
    }

    /**
     * Sets the viewPPTrasanctionUrl property value. <b>THIS FIELD IS DEPRECATED</b>.
     * @param string|null $value Value to set for the viewPPTrasanctionUrl property.
    */
    public function setViewPPTrasanctionUrl(?string $value): void {
        $this->viewPPTrasanctionUrl = $value;
    }

}
