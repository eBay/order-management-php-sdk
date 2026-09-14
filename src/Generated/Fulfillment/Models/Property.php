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
 * This type defines the property name and value for an order.
*/
class Property implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $propertyDisplayName The display name of the motor vehicle aspect. This is the localized name of the compatibility property.
    */
    private ?string $propertyDisplayName = null;
    
    /**
     * @var string|null $propertyName The name of the motor vehicle aspect.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
    */
    private ?string $propertyName = null;
    
    /**
     * @var string|null $propertyValue The value of the property specified in the <strong>propertyName</strong> field.<br><br>For example, if the <strong>propertyName</strong> is <code>Make</code>, then the <strong>propertyValue</strong> will be the specific make of the vehicle, such as <code>Toyota</code>.
    */
    private ?string $propertyValue = null;
    
    /**
     * Instantiates a new Property and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Property
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Property {
        return new Property();
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
            'propertyDisplayName' => fn(ParseNode $n) => $o->setPropertyDisplayName($n->getStringValue()),
            'propertyName' => fn(ParseNode $n) => $o->setPropertyName($n->getStringValue()),
            'propertyValue' => fn(ParseNode $n) => $o->setPropertyValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the propertyDisplayName property value. The display name of the motor vehicle aspect. This is the localized name of the compatibility property.
     * @return string|null
    */
    public function getPropertyDisplayName(): ?string {
        return $this->propertyDisplayName;
    }

    /**
     * Gets the propertyName property value. The name of the motor vehicle aspect.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @return string|null
    */
    public function getPropertyName(): ?string {
        return $this->propertyName;
    }

    /**
     * Gets the propertyValue property value. The value of the property specified in the <strong>propertyName</strong> field.<br><br>For example, if the <strong>propertyName</strong> is <code>Make</code>, then the <strong>propertyValue</strong> will be the specific make of the vehicle, such as <code>Toyota</code>.
     * @return string|null
    */
    public function getPropertyValue(): ?string {
        return $this->propertyValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('propertyDisplayName', $this->getPropertyDisplayName());
        $writer->writeStringValue('propertyName', $this->getPropertyName());
        $writer->writeStringValue('propertyValue', $this->getPropertyValue());
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
     * Sets the propertyDisplayName property value. The display name of the motor vehicle aspect. This is the localized name of the compatibility property.
     * @param string|null $value Value to set for the propertyDisplayName property.
    */
    public function setPropertyDisplayName(?string $value): void {
        $this->propertyDisplayName = $value;
    }

    /**
     * Sets the propertyName property value. The name of the motor vehicle aspect.<br><br>For example, typical vehicle property names are 'Make', 'Model', 'Year', 'Engine', and 'Trim', but will vary based on the eBay marketplace and the eBay category.
     * @param string|null $value Value to set for the propertyName property.
    */
    public function setPropertyName(?string $value): void {
        $this->propertyName = $value;
    }

    /**
     * Sets the propertyValue property value. The value of the property specified in the <strong>propertyName</strong> field.<br><br>For example, if the <strong>propertyName</strong> is <code>Make</code>, then the <strong>propertyValue</strong> will be the specific make of the vehicle, such as <code>Toyota</code>.
     * @param string|null $value Value to set for the propertyValue property.
    */
    public function setPropertyValue(?string $value): void {
        $this->propertyValue = $value;
    }

}
