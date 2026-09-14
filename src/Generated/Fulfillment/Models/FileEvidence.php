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
 * This type is used to store the unique identifier of an evidence file. Evidence files are used by seller to contest a payment dispute.
*/
class FileEvidence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fileId This field is used to identify the evidence file to be uploaded to the evidence set.<br><br> This file is created with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-uploadevidencefile" target="_blank ">uploadEvidenceFile</a> method and can be retrieved using the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> method.
    */
    private ?string $fileId = null;
    
    /**
     * Instantiates a new FileEvidence and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileEvidence {
        return new FileEvidence();
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
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. This field is used to identify the evidence file to be uploaded to the evidence set.<br><br> This file is created with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-uploadevidencefile" target="_blank ">uploadEvidenceFile</a> method and can be retrieved using the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> method.
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->fileId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileId', $this->getFileId());
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
     * Sets the fileId property value. This field is used to identify the evidence file to be uploaded to the evidence set.<br><br> This file is created with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-uploadevidencefile" target="_blank ">uploadEvidenceFile</a> method and can be retrieved using the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> method.
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->fileId = $value;
    }

}
