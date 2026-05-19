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
     * @var array<OrderRefund>|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
    */
    private ?array $refunds = null;
    
    /**
     * @var Amount|null $totalDueSeller This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
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
     * Gets the refunds property value. This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @return array<OrderRefund>|null
    */
    public function getRefunds(): ?array {
        return $this->refunds;
    }

    /**
     * Gets the totalDueSeller property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
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
     * Sets the refunds property value. This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @param array<OrderRefund>|null $value Value to set for the refunds property.
    */
    public function setRefunds(?array $value): void {
        $this->refunds = $value;
    }

    /**
     * Sets the totalDueSeller property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the totalDueSeller property.
    */
    public function setTotalDueSeller(?Amount $value): void {
        $this->totalDueSeller = $value;
    }

}
