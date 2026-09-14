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

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base request type of the <b>POST /post-order/v2/return</b> method, which allows you to create a return request from scratch or to convert a return request draft into a return request.
*/
class CreateReturnRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $draftId The unique eBay-assigned ID of a return request draft. This field is only applicable (and required) if the buyer is converting a return request draft into an actual return request with the <b>POST /post-order/v2/return</b> method.
    */
    private ?string $draftId = null;
    
    /**
     * @var ReturnRequestType|null $returnRequest This type is used by the <b>returnRequest</b> container that is used in numerous methods to provide details about the buyer's return request, including the order line item (and quantity) that is being returned and the reason for the return.
    */
    private ?ReturnRequestType $returnRequest = null;
    
    /**
     * Instantiates a new CreateReturnRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateReturnRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateReturnRequest {
        return new CreateReturnRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the draftId property value. The unique eBay-assigned ID of a return request draft. This field is only applicable (and required) if the buyer is converting a return request draft into an actual return request with the <b>POST /post-order/v2/return</b> method.
     * @return string|null
    */
    public function getDraftId(): ?string {
        return $this->draftId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'draftId' => fn(ParseNode $n) => $o->setDraftId($n->getStringValue()),
            'returnRequest' => fn(ParseNode $n) => $o->setReturnRequest($n->getObjectValue([ReturnRequestType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the returnRequest property value. This type is used by the <b>returnRequest</b> container that is used in numerous methods to provide details about the buyer's return request, including the order line item (and quantity) that is being returned and the reason for the return.
     * @return ReturnRequestType|null
    */
    public function getReturnRequest(): ?ReturnRequestType {
        return $this->returnRequest;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('draftId', $this->getDraftId());
        $writer->writeObjectValue('returnRequest', $this->getReturnRequest());
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
     * Sets the draftId property value. The unique eBay-assigned ID of a return request draft. This field is only applicable (and required) if the buyer is converting a return request draft into an actual return request with the <b>POST /post-order/v2/return</b> method.
     * @param string|null $value Value to set for the draftId property.
    */
    public function setDraftId(?string $value): void {
        $this->draftId = $value;
    }

    /**
     * Sets the returnRequest property value. This type is used by the <b>returnRequest</b> container that is used in numerous methods to provide details about the buyer's return request, including the order line item (and quantity) that is being returned and the reason for the return.
     * @param ReturnRequestType|null $value Value to set for the returnRequest property.
    */
    public function setReturnRequest(?ReturnRequestType $value): void {
        $this->returnRequest = $value;
    }

}
