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
 * This type is used to provide details about the seller payments for an order.
*/
class Payment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $paymentDate The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $paymentDate = null;
    
    /**
     * @var array<PaymentHold>|null $paymentHolds This container is only returned if eBay is temporarily holding the seller's funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected release date of the funds into the seller's account, the current state of the hold, and as soon as the payment hold has been released, the actual release date.
    */
    private ?array $paymentHolds = null;
    
    /**
     * @var string|null $paymentMethod The payment method used to pay for the order. See the <strong>PaymentMethodTypeEnum</strong> type for more information on the payment methods. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentMethodTypeEnum'>eBay API documentation</a>
    */
    private ?string $paymentMethod = null;
    
    /**
     * @var string|null $paymentReferenceId This field is only returned if payment has been made by the buyer, and the <strong>paymentMethod</strong> is <code>ESCROW</code>. This field contains a special ID for ESCROW.
    */
    private ?string $paymentReferenceId = null;
    
    /**
     * @var string|null $paymentStatus The enumeration value returned in this field indicates the status of the payment for the order. See the <strong>PaymentStatusEnum</strong> type definition for more information on the possible payment states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentStatusEnum'>eBay API documentation</a>
    */
    private ?string $paymentStatus = null;
    
    /**
     * Instantiates a new Payment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Payment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Payment {
        return new Payment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'paymentDate' => fn(ParseNode $n) => $o->setPaymentDate($n->getStringValue()),
            'paymentHolds' => fn(ParseNode $n) => $o->setPaymentHolds($n->getCollectionOfObjectValues([PaymentHold::class, 'createFromDiscriminatorValue'])),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getStringValue()),
            'paymentReferenceId' => fn(ParseNode $n) => $o->setPaymentReferenceId($n->getStringValue()),
            'paymentStatus' => fn(ParseNode $n) => $o->setPaymentStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the paymentDate property value. The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getPaymentDate(): ?string {
        return $this->paymentDate;
    }

    /**
     * Gets the paymentHolds property value. This container is only returned if eBay is temporarily holding the seller's funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected release date of the funds into the seller's account, the current state of the hold, and as soon as the payment hold has been released, the actual release date.
     * @return array<PaymentHold>|null
    */
    public function getPaymentHolds(): ?array {
        return $this->paymentHolds;
    }

    /**
     * Gets the paymentMethod property value. The payment method used to pay for the order. See the <strong>PaymentMethodTypeEnum</strong> type for more information on the payment methods. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentMethodTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPaymentMethod(): ?string {
        return $this->paymentMethod;
    }

    /**
     * Gets the paymentReferenceId property value. This field is only returned if payment has been made by the buyer, and the <strong>paymentMethod</strong> is <code>ESCROW</code>. This field contains a special ID for ESCROW.
     * @return string|null
    */
    public function getPaymentReferenceId(): ?string {
        return $this->paymentReferenceId;
    }

    /**
     * Gets the paymentStatus property value. The enumeration value returned in this field indicates the status of the payment for the order. See the <strong>PaymentStatusEnum</strong> type definition for more information on the possible payment states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPaymentStatus(): ?string {
        return $this->paymentStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('paymentDate', $this->getPaymentDate());
        $writer->writeCollectionOfObjectValues('paymentHolds', $this->getPaymentHolds());
        $writer->writeStringValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeStringValue('paymentReferenceId', $this->getPaymentReferenceId());
        $writer->writeStringValue('paymentStatus', $this->getPaymentStatus());
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
     * Sets the amount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the paymentDate property value. The date and time that the payment was received by the seller. This field will not be returned if buyer has yet to pay for the order. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the paymentDate property.
    */
    public function setPaymentDate(?string $value): void {
        $this->paymentDate = $value;
    }

    /**
     * Sets the paymentHolds property value. This container is only returned if eBay is temporarily holding the seller's funds for the order. If a payment hold has been placed on the order, this container includes the reason for the payment hold, the expected release date of the funds into the seller's account, the current state of the hold, and as soon as the payment hold has been released, the actual release date.
     * @param array<PaymentHold>|null $value Value to set for the paymentHolds property.
    */
    public function setPaymentHolds(?array $value): void {
        $this->paymentHolds = $value;
    }

    /**
     * Sets the paymentMethod property value. The payment method used to pay for the order. See the <strong>PaymentMethodTypeEnum</strong> type for more information on the payment methods. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentMethodTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?string $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the paymentReferenceId property value. This field is only returned if payment has been made by the buyer, and the <strong>paymentMethod</strong> is <code>ESCROW</code>. This field contains a special ID for ESCROW.
     * @param string|null $value Value to set for the paymentReferenceId property.
    */
    public function setPaymentReferenceId(?string $value): void {
        $this->paymentReferenceId = $value;
    }

    /**
     * Sets the paymentStatus property value. The enumeration value returned in this field indicates the status of the payment for the order. See the <strong>PaymentStatusEnum</strong> type definition for more information on the possible payment states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:PaymentStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the paymentStatus property.
    */
    public function setPaymentStatus(?string $value): void {
        $this->paymentStatus = $value;
    }

}
