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
 * This type contains shipping and contact information for a buyer or an eBay shipping partner.
*/
class ExtendedContact implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $companyName The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner.
    */
    private ?string $companyName = null;
    
    /**
     * @var Address|null $contactAddress This container shows the shipping address of the buyer or eBay shipping partner.
    */
    private ?Address $contactAddress = null;
    
    /**
     * @var string|null $email This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned.<br><br><span class="tablenote"> <strong>Note:</strong> If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.<br><br>The <strong>email</strong> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $email = null;
    
    /**
     * @var string|null $fullName The full name of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>fullName</strong> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $fullName = null;
    
    /**
     * @var PhoneNumber|null $primaryPhone The primary telephone number of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>primaryPhone</strong> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?PhoneNumber $primaryPhone = null;
    
    /**
     * Instantiates a new ExtendedContact and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendedContact
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendedContact {
        return new ExtendedContact();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the companyName property value. The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner.
     * @return string|null
    */
    public function getCompanyName(): ?string {
        return $this->companyName;
    }

    /**
     * Gets the contactAddress property value. This container shows the shipping address of the buyer or eBay shipping partner.
     * @return Address|null
    */
    public function getContactAddress(): ?Address {
        return $this->contactAddress;
    }

    /**
     * Gets the email property value. This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned.<br><br><span class="tablenote"> <strong>Note:</strong> If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.<br><br>The <strong>email</strong> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'companyName' => fn(ParseNode $n) => $o->setCompanyName($n->getStringValue()),
            'contactAddress' => fn(ParseNode $n) => $o->setContactAddress($n->getObjectValue([Address::class, 'createFromDiscriminatorValue'])),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'fullName' => fn(ParseNode $n) => $o->setFullName($n->getStringValue()),
            'primaryPhone' => fn(ParseNode $n) => $o->setPrimaryPhone($n->getObjectValue([PhoneNumber::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fullName property value. The full name of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>fullName</strong> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getFullName(): ?string {
        return $this->fullName;
    }

    /**
     * Gets the primaryPhone property value. The primary telephone number of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>primaryPhone</strong> will not be returned for any order that is more than 90 days old.</span>
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
        $writer->writeStringValue('email', $this->getEmail());
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
     * Sets the companyName property value. The company name associated with the buyer or eBay shipping partner. This field is only returned if defined/applicable to the buyer or eBay shipping partner.
     * @param string|null $value Value to set for the companyName property.
    */
    public function setCompanyName(?string $value): void {
        $this->companyName = $value;
    }

    /**
     * Sets the contactAddress property value. This container shows the shipping address of the buyer or eBay shipping partner.
     * @param Address|null $value Value to set for the contactAddress property.
    */
    public function setContactAddress(?Address $value): void {
        $this->contactAddress = $value;
    }

    /**
     * Sets the email property value. This field contains the email address of the buyer. This address will be returned for up to 14 days from order creation. If an order is more than 14 days old, no address is returned.<br><br><span class="tablenote"> <strong>Note:</strong> If returned, this field contains the email address of the buyer, even for Global Shipping Program shipments.<br><br>The <strong>email</strong> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->email = $value;
    }

    /**
     * Sets the fullName property value. The full name of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>fullName</strong> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the fullName property.
    */
    public function setFullName(?string $value): void {
        $this->fullName = $value;
    }

    /**
     * Sets the primaryPhone property value. The primary telephone number of the buyer or eBay shipping partner.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>primaryPhone</strong> will not be returned for any order that is more than 90 days old.</span>
     * @param PhoneNumber|null $value Value to set for the primaryPhone property.
    */
    public function setPrimaryPhone(?PhoneNumber $value): void {
        $this->primaryPhone = $value;
    }

}
