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
 * This complex type contains information about a shipping option that can be purchased in addition to the base shipping cost of a recommended rate. Additional options for each rate are defined, named, and offered by the selected shipping carrier. Examples include shipping insurance or the requirement for a recipient signature.
*/
class AdditionalOption implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Amount|null $additionalCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $additionalCost = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $optionType The name of a shipping option that can be purchased in addition to the base shipping cost of this rate. The value supplied in this field must match exactly the option name as supplied by the selected rate.
    */
    private ?string $optionType = null;
    
    /**
     * Instantiates a new AdditionalOption and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalOption
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalOption {
        return new AdditionalOption();
    }

    /**
     * Gets the additionalCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAdditionalCost(): ?Amount {
        return $this->additionalCost;
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
            'additionalCost' => fn(ParseNode $n) => $o->setAdditionalCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'optionType' => fn(ParseNode $n) => $o->setOptionType($n->getStringValue()),
        ];
    }

    /**
     * Gets the optionType property value. The name of a shipping option that can be purchased in addition to the base shipping cost of this rate. The value supplied in this field must match exactly the option name as supplied by the selected rate.
     * @return string|null
    */
    public function getOptionType(): ?string {
        return $this->optionType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('additionalCost', $this->getAdditionalCost());
        $writer->writeStringValue('optionType', $this->getOptionType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the additionalCost property.
    */
    public function setAdditionalCost(?Amount $value): void {
        $this->additionalCost = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the optionType property value. The name of a shipping option that can be purchased in addition to the base shipping cost of this rate. The value supplied in this field must match exactly the option name as supplied by the selected rate.
     * @param string|null $value Value to set for the optionType property.
    */
    public function setOptionType(?string $value): void {
        $this->optionType = $value;
    }

}
