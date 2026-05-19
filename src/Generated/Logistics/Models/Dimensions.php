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
 * This complex type defines the dimensions of a package to be shipped.
*/
class Dimensions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $height The numeric value of the height of the package.
    */
    private ?string $height = null;
    
    /**
     * @var string|null $length The numeric value of the length of the package.
    */
    private ?string $length = null;
    
    /**
     * @var string|null $unit The unit of measure used to express the height, length, and width of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:LengthUnitOfMeasureEnum'>eBay API documentation</a>
    */
    private ?string $unit = null;
    
    /**
     * @var string|null $width The numeric value of the width of the package.
    */
    private ?string $width = null;
    
    /**
     * Instantiates a new Dimensions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dimensions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dimensions {
        return new Dimensions();
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
            'height' => fn(ParseNode $n) => $o->setHeight($n->getStringValue()),
            'length' => fn(ParseNode $n) => $o->setLength($n->getStringValue()),
            'unit' => fn(ParseNode $n) => $o->setUnit($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getStringValue()),
        ];
    }

    /**
     * Gets the height property value. The numeric value of the height of the package.
     * @return string|null
    */
    public function getHeight(): ?string {
        return $this->height;
    }

    /**
     * Gets the length property value. The numeric value of the length of the package.
     * @return string|null
    */
    public function getLength(): ?string {
        return $this->length;
    }

    /**
     * Gets the unit property value. The unit of measure used to express the height, length, and width of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:LengthUnitOfMeasureEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getUnit(): ?string {
        return $this->unit;
    }

    /**
     * Gets the width property value. The numeric value of the width of the package.
     * @return string|null
    */
    public function getWidth(): ?string {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('height', $this->getHeight());
        $writer->writeStringValue('length', $this->getLength());
        $writer->writeStringValue('unit', $this->getUnit());
        $writer->writeStringValue('width', $this->getWidth());
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
     * Sets the height property value. The numeric value of the height of the package.
     * @param string|null $value Value to set for the height property.
    */
    public function setHeight(?string $value): void {
        $this->height = $value;
    }

    /**
     * Sets the length property value. The numeric value of the length of the package.
     * @param string|null $value Value to set for the length property.
    */
    public function setLength(?string $value): void {
        $this->length = $value;
    }

    /**
     * Sets the unit property value. The unit of measure used to express the height, length, and width of the package. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:LengthUnitOfMeasureEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the unit property.
    */
    public function setUnit(?string $value): void {
        $this->unit = $value;
    }

    /**
     * Sets the width property value. The numeric value of the width of the package.
     * @param string|null $value Value to set for the width property.
    */
    public function setWidth(?string $value): void {
        $this->width = $value;
    }

}
