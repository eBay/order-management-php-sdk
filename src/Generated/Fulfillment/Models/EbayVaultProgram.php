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
 * This type contains details on the fulfillment type.
*/
class EbayVaultProgram implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var EbayVaultFulfillmentTypeEnum|null $fulfillmentType This field specifies how an eBay vault order will be fulfilled. Supported options are:<ul><li><strong>Seller to Vault</strong>: The order will be shipped by the seller to an authenticator.</li><li><strong>Vault to Vault</strong>: The order will be shipped from an eBay vault to the buyer's vault.</li><li><strong>Vault to Buyer</strong>: The order will be shipped from an eBay vault to the buyer's shipping address.</li></ul>
    */
    private ?EbayVaultFulfillmentTypeEnum $fulfillmentType = null;
    
    /**
     * Instantiates a new EbayVaultProgram and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayVaultProgram
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayVaultProgram {
        return new EbayVaultProgram();
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
            'fulfillmentType' => fn(ParseNode $n) => $o->setFulfillmentType($n->getEnumValue(EbayVaultFulfillmentTypeEnum::class)),
        ];
    }

    /**
     * Gets the fulfillmentType property value. This field specifies how an eBay vault order will be fulfilled. Supported options are:<ul><li><strong>Seller to Vault</strong>: The order will be shipped by the seller to an authenticator.</li><li><strong>Vault to Vault</strong>: The order will be shipped from an eBay vault to the buyer's vault.</li><li><strong>Vault to Buyer</strong>: The order will be shipped from an eBay vault to the buyer's shipping address.</li></ul>
     * @return EbayVaultFulfillmentTypeEnum|null
    */
    public function getFulfillmentType(): ?EbayVaultFulfillmentTypeEnum {
        return $this->fulfillmentType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('fulfillmentType', $this->getFulfillmentType());
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
     * Sets the fulfillmentType property value. This field specifies how an eBay vault order will be fulfilled. Supported options are:<ul><li><strong>Seller to Vault</strong>: The order will be shipped by the seller to an authenticator.</li><li><strong>Vault to Vault</strong>: The order will be shipped from an eBay vault to the buyer's vault.</li><li><strong>Vault to Buyer</strong>: The order will be shipped from an eBay vault to the buyer's shipping address.</li></ul>
     * @param EbayVaultFulfillmentTypeEnum|null $value Value to set for the fulfillmentType property.
    */
    public function setFulfillmentType(?EbayVaultFulfillmentTypeEnum $value): void {
        $this->fulfillmentType = $value;
    }

}
