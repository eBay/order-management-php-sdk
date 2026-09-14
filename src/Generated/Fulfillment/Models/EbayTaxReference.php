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
 * This type describes the VAT tax details. The eBay VAT tax type and the eBay VAT identifier number will be returned if a VAT tax is applicable for the order.<br>
*/
class EbayTaxReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $name This field value is returned to indicate the VAT tax type, which will vary by country/region. This string value will be one of the following:<ul><li><code>ABN</code>: If this string is returned, the ID in the <strong>value</strong> field is an Australia tax ID.</li><li><code>DDG</code>: If this string is returned, it indicates that tax has been collected and remitted for Digitally Delivered Goods (DDG).</li><li><code>IOSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay EU or UK IOSS number.</li><li><code>IRD</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay New Zealand tax ID.</li><li><code>SST</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Malaysia taxNumber.</li><li><code>OSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Germany VAT ID.</li><li><code>VOEC</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Norway tax ID.</li></ul>
    */
    private ?string $name = null;
    
    /**
     * @var string|null $value The value returned in this field is the VAT identifier number (VATIN), which will vary by country/region. This field will be returned if VAT tax is applicable for the order. The <strong>name</strong> field indicates the VAT tax type, which will vary by country/region: <ul><li><strong>ABN</strong>: eBay AU tax ID</li><li><strong>IOSS</strong>: eBay EU IOSS number/eBay UK IOSS number</li><li><strong>IRD</strong>: eBay NZ tax ID</li><li><strong>OSS</strong>: eBay DE VAT ID</li><li><strong>SST</strong>: eBay MY taxNumber</li><li><strong>VOEC</strong>: eBay NO number</li></ul>
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new EbayTaxReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayTaxReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayTaxReference {
        return new EbayTaxReference();
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
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. This field value is returned to indicate the VAT tax type, which will vary by country/region. This string value will be one of the following:<ul><li><code>ABN</code>: If this string is returned, the ID in the <strong>value</strong> field is an Australia tax ID.</li><li><code>DDG</code>: If this string is returned, it indicates that tax has been collected and remitted for Digitally Delivered Goods (DDG).</li><li><code>IOSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay EU or UK IOSS number.</li><li><code>IRD</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay New Zealand tax ID.</li><li><code>SST</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Malaysia taxNumber.</li><li><code>OSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Germany VAT ID.</li><li><code>VOEC</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Norway tax ID.</li></ul>
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the value property value. The value returned in this field is the VAT identifier number (VATIN), which will vary by country/region. This field will be returned if VAT tax is applicable for the order. The <strong>name</strong> field indicates the VAT tax type, which will vary by country/region: <ul><li><strong>ABN</strong>: eBay AU tax ID</li><li><strong>IOSS</strong>: eBay EU IOSS number/eBay UK IOSS number</li><li><strong>IRD</strong>: eBay NZ tax ID</li><li><strong>OSS</strong>: eBay DE VAT ID</li><li><strong>SST</strong>: eBay MY taxNumber</li><li><strong>VOEC</strong>: eBay NO number</li></ul>
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
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the name property value. This field value is returned to indicate the VAT tax type, which will vary by country/region. This string value will be one of the following:<ul><li><code>ABN</code>: If this string is returned, the ID in the <strong>value</strong> field is an Australia tax ID.</li><li><code>DDG</code>: If this string is returned, it indicates that tax has been collected and remitted for Digitally Delivered Goods (DDG).</li><li><code>IOSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay EU or UK IOSS number.</li><li><code>IRD</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay New Zealand tax ID.</li><li><code>SST</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Malaysia taxNumber.</li><li><code>OSS</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Germany VAT ID.</li><li><code>VOEC</code>: If this string is returned, the ID in the <strong>value</strong> field is an eBay Norway tax ID.</li></ul>
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the value property value. The value returned in this field is the VAT identifier number (VATIN), which will vary by country/region. This field will be returned if VAT tax is applicable for the order. The <strong>name</strong> field indicates the VAT tax type, which will vary by country/region: <ul><li><strong>ABN</strong>: eBay AU tax ID</li><li><strong>IOSS</strong>: eBay EU IOSS number/eBay UK IOSS number</li><li><strong>IRD</strong>: eBay NZ tax ID</li><li><strong>OSS</strong>: eBay DE VAT ID</li><li><strong>SST</strong>: eBay MY taxNumber</li><li><strong>VOEC</strong>: eBay NO number</li></ul>
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
