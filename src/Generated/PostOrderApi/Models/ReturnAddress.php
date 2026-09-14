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
 * This type provides the seller's return address and the Return Merchandise Authorization (RMA) number associated with the item (if applicable).
*/
class ReturnAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Address|null $address This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
    */
    private ?Address $address = null;
    
    /**
     * @var bool|null $editable This boolean field indicates whether or not the seller's return address (shown in the <b>address</b> container) can be modified. A value of <code>true</code> indicates that the return address can be modified, and a value of <code>false</code> indicates that the return address cannot be modified.
    */
    private ?bool $editable = null;
    
    /**
     * @var string|null $firstName The first name associated with the return address, or if applicable, a business or store name.
    */
    private ?string $firstName = null;
    
    /**
     * @var string|null $lastName The last name associated with the return address. This field will only be returned if applicable.
    */
    private ?string $lastName = null;
    
    /**
     * @var string|null $rMA The Return Merchandise Authorization (RMA) identifier authorizing this return. This field is only returned if an RMA number exists for the order line item.
    */
    private ?string $rMA = null;
    
    /**
     * Instantiates a new ReturnAddress and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReturnAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReturnAddress {
        return new ReturnAddress();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
     * @return Address|null
    */
    public function getAddress(): ?Address {
        return $this->address;
    }

    /**
     * Gets the editable property value. This boolean field indicates whether or not the seller's return address (shown in the <b>address</b> container) can be modified. A value of <code>true</code> indicates that the return address can be modified, and a value of <code>false</code> indicates that the return address cannot be modified.
     * @return bool|null
    */
    public function getEditable(): ?bool {
        return $this->editable;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'editable' => fn(ParseNode $n) => $o->setEditable($n->getBooleanValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'RMA' => fn(ParseNode $n) => $o->setRMA($n->getStringValue()),
        ];
    }

    /**
     * Gets the firstName property value. The first name associated with the return address, or if applicable, a business or store name.
     * @return string|null
    */
    public function getFirstName(): ?string {
        return $this->firstName;
    }

    /**
     * Gets the lastName property value. The last name associated with the return address. This field will only be returned if applicable.
     * @return string|null
    */
    public function getLastName(): ?string {
        return $this->lastName;
    }

    /**
     * Gets the RMA property value. The Return Merchandise Authorization (RMA) identifier authorizing this return. This field is only returned if an RMA number exists for the order line item.
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
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeBooleanValue('editable', $this->getEditable());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
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
     * Sets the address property value. This type is used to define an address. It is used by all containers in the Post-Order API that provide an address.
     * @param Address|null $value Value to set for the address property.
    */
    public function setAddress(?Address $value): void {
        $this->address = $value;
    }

    /**
     * Sets the editable property value. This boolean field indicates whether or not the seller's return address (shown in the <b>address</b> container) can be modified. A value of <code>true</code> indicates that the return address can be modified, and a value of <code>false</code> indicates that the return address cannot be modified.
     * @param bool|null $value Value to set for the editable property.
    */
    public function setEditable(?bool $value): void {
        $this->editable = $value;
    }

    /**
     * Sets the firstName property value. The first name associated with the return address, or if applicable, a business or store name.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->firstName = $value;
    }

    /**
     * Sets the lastName property value. The last name associated with the return address. This field will only be returned if applicable.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->lastName = $value;
    }

    /**
     * Sets the RMA property value. The Return Merchandise Authorization (RMA) identifier authorizing this return. This field is only returned if an RMA number exists for the order line item.
     * @param string|null $value Value to set for the RMA property.
    */
    public function setRMA(?string $value): void {
        $this->rMA = $value;
    }

}
