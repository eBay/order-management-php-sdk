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
 * An external identifier associated with the buyer.
*/
class ExternalId implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Attribute>|null $attributes Additional key-value attributes associated with this external identifier.
    */
    private ?array $attributes = null;
    
    /**
     * @var string|null $externalIdType The type of the external identifier.
    */
    private ?string $externalIdType = null;
    
    /**
     * @var string|null $externalKey The unique external key.
    */
    private ?string $externalKey = null;
    
    /**
     * Instantiates a new ExternalId and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalId {
        return new ExternalId();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the attributes property value. Additional key-value attributes associated with this external identifier.
     * @return array<Attribute>|null
    */
    public function getAttributes(): ?array {
        return $this->attributes;
    }

    /**
     * Gets the externalIdType property value. The type of the external identifier.
     * @return string|null
    */
    public function getExternalIdType(): ?string {
        return $this->externalIdType;
    }

    /**
     * Gets the externalKey property value. The unique external key.
     * @return string|null
    */
    public function getExternalKey(): ?string {
        return $this->externalKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attributes' => fn(ParseNode $n) => $o->setAttributes($n->getCollectionOfObjectValues([Attribute::class, 'createFromDiscriminatorValue'])),
            'externalIdType' => fn(ParseNode $n) => $o->setExternalIdType($n->getStringValue()),
            'externalKey' => fn(ParseNode $n) => $o->setExternalKey($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attributes', $this->getAttributes());
        $writer->writeStringValue('externalIdType', $this->getExternalIdType());
        $writer->writeStringValue('externalKey', $this->getExternalKey());
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
     * Sets the attributes property value. Additional key-value attributes associated with this external identifier.
     * @param array<Attribute>|null $value Value to set for the attributes property.
    */
    public function setAttributes(?array $value): void {
        $this->attributes = $value;
    }

    /**
     * Sets the externalIdType property value. The type of the external identifier.
     * @param string|null $value Value to set for the externalIdType property.
    */
    public function setExternalIdType(?string $value): void {
        $this->externalIdType = $value;
    }

    /**
     * Sets the externalKey property value. The unique external key.
     * @param string|null $value Value to set for the externalKey property.
    */
    public function setExternalKey(?string $value): void {
        $this->externalKey = $value;
    }

}
