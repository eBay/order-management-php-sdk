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

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type contains contact information for an individual buyer or seller.
*/
class Contact implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $companyName The company name with which the contact is associated.
    */
    private ?string $companyName = null;
    
    /**
     * @var ContactAddress|null $contactAddress This complex type specifies the details of a geographical address.
    */
    private ?ContactAddress $contactAddress = null;
    
    /**
     * @var string|null $fullName The contact's full name.
    */
    private ?string $fullName = null;
    
    /**
     * @var PhoneNumber|null $primaryPhone This complex type contains a string field representing a telephone number.
    */
    private ?PhoneNumber $primaryPhone = null;
    
    /**
     * Instantiates a new Contact and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Contact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Contact {
        return new Contact();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the companyName property value. The company name with which the contact is associated.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the contactAddress property value. This complex type specifies the details of a geographical address.
     * @return ContactAddress|null
    */
    public function getContactAddress(): ?ContactAddress {
        return $this->contactAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'contactAddress' => fn(ParseNode $n) => $o->setContactAddress($n->getObjectValue([ContactAddress::class, 'createFromDiscriminatorValue'])),
            'fullName' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
            'primaryPhone' => fn(ParseNode $n) => $o->setPrimaryPhone($n->getObjectValue([PhoneNumber::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fullName property value. The contact's full name.
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->fullName;
    }

    /**
     * Gets the primaryPhone property value. This complex type contains a string field representing a telephone number.
     * @return PhoneNumber|null
    */
    public function getPrimaryPhone(): ?PhoneNumber {
        return $this->primaryPhone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('companyName', $this->getCompanyName());
        $writer->writeObjectValue('contactAddress', $this->getContactAddress());
        $writer->writeStringValue('fullName', $this->getFullName());
        $writer->writeObjectValue('primaryPhone', $this->getPrimaryPhone());
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
     * Sets the companyName property value. The company name with which the contact is associated.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the contactAddress property value. This complex type specifies the details of a geographical address.
     * @param ContactAddress|null $value Value to set for the contactAddress property.
    */
    public function setContactAddress(?ContactAddress $value): void {
        $this->contactAddress = $value;
    }

    /**
     * Sets the fullName property value. The contact's full name.
     * @param string|null $value Value to set for the fullName property.
    */
    public function setFullName(?string $value): void {
        $this->fullName = $value;
    }

    /**
     * Sets the primaryPhone property value. This complex type contains a string field representing a telephone number.
     * @param PhoneNumber|null $value Value to set for the primaryPhone property.
    */
    public function setPrimaryPhone(?PhoneNumber $value): void {
        $this->primaryPhone = $value;
    }

}
