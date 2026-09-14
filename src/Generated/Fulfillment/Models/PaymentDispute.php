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
 * This type is used by the base response of the <strong>getPaymentDispute</strong> method. The <strong>getPaymentDispute</strong> method retrieves detailed information on a specific payment dispute.
*/
class PaymentDispute implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SimpleAmount|null $amount This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace.
    */
    private ?SimpleAmount $amount = null;
    
    /**
     * @var array<SellerDecisionEnum>|null $availableChoices The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead, the <strong>sellerResponse</strong> field will show the decision that the seller made.
    */
    private ?array $availableChoices = null;
    
    /**
     * @var InfoFromBuyer|null $buyerProvided This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about the return.
    */
    private ?InfoFromBuyer $buyerProvided = null;
    
    /**
     * @var string|null $buyerUsername This is the eBay user ID of the buyer that initiated the payment dispute.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
    */
    private ?string $buyerUsername = null;
    
    /**
     * @var string|null $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $closedDate = null;
    
    /**
     * @var array<DisputeEvidence>|null $evidence This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an item is as described, or financial documentation/invoice.<br><br>This container is only returned if the seller has provided at least one document used as evidence against the payment dispute.
    */
    private ?array $evidence = null;
    
    /**
     * @var array<EvidenceRequest>|null $evidenceRequests This container is returned if one or more evidence documents are being requested from the seller.
    */
    private ?array $evidenceRequests = null;
    
    /**
     * @var array<OrderLineItems>|null $lineItems This array is used to identify one or more order line items associated with the payment dispute. There will always be at least one <strong>itemId</strong>/<strong>lineItemId</strong> pair returned in this array.
    */
    private ?array $lineItems = null;
    
    /**
     * @var array<MonetaryTransaction>|null $monetaryTransactions This array provide details about one or more monetary transactions that occur as part of a payment dispute. This array is only returned once one or more monetary transacations occur with a payment dispute.
    */
    private ?array $monetaryTransactions = null;
    
    /**
     * @var string|null $note This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br>This field is limited to 1000 characters.
    */
    private ?string $note = null;
    
    /**
     * @var string|null $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $openDate = null;
    
    /**
     * @var string|null $orderId This is the unique identifier of the order involved in the payment dispute.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $paymentDisputeId This is the unique identifier of the payment dispute. This is the same identifier that is passed in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay system.
    */
    private ?string $paymentDisputeId = null;
    
    /**
     * @var DisputeStateEnum|null $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response.
    */
    private ?DisputeStateEnum $paymentDisputeStatus = null;
    
    /**
     * @var DisputeReasonEnum|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute.
    */
    private ?DisputeReasonEnum $reason = null;
    
    /**
     * @var PaymentDisputeOutcomeDetail|null $resolution This container gives details about a payment dispute that has been resolved. This container is only returned for resolved/closed payment disputes.
    */
    private ?PaymentDisputeOutcomeDetail $resolution = null;
    
    /**
     * @var string|null $respondByDate The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that currently require action by the seller, that same seller should look at the <strong>availableChoices</strong> array to see the available actions.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $respondByDate = null;
    
    /**
     * @var ReturnAddress|null $returnAddress This container gives the address where the order will be returned to. This container is returned if the seller is accepting the payment dispute and will issue a refund to the buyer once the item is returned to this address.
    */
    private ?ReturnAddress $returnAddress = null;
    
    /**
     * @var int|null $revision This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
    */
    private ?int $revision = null;
    
    /**
     * @var SellerResponseEnum|null $sellerResponse The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment dispute and agreeing to issue a refund as long as the buyer returns the item, or contesting the payment dispute. This field is returned as soon as the seller makes an initial decision on the payment dispute.
    */
    private ?SellerResponseEnum $sellerResponse = null;
    
    /**
     * Instantiates a new PaymentDispute and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDispute
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDispute {
        return new PaymentDispute();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace.
     * @return SimpleAmount|null
    */
    public function getAmount(): ?SimpleAmount {
        return $this->amount;
    }

    /**
     * Gets the availableChoices property value. The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead, the <strong>sellerResponse</strong> field will show the decision that the seller made.
     * @return array<SellerDecisionEnum>|null
    */
    public function getAvailableChoices(): ?array {
        return $this->availableChoices;
    }

    /**
     * Gets the buyerProvided property value. This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about the return.
     * @return InfoFromBuyer|null
    */
    public function getBuyerProvided(): ?InfoFromBuyer {
        return $this->buyerProvided;
    }

    /**
     * Gets the buyerUsername property value. This is the eBay user ID of the buyer that initiated the payment dispute.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @return string|null
    */
    public function getBuyerUsername(): ?string {
        return $this->buyerUsername;
    }

    /**
     * Gets the closedDate property value. The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getClosedDate(): ?string {
        return $this->closedDate;
    }

    /**
     * Gets the evidence property value. This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an item is as described, or financial documentation/invoice.<br><br>This container is only returned if the seller has provided at least one document used as evidence against the payment dispute.
     * @return array<DisputeEvidence>|null
    */
    public function getEvidence(): ?array {
        return $this->evidence;
    }

    /**
     * Gets the evidenceRequests property value. This container is returned if one or more evidence documents are being requested from the seller.
     * @return array<EvidenceRequest>|null
    */
    public function getEvidenceRequests(): ?array {
        return $this->evidenceRequests;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'availableChoices' => fn(ParseNode $n) => $o->setAvailableChoices($n->getCollectionOfEnumValues(SellerDecisionEnum::class)),
            'buyerProvided' => fn(ParseNode $n) => $o->setBuyerProvided($n->getObjectValue([InfoFromBuyer::class, 'createFromDiscriminatorValue'])),
            'buyerUsername' => fn(ParseNode $n) => $o->setBuyerUsername($n->getStringValue()),
            'closedDate' => fn(ParseNode $n) => $o->setClosedDate($n->getStringValue()),
            'evidence' => fn(ParseNode $n) => $o->setEvidence($n->getCollectionOfObjectValues([DisputeEvidence::class, 'createFromDiscriminatorValue'])),
            'evidenceRequests' => fn(ParseNode $n) => $o->setEvidenceRequests($n->getCollectionOfObjectValues([EvidenceRequest::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([OrderLineItems::class, 'createFromDiscriminatorValue'])),
            'monetaryTransactions' => fn(ParseNode $n) => $o->setMonetaryTransactions($n->getCollectionOfObjectValues([MonetaryTransaction::class, 'createFromDiscriminatorValue'])),
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'openDate' => fn(ParseNode $n) => $o->setOpenDate($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'paymentDisputeId' => fn(ParseNode $n) => $o->setPaymentDisputeId($n->getStringValue()),
            'paymentDisputeStatus' => fn(ParseNode $n) => $o->setPaymentDisputeStatus($n->getEnumValue(DisputeStateEnum::class)),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(DisputeReasonEnum::class)),
            'resolution' => fn(ParseNode $n) => $o->setResolution($n->getObjectValue([PaymentDisputeOutcomeDetail::class, 'createFromDiscriminatorValue'])),
            'respondByDate' => fn(ParseNode $n) => $o->setRespondByDate($n->getStringValue()),
            'returnAddress' => fn(ParseNode $n) => $o->setReturnAddress($n->getObjectValue([ReturnAddress::class, 'createFromDiscriminatorValue'])),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getIntegerValue()),
            'sellerResponse' => fn(ParseNode $n) => $o->setSellerResponse($n->getEnumValue(SellerResponseEnum::class)),
        ];
    }

    /**
     * Gets the lineItems property value. This array is used to identify one or more order line items associated with the payment dispute. There will always be at least one <strong>itemId</strong>/<strong>lineItemId</strong> pair returned in this array.
     * @return array<OrderLineItems>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the monetaryTransactions property value. This array provide details about one or more monetary transactions that occur as part of a payment dispute. This array is only returned once one or more monetary transacations occur with a payment dispute.
     * @return array<MonetaryTransaction>|null
    */
    public function getMonetaryTransactions(): ?array {
        return $this->monetaryTransactions;
    }

    /**
     * Gets the note property value. This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br>This field is limited to 1000 characters.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the openDate property value. The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getOpenDate(): ?string {
        return $this->openDate;
    }

    /**
     * Gets the orderId property value. This is the unique identifier of the order involved in the payment dispute.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the paymentDisputeId property value. This is the unique identifier of the payment dispute. This is the same identifier that is passed in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay system.
     * @return string|null
    */
    public function getPaymentDisputeId(): ?string {
        return $this->paymentDisputeId;
    }

    /**
     * Gets the paymentDisputeStatus property value. The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response.
     * @return DisputeStateEnum|null
    */
    public function getPaymentDisputeStatus(): ?DisputeStateEnum {
        return $this->paymentDisputeStatus;
    }

    /**
     * Gets the reason property value. The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute.
     * @return DisputeReasonEnum|null
    */
    public function getReason(): ?DisputeReasonEnum {
        return $this->reason;
    }

    /**
     * Gets the resolution property value. This container gives details about a payment dispute that has been resolved. This container is only returned for resolved/closed payment disputes.
     * @return PaymentDisputeOutcomeDetail|null
    */
    public function getResolution(): ?PaymentDisputeOutcomeDetail {
        return $this->resolution;
    }

    /**
     * Gets the respondByDate property value. The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that currently require action by the seller, that same seller should look at the <strong>availableChoices</strong> array to see the available actions.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getRespondByDate(): ?string {
        return $this->respondByDate;
    }

    /**
     * Gets the returnAddress property value. This container gives the address where the order will be returned to. This container is returned if the seller is accepting the payment dispute and will issue a refund to the buyer once the item is returned to this address.
     * @return ReturnAddress|null
    */
    public function getReturnAddress(): ?ReturnAddress {
        return $this->returnAddress;
    }

    /**
     * Gets the revision property value. This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
     * @return int|null
    */
    public function getRevision(): ?int {
        return $this->revision;
    }

    /**
     * Gets the sellerResponse property value. The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment dispute and agreeing to issue a refund as long as the buyer returns the item, or contesting the payment dispute. This field is returned as soon as the seller makes an initial decision on the payment dispute.
     * @return SellerResponseEnum|null
    */
    public function getSellerResponse(): ?SellerResponseEnum {
        return $this->sellerResponse;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeCollectionOfEnumValues('availableChoices', $this->getAvailableChoices());
        $writer->writeObjectValue('buyerProvided', $this->getBuyerProvided());
        $writer->writeStringValue('buyerUsername', $this->getBuyerUsername());
        $writer->writeStringValue('closedDate', $this->getClosedDate());
        $writer->writeCollectionOfObjectValues('evidence', $this->getEvidence());
        $writer->writeCollectionOfObjectValues('evidenceRequests', $this->getEvidenceRequests());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeCollectionOfObjectValues('monetaryTransactions', $this->getMonetaryTransactions());
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeStringValue('openDate', $this->getOpenDate());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('paymentDisputeId', $this->getPaymentDisputeId());
        $writer->writeEnumValue('paymentDisputeStatus', $this->getPaymentDisputeStatus());
        $writer->writeEnumValue('reason', $this->getReason());
        $writer->writeObjectValue('resolution', $this->getResolution());
        $writer->writeStringValue('respondByDate', $this->getRespondByDate());
        $writer->writeObjectValue('returnAddress', $this->getReturnAddress());
        $writer->writeIntegerValue('revision', $this->getRevision());
        $writer->writeEnumValue('sellerResponse', $this->getSellerResponse());
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
     * Sets the amount property value. This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace.
     * @param SimpleAmount|null $value Value to set for the amount property.
    */
    public function setAmount(?SimpleAmount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the availableChoices property value. The value(s) returned in this array indicate the choices that the seller has when responding to the payment dispute. Once the seller has responded to the payment dispute, this field will no longer be shown, and instead, the <strong>sellerResponse</strong> field will show the decision that the seller made.
     * @param array<SellerDecisionEnum>|null $value Value to set for the availableChoices property.
    */
    public function setAvailableChoices(?array $value): void {
        $this->availableChoices = $value;
    }

    /**
     * Sets the buyerProvided property value. This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about the return.
     * @param InfoFromBuyer|null $value Value to set for the buyerProvided property.
    */
    public function setBuyerProvided(?InfoFromBuyer $value): void {
        $this->buyerProvided = $value;
    }

    /**
     * Sets the buyerUsername property value. This is the eBay user ID of the buyer that initiated the payment dispute.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @param string|null $value Value to set for the buyerUsername property.
    */
    public function setBuyerUsername(?string $value): void {
        $this->buyerUsername = $value;
    }

    /**
     * Sets the closedDate property value. The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the closedDate property.
    */
    public function setClosedDate(?string $value): void {
        $this->closedDate = $value;
    }

    /**
     * Sets the evidence property value. This container shows any evidence that has been provided by the seller to contest the payment dispute. Evidence may include shipment tracking information, proof of authentication documentation, image(s) to proof that an item is as described, or financial documentation/invoice.<br><br>This container is only returned if the seller has provided at least one document used as evidence against the payment dispute.
     * @param array<DisputeEvidence>|null $value Value to set for the evidence property.
    */
    public function setEvidence(?array $value): void {
        $this->evidence = $value;
    }

    /**
     * Sets the evidenceRequests property value. This container is returned if one or more evidence documents are being requested from the seller.
     * @param array<EvidenceRequest>|null $value Value to set for the evidenceRequests property.
    */
    public function setEvidenceRequests(?array $value): void {
        $this->evidenceRequests = $value;
    }

    /**
     * Sets the lineItems property value. This array is used to identify one or more order line items associated with the payment dispute. There will always be at least one <strong>itemId</strong>/<strong>lineItemId</strong> pair returned in this array.
     * @param array<OrderLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the monetaryTransactions property value. This array provide details about one or more monetary transactions that occur as part of a payment dispute. This array is only returned once one or more monetary transacations occur with a payment dispute.
     * @param array<MonetaryTransaction>|null $value Value to set for the monetaryTransactions property.
    */
    public function setMonetaryTransactions(?array $value): void {
        $this->monetaryTransactions = $value;
    }

    /**
     * Sets the note property value. This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br>This field is limited to 1000 characters.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the openDate property value. The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the openDate property.
    */
    public function setOpenDate(?string $value): void {
        $this->openDate = $value;
    }

    /**
     * Sets the orderId property value. This is the unique identifier of the order involved in the payment dispute.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the paymentDisputeId property value. This is the unique identifier of the payment dispute. This is the same identifier that is passed in to the call URI. This identifier is automatically created by eBay once the payment dispute comes into the eBay system.
     * @param string|null $value Value to set for the paymentDisputeId property.
    */
    public function setPaymentDisputeId(?string $value): void {
        $this->paymentDisputeId = $value;
    }

    /**
     * Sets the paymentDisputeStatus property value. The enumeration value in this field gives the current status of the payment dispute. The status of a payment dispute partially determines other fields that are returned in the response.
     * @param DisputeStateEnum|null $value Value to set for the paymentDisputeStatus property.
    */
    public function setPaymentDisputeStatus(?DisputeStateEnum $value): void {
        $this->paymentDisputeStatus = $value;
    }

    /**
     * Sets the reason property value. The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute.
     * @param DisputeReasonEnum|null $value Value to set for the reason property.
    */
    public function setReason(?DisputeReasonEnum $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the resolution property value. This container gives details about a payment dispute that has been resolved. This container is only returned for resolved/closed payment disputes.
     * @param PaymentDisputeOutcomeDetail|null $value Value to set for the resolution property.
    */
    public function setResolution(?PaymentDisputeOutcomeDetail $value): void {
        $this->resolution = $value;
    }

    /**
     * Sets the respondByDate property value. The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that currently require action by the seller, that same seller should look at the <strong>availableChoices</strong> array to see the available actions.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the respondByDate property.
    */
    public function setRespondByDate(?string $value): void {
        $this->respondByDate = $value;
    }

    /**
     * Sets the returnAddress property value. This container gives the address where the order will be returned to. This container is returned if the seller is accepting the payment dispute and will issue a refund to the buyer once the item is returned to this address.
     * @param ReturnAddress|null $value Value to set for the returnAddress property.
    */
    public function setReturnAddress(?ReturnAddress $value): void {
        $this->returnAddress = $value;
    }

    /**
     * Sets the revision property value. This integer value indicates the revision number of the payment dispute. Each time an action is taken against a payment dispute, this integer value increases by 1.
     * @param int|null $value Value to set for the revision property.
    */
    public function setRevision(?int $value): void {
        $this->revision = $value;
    }

    /**
     * Sets the sellerResponse property value. The enumeration value returned in this field indicates how the seller has responded to the payment dispute. The seller has the option of accepting the payment dispute and agreeing to issue a refund, accepting the payment dispute and agreeing to issue a refund as long as the buyer returns the item, or contesting the payment dispute. This field is returned as soon as the seller makes an initial decision on the payment dispute.
     * @param SellerResponseEnum|null $value Value to set for the sellerResponse property.
    */
    public function setSellerResponse(?SellerResponseEnum $value): void {
        $this->sellerResponse = $value;
    }

}
