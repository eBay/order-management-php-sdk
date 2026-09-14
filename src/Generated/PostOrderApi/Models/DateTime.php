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
 * This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
*/
class DateTime implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $formattedValue Reserved for future use. <!-- Gets a date value that is formatted as defined in the ISO-8601 internationalization standard.  <br/><br/>This value is returned only if the client specifies which format to return by populating the <code>X-EBAY-C-CULTRUREPREF</code> HTTP header. -->
    */
    private ?string $formattedValue = null;
    
    /**
     * @var string|null $value This timestamp indicates the date and time when an action or event occurred.   <br/><br/>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.   <br/><br/><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br/><b>Example:</b> <code>2022-03-20T00:00:00.000Z</code>
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new DateTime and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateTime
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateTime {
        return new DateTime();
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
            'formattedValue' => fn(ParseNode $n) => $o->setFormattedValue($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the formattedValue property value. Reserved for future use. <!-- Gets a date value that is formatted as defined in the ISO-8601 internationalization standard.  <br/><br/>This value is returned only if the client specifies which format to return by populating the <code>X-EBAY-C-CULTRUREPREF</code> HTTP header. -->
     * @return string|null
    */
    public function getFormattedValue(): ?string {
        return $this->formattedValue;
    }

    /**
     * Gets the value property value. This timestamp indicates the date and time when an action or event occurred.   <br/><br/>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.   <br/><br/><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br/><b>Example:</b> <code>2022-03-20T00:00:00.000Z</code>
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('formattedValue', $this->getFormattedValue());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the formattedValue property value. Reserved for future use. <!-- Gets a date value that is formatted as defined in the ISO-8601 internationalization standard.  <br/><br/>This value is returned only if the client specifies which format to return by populating the <code>X-EBAY-C-CULTRUREPREF</code> HTTP header. -->
     * @param string|null $value Value to set for the formattedValue property.
    */
    public function setFormattedValue(?string $value): void {
        $this->formattedValue = $value;
    }

    /**
     * Sets the value property value. This timestamp indicates the date and time when an action or event occurred.   <br/><br/>The timestamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.   <br/><br/><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br/><b>Example:</b> <code>2022-03-20T00:00:00.000Z</code>
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
