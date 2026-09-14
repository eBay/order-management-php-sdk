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
 * This type shows the seller's funding source used for the buyer refund, or in the case where eBay issued the refund to the buyer, the seller's funding source used by eBay to recoup this refund money from the seller.
*/
class FundingSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var FundingMethodBrandEnum|null $brand This enumeration type lists the possible credit card brands that can be used by eBay to fund a seller's refund to a buyer. This type is only applicable if a buyer refund will be funded using a seller's credit card as the funding source.
    */
    private ?FundingMethodBrandEnum $brand = null;
    
    /**
     * @var string|null $memo This provides a note about the funding source. This field is only returned if available, or it might get returned as an empty string.
    */
    private ?string $memo = null;
    
    /**
     * @var FundingMethodTypeEnum|null $type This enumeration type lists the possible funding methods that can be used by eBay to fund a seller's refund to a buyer.
    */
    private ?FundingMethodTypeEnum $type = null;
    
    /**
     * Instantiates a new FundingSource and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FundingSource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FundingSource {
        return new FundingSource();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brand property value. This enumeration type lists the possible credit card brands that can be used by eBay to fund a seller's refund to a buyer. This type is only applicable if a buyer refund will be funded using a seller's credit card as the funding source.
     * @return FundingMethodBrandEnum|null
    */
    public function getBrand(): ?FundingMethodBrandEnum {
        return $this->brand;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brand' => fn(ParseNode $n) => $o->setBrand($n->getEnumValue(FundingMethodBrandEnum::class)),
            'memo' => fn(ParseNode $n) => $o->setMemo($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(FundingMethodTypeEnum::class)),
        ];
    }

    /**
     * Gets the memo property value. This provides a note about the funding source. This field is only returned if available, or it might get returned as an empty string.
     * @return string|null
    */
    public function getMemo(): ?string {
        return $this->memo;
    }

    /**
     * Gets the type property value. This enumeration type lists the possible funding methods that can be used by eBay to fund a seller's refund to a buyer.
     * @return FundingMethodTypeEnum|null
    */
    public function getType(): ?FundingMethodTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('brand', $this->getBrand());
        $writer->writeStringValue('memo', $this->getMemo());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the brand property value. This enumeration type lists the possible credit card brands that can be used by eBay to fund a seller's refund to a buyer. This type is only applicable if a buyer refund will be funded using a seller's credit card as the funding source.
     * @param FundingMethodBrandEnum|null $value Value to set for the brand property.
    */
    public function setBrand(?FundingMethodBrandEnum $value): void {
        $this->brand = $value;
    }

    /**
     * Sets the memo property value. This provides a note about the funding source. This field is only returned if available, or it might get returned as an empty string.
     * @param string|null $value Value to set for the memo property.
    */
    public function setMemo(?string $value): void {
        $this->memo = $value;
    }

    /**
     * Sets the type property value. This enumeration type lists the possible funding methods that can be used by eBay to fund a seller's refund to a buyer.
     * @param FundingMethodTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?FundingMethodTypeEnum $value): void {
        $this->type = $value;
    }

}
