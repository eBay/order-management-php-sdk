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
 * This type is used by the request payload of the <strong>contestPaymentDispute</strong> method.
*/
class ContestPaymentDisputeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $note This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br><strong>Max Length:</strong> 1000 characters.
    */
    private ?string $note = null;
    
    /**
     * @var ReturnAddress|null $returnAddress This container is needed if the seller is requesting that the buyer return the item. If this container is used, all relevant fields must be included, including <strong>fullName</strong> and <strong>primaryPhone</strong>.<br><br><span class="tablenote"><strong>Note:</strong> If the <a href ="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputereasonenum" target="_blank">Dispute Reason</a> is <code>SIGNIFICANTLY_NOT_AS_DESCRIBED</code>, <strong>returnAddress</strong> is required.</span>
    */
    private ?ReturnAddress $returnAddress = null;
    
    /**
     * @var int|null $revision This integer value indicates the revision number of the payment dispute. This field is required. The current <strong>revision</strong> number for a payment dispute can be retrieved with the <strong>getPaymentDispute</strong> method. Each time an action is taken against a payment dispute, this integer value increases by 1.
    */
    private ?int $revision = null;
    
    /**
     * Instantiates a new ContestPaymentDisputeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ContestPaymentDisputeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ContestPaymentDisputeRequest {
        return new ContestPaymentDisputeRequest();
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
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'returnAddress' => fn(ParseNode $n) => $o->setReturnAddress($n->getObjectValue([ReturnAddress::class, 'createFromDiscriminatorValue'])),
            'revision' => fn(ParseNode $n) => $o->setRevision($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the note property value. This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br><strong>Max Length:</strong> 1000 characters.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the returnAddress property value. This container is needed if the seller is requesting that the buyer return the item. If this container is used, all relevant fields must be included, including <strong>fullName</strong> and <strong>primaryPhone</strong>.<br><br><span class="tablenote"><strong>Note:</strong> If the <a href ="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputereasonenum" target="_blank">Dispute Reason</a> is <code>SIGNIFICANTLY_NOT_AS_DESCRIBED</code>, <strong>returnAddress</strong> is required.</span>
     * @return ReturnAddress|null
    */
    public function getReturnAddress(): ?ReturnAddress {
        return $this->returnAddress;
    }

    /**
     * Gets the revision property value. This integer value indicates the revision number of the payment dispute. This field is required. The current <strong>revision</strong> number for a payment dispute can be retrieved with the <strong>getPaymentDispute</strong> method. Each time an action is taken against a payment dispute, this integer value increases by 1.
     * @return int|null
    */
    public function getRevision(): ?int {
        return $this->revision;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeObjectValue('returnAddress', $this->getReturnAddress());
        $writer->writeIntegerValue('revision', $this->getRevision());
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
     * Sets the note property value. This field shows information that the seller provides about the dispute, such as the basis for the dispute, any relevant evidence, tracking numbers, and so forth.<br><br><strong>Max Length:</strong> 1000 characters.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the returnAddress property value. This container is needed if the seller is requesting that the buyer return the item. If this container is used, all relevant fields must be included, including <strong>fullName</strong> and <strong>primaryPhone</strong>.<br><br><span class="tablenote"><strong>Note:</strong> If the <a href ="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputereasonenum" target="_blank">Dispute Reason</a> is <code>SIGNIFICANTLY_NOT_AS_DESCRIBED</code>, <strong>returnAddress</strong> is required.</span>
     * @param ReturnAddress|null $value Value to set for the returnAddress property.
    */
    public function setReturnAddress(?ReturnAddress $value): void {
        $this->returnAddress = $value;
    }

    /**
     * Sets the revision property value. This integer value indicates the revision number of the payment dispute. This field is required. The current <strong>revision</strong> number for a payment dispute can be retrieved with the <strong>getPaymentDispute</strong> method. Each time an action is taken against a payment dispute, this integer value increases by 1.
     * @param int|null $value Value to set for the revision property.
    */
    public function setRevision(?int $value): void {
        $this->revision = $value;
    }

}
