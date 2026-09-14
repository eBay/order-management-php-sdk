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
 * This type is used by the request payload of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> method, and the payload is used to provide the seller's return address and Return Merchandise Authorization (RMA) number (if applicable) to the seller.
*/
class ReturnAddressRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $firstName The first name associated with the seller's return address, or if applicable, a business or store name.<br/><br/>If a first name or business/store name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName The last name associated with the seller's return address. <br/><br/>If a last name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
    */
    private ?string $lastName = null;
    
    /**
     * @var Address|null $returnAddress This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
    */
    private ?Address $returnAddress = null;
    
    /**
     * @var string|null $rMA The Return Merchandise Authorization (RMA) number associated with the item to be returned. An RMA number is a unique identifier that is provided by a manufacturer and authorizes the return of an item. This field is conditionally required if there is an RMA number associated with the item, and if the buyer is requesting an RMA number.
    */
    private ?string $rMA = null;
    
    /**
     * Instantiates a new ReturnAddressRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnAddressRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnAddressRequest {
        return new ReturnAddressRequest();
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
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'returnAddress' => fn(ParseNode $n) => $o->setReturnAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'RMA' => fn(ParseNode $n) => $o->setRMA($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. The first name associated with the seller's return address, or if applicable, a business or store name.<br/><br/>If a first name or business/store name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. The last name associated with the seller's return address. <br/><br/>If a last name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the returnAddress property value. This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
     * @return Address|null
    */
    public function getReturnAddress(): ?Address {
        return $this->returnAddress;
    }

    /**
     * Gets the RMA property value. The Return Merchandise Authorization (RMA) number associated with the item to be returned. An RMA number is a unique identifier that is provided by a manufacturer and authorizes the return of an item. This field is conditionally required if there is an RMA number associated with the item, and if the buyer is requesting an RMA number.
     * @return string|null
    */
    public function getRMA(): ?string {
        return $this->rMA;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeObjectValue('returnAddress', $this->getReturnAddress());
        $writer->writeStringValue('RMA', $this->getRMA());
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
     * Sets the firstName property value. The first name associated with the seller's return address, or if applicable, a business or store name.<br/><br/>If a first name or business/store name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. The last name associated with the seller's return address. <br/><br/>If a last name is defined for the return address, this field should be included in the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> request.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the returnAddress property value. This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
     * @param Address|null $value Value to set for the returnAddress property.
    */
    public function setReturnAddress(?Address $value): void {
        $this->returnAddress = $value;
    }

    /**
     * Sets the RMA property value. The Return Merchandise Authorization (RMA) number associated with the item to be returned. An RMA number is a unique identifier that is provided by a manufacturer and authorizes the return of an item. This field is conditionally required if there is an RMA number associated with the item, and if the buyer is requesting an RMA number.
     * @param string|null $value Value to set for the RMA property.
    */
    public function setRMA(?string $value): void {
        $this->rMA = $value;
    }

}
