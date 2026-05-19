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
 * This type is used by the request payload of the <strong>addEvidence</strong> method. The <strong>addEvidence</strong> method is used to create a new evidence set against a payment dispute with one or more evidence files.
*/
class AddEvidencePaymentDisputeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $evidenceType This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
    */
    private ?string $evidenceType = null;
    
    /**
     * @var array<FileEvidence>|null $files This array is used to specify one or more evidence files that will become part of a new evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.
    */
    private ?array $files = null;
    
    /**
     * @var array<OrderLineItems>|null $lineItems This array identifies the order line item(s) for which the evidence file(s) will be applicable.<br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
    */
    private ?array $lineItems = null;
    
    /**
     * Instantiates a new AddEvidencePaymentDisputeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddEvidencePaymentDisputeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddEvidencePaymentDisputeRequest {
        return new AddEvidencePaymentDisputeRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the evidenceType property value. This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEvidenceType(): ?string {
        return $this->evidenceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evidenceType' => fn(ParseNode $n) => $o->setEvidenceType($n->getStringValue()),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileEvidence::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([OrderLineItems::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the files property value. This array is used to specify one or more evidence files that will become part of a new evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.
     * @return array<FileEvidence>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the lineItems property value. This array identifies the order line item(s) for which the evidence file(s) will be applicable.<br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @return array<OrderLineItems>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('evidenceType', $this->getEvidenceType());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
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
     * Sets the evidenceType property value. This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the evidenceType property.
    */
    public function setEvidenceType(?string $value): void {
        $this->evidenceType = $value;
    }

    /**
     * Sets the files property value. This array is used to specify one or more evidence files that will become part of a new evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.
     * @param array<FileEvidence>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the lineItems property value. This array identifies the order line item(s) for which the evidence file(s) will be applicable.<br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @param array<OrderLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

}
