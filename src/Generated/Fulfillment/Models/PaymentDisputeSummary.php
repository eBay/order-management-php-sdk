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
 * This type is used by each payment dispute that is returned with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method.
*/
class PaymentDisputeSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var SimpleAmount|null $amount This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace. This container is returned for all payment disputes returned in the response.
    */
    private ?SimpleAmount $amount = null;
    
    /**
     * @var string|null $buyerUsername This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
    */
    private ?string $buyerUsername = null;
    
    /**
     * @var string|null $closedDate The timestamp in this field shows the date/time when the payment dispute was closed, so this field is only returned for payment disputes in the <code>CLOSED</code> state.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $closedDate = null;
    
    /**
     * @var string|null $openDate The timestamp in this field shows the date/time when the payment dispute was opened. This field is returned for payment disputes in all states.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $openDate = null;
    
    /**
     * @var string|null $orderId This is the unique identifier of the order involved in the payment dispute.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $paymentDisputeId This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the <strong>getPaymentDispute</strong> call URI to retrieve a specific payment dispute. The <strong>getPaymentDispute</strong> method returns more details about a payment dispute than the <strong>getPaymentDisputeSummaries</strong> method.
    */
    private ?string $paymentDisputeId = null;
    
    /**
     * @var DisputeStateEnum|null $paymentDisputeStatus The enumeration value in this field gives the current status of the payment dispute.
    */
    private ?DisputeStateEnum $paymentDisputeStatus = null;
    
    /**
     * @var DisputeReasonEnum|null $reason The enumeration value in this field gives the reason why the buyer initiated the payment dispute. See <strong>DisputeReasonEnum</strong> type for a description of the supported reasons that buyers can give for initiating a payment dispute.
    */
    private ?DisputeReasonEnum $reason = null;
    
    /**
     * @var string|null $respondByDate The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that require action by the seller, that same seller must call <strong>getPaymentDispute</strong> to see the next action(s) that they can take against the payment dispute.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $respondByDate = null;
    
    /**
     * Instantiates a new PaymentDisputeSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDisputeSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDisputeSummary {
        return new PaymentDisputeSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace. This container is returned for all payment disputes returned in the response.
     * @return SimpleAmount|null
    */
    public function getAmount(): ?SimpleAmount {
        return $this->amount;
    }

    /**
     * Gets the buyerUsername property value. This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([SimpleAmount::class, 'createFromDiscriminatorValue'])),
            'buyerUsername' => fn(ParseNode $n) => $o->setBuyerUsername($n->getStringValue()),
            'closedDate' => fn(ParseNode $n) => $o->setClosedDate($n->getStringValue()),
            'openDate' => fn(ParseNode $n) => $o->setOpenDate($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'paymentDisputeId' => fn(ParseNode $n) => $o->setPaymentDisputeId($n->getStringValue()),
            'paymentDisputeStatus' => fn(ParseNode $n) => $o->setPaymentDisputeStatus($n->getEnumValue(DisputeStateEnum::class)),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(DisputeReasonEnum::class)),
            'respondByDate' => fn(ParseNode $n) => $o->setRespondByDate($n->getStringValue()),
        ];
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
     * Gets the paymentDisputeId property value. This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the <strong>getPaymentDispute</strong> call URI to retrieve a specific payment dispute. The <strong>getPaymentDispute</strong> method returns more details about a payment dispute than the <strong>getPaymentDisputeSummaries</strong> method.
     * @return string|null
    */
    public function getPaymentDisputeId(): ?string {
        return $this->paymentDisputeId;
    }

    /**
     * Gets the paymentDisputeStatus property value. The enumeration value in this field gives the current status of the payment dispute.
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
     * Gets the respondByDate property value. The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that require action by the seller, that same seller must call <strong>getPaymentDispute</strong> to see the next action(s) that they can take against the payment dispute.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getRespondByDate(): ?string {
        return $this->respondByDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('buyerUsername', $this->getBuyerUsername());
        $writer->writeStringValue('closedDate', $this->getClosedDate());
        $writer->writeStringValue('openDate', $this->getOpenDate());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('paymentDisputeId', $this->getPaymentDisputeId());
        $writer->writeEnumValue('paymentDisputeStatus', $this->getPaymentDisputeStatus());
        $writer->writeEnumValue('reason', $this->getReason());
        $writer->writeStringValue('respondByDate', $this->getRespondByDate());
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
     * Sets the amount property value. This container shows the dollar value associated with the payment dispute in the currency used by the seller's marketplace. This container is returned for all payment disputes returned in the response.
     * @param SimpleAmount|null $value Value to set for the amount property.
    */
    public function setAmount(?SimpleAmount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the buyerUsername property value. This is the buyer's eBay user ID. This field is returned for all payment disputes returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
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
     * Sets the paymentDisputeId property value. This is the unique identifier of the payment dispute. This identifier is automatically created by eBay once the payment dispute comes into the eBay system. This identifier is passed in at the end of the <strong>getPaymentDispute</strong> call URI to retrieve a specific payment dispute. The <strong>getPaymentDispute</strong> method returns more details about a payment dispute than the <strong>getPaymentDisputeSummaries</strong> method.
     * @param string|null $value Value to set for the paymentDisputeId property.
    */
    public function setPaymentDisputeId(?string $value): void {
        $this->paymentDisputeId = $value;
    }

    /**
     * Sets the paymentDisputeStatus property value. The enumeration value in this field gives the current status of the payment dispute.
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
     * Sets the respondByDate property value. The timestamp in this field shows the date/time when the seller must response to a payment dispute, so this field is only returned for payment disputes in the <code>ACTION_NEEDED</code> state. For payment disputes that require action by the seller, that same seller must call <strong>getPaymentDispute</strong> to see the next action(s) that they can take against the payment dispute.<br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the respondByDate property.
    */
    public function setRespondByDate(?string $value): void {
        $this->respondByDate = $value;
    }

}
