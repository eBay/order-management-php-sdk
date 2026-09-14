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
 * This type contains information about the various monetary exchanges that apply to the net balance due for the order.
*/
class PaymentSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Payment>|null $payments This array consists of payment information for the order, including payment status, payment method, payment amount, and payment date. This array is always returned, although some of the fields under this container will not be returned until payment has been made.
    */
    private ?array $payments = null;
    
    /**
     * @var array<OrderRefund>|null $refunds This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
    */
    private ?array $refunds = null;
    
    /**
     * @var Amount|null $totalDueSeller This is the total price that the seller receives for the entire order after all costs (item cost, delivery cost, taxes) are added for all line items, minus any discounts and/or promotions for any of the line items. Note that this value is subject to change before payment is actually made by the buyer (if the <strong>paymentStatus</strong> value was <code>PENDING</code> or <code>FAILED</code>), or if a partial or full refund occurs with the order.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>totalDueSeller</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>totalDueSeller</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
    */
    private ?Amount $totalDueSeller = null;
    
    /**
     * Instantiates a new PaymentSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentSummary {
        return new PaymentSummary();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'payments' => fn(ParseNode $n) => $o->setPayments($n->getCollectionOfObjectValues([Payment::class, 'createFromDiscriminatorValue'])),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getCollectionOfObjectValues([OrderRefund::class, 'createFromDiscriminatorValue'])),
            'totalDueSeller' => fn(ParseNode $n) => $o->setTotalDueSeller($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the payments property value. This array consists of payment information for the order, including payment status, payment method, payment amount, and payment date. This array is always returned, although some of the fields under this container will not be returned until payment has been made.
     * @return array<Payment>|null
    */
    public function getPayments(): ?array {
        return $this->payments;
    }

    /**
     * Gets the refunds property value. This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @return array<OrderRefund>|null
    */
    public function getRefunds(): ?array {
        return $this->refunds;
    }

    /**
     * Gets the totalDueSeller property value. This is the total price that the seller receives for the entire order after all costs (item cost, delivery cost, taxes) are added for all line items, minus any discounts and/or promotions for any of the line items. Note that this value is subject to change before payment is actually made by the buyer (if the <strong>paymentStatus</strong> value was <code>PENDING</code> or <code>FAILED</code>), or if a partial or full refund occurs with the order.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>totalDueSeller</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>totalDueSeller</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
     * @return Amount|null
    */
    public function getTotalDueSeller(): ?Amount {
        return $this->totalDueSeller;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('payments', $this->getPayments());
        $writer->writeCollectionOfObjectValues('refunds', $this->getRefunds());
        $writer->writeObjectValue('totalDueSeller', $this->getTotalDueSeller());
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
     * Sets the payments property value. This array consists of payment information for the order, including payment status, payment method, payment amount, and payment date. This array is always returned, although some of the fields under this container will not be returned until payment has been made.
     * @param array<Payment>|null $value Value to set for the payments property.
    */
    public function setPayments(?array $value): void {
        $this->payments = $value;
    }

    /**
     * Sets the refunds property value. This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @param array<OrderRefund>|null $value Value to set for the refunds property.
    */
    public function setRefunds(?array $value): void {
        $this->refunds = $value;
    }

    /**
     * Sets the totalDueSeller property value. This is the total price that the seller receives for the entire order after all costs (item cost, delivery cost, taxes) are added for all line items, minus any discounts and/or promotions for any of the line items. Note that this value is subject to change before payment is actually made by the buyer (if the <strong>paymentStatus</strong> value was <code>PENDING</code> or <code>FAILED</code>), or if a partial or full refund occurs with the order.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>totalDueSeller</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>totalDueSeller</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is included in this amount:<ul><li><code>STATE_SALES_TAX</code>: US</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
     * @param Amount|null $value Value to set for the totalDueSeller property.
    */
    public function setTotalDueSeller(?Amount $value): void {
        $this->totalDueSeller = $value;
    }

}
