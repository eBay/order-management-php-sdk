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

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the request payload of the <strong>updateEvidence</strong> method. The <strong>updateEvidence</strong> method is used to update an existing evidence set against a payment dispute with one or more evidence files.
*/
class UpdateEvidencePaymentDisputeRequest extends ProcessEvidencePaymentDisputeRequest implements Parsable 
{
    /**
     * @var string|null $evidenceId The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
    */
    private ?string $evidenceId = null;
    
    /**
     * Instantiates a new UpdateEvidencePaymentDisputeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateEvidencePaymentDisputeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateEvidencePaymentDisputeRequest {
        return new UpdateEvidencePaymentDisputeRequest();
    }

    /**
     * Gets the evidenceId property value. The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
     * @return string|null
    */
    public function getEvidenceId(): ?string {
        return $this->evidenceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'evidenceId' => fn(ParseNode $n) => $o->setEvidenceId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('evidenceId', $this->getEvidenceId());
    }

    /**
     * Sets the evidenceId property value. The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
     * @param string|null $value Value to set for the evidenceId property.
    */
    public function setEvidenceId(?string $value): void {
        $this->evidenceId = $value;
    }

}
