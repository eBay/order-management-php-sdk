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
 * This type contains information about the order's buyer.
*/
class Buyer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ExtendedContact|null $buyerRegistrationAddress This container is the buyer's contact information that includes the buyer's name, email, phone number, and address.
    */
    private ?ExtendedContact $buyerRegistrationAddress = null;
    
    /**
     * @var TaxAddress|null $taxAddress This container consists of address information that can be used by sellers for tax purpose.<br><br><span class="tablenote"><strong>Note:</strong> When using the eBay vault program, if an item is shipped to a vault, the tax address will be the vault address.</span>
    */
    private ?TaxAddress $taxAddress = null;
    
    /**
     * @var TaxIdentifier|null $taxIdentifier This container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> Currently, the <strong>taxIdentifier</strong> container is only returned in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and not in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a>. So, if a seller wants to view a buyer's tax information for a particular order returned in <strong>getOrders</strong>, that seller would need to use the <strong>orderId</strong> value for that particular order and then run a <strong>getOrder</strong> call against that order ID. </span>
    */
    private ?TaxIdentifier $taxIdentifier = null;
    
    /**
     * @var string|null $username The buyer's eBay user ID.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new Buyer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Buyer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Buyer {
        return new Buyer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyerRegistrationAddress property value. This container is the buyer's contact information that includes the buyer's name, email, phone number, and address.
     * @return ExtendedContact|null
    */
    public function getBuyerRegistrationAddress(): ?ExtendedContact {
        return $this->buyerRegistrationAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyerRegistrationAddress' => fn(ParseNode $n) => $o->setBuyerRegistrationAddress($n->getObjectValue([ExtendedContact::class, 'createFromDiscriminatorValue'])),
            'taxAddress' => fn(ParseNode $n) => $o->setTaxAddress($n->getObjectValue([TaxAddress::class, 'createFromDiscriminatorValue'])),
            'taxIdentifier' => fn(ParseNode $n) => $o->setTaxIdentifier($n->getObjectValue([TaxIdentifier::class, 'createFromDiscriminatorValue'])),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ];
    }

    /**
     * Gets the taxAddress property value. This container consists of address information that can be used by sellers for tax purpose.<br><br><span class="tablenote"><strong>Note:</strong> When using the eBay vault program, if an item is shipped to a vault, the tax address will be the vault address.</span>
     * @return TaxAddress|null
    */
    public function getTaxAddress(): ?TaxAddress {
        return $this->taxAddress;
    }

    /**
     * Gets the taxIdentifier property value. This container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> Currently, the <strong>taxIdentifier</strong> container is only returned in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and not in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a>. So, if a seller wants to view a buyer's tax information for a particular order returned in <strong>getOrders</strong>, that seller would need to use the <strong>orderId</strong> value for that particular order and then run a <strong>getOrder</strong> call against that order ID. </span>
     * @return TaxIdentifier|null
    */
    public function getTaxIdentifier(): ?TaxIdentifier {
        return $this->taxIdentifier;
    }

    /**
     * Gets the username property value. The buyer's eBay user ID.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyerRegistrationAddress', $this->getBuyerRegistrationAddress());
        $writer->writeObjectValue('taxAddress', $this->getTaxAddress());
        $writer->writeObjectValue('taxIdentifier', $this->getTaxIdentifier());
        $writer->writeStringValue('username', $this->getUsername());
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
     * Sets the buyerRegistrationAddress property value. This container is the buyer's contact information that includes the buyer's name, email, phone number, and address.
     * @param ExtendedContact|null $value Value to set for the buyerRegistrationAddress property.
    */
    public function setBuyerRegistrationAddress(?ExtendedContact $value): void {
        $this->buyerRegistrationAddress = $value;
    }

    /**
     * Sets the taxAddress property value. This container consists of address information that can be used by sellers for tax purpose.<br><br><span class="tablenote"><strong>Note:</strong> When using the eBay vault program, if an item is shipped to a vault, the tax address will be the vault address.</span>
     * @param TaxAddress|null $value Value to set for the taxAddress property.
    */
    public function setTaxAddress(?TaxAddress $value): void {
        $this->taxAddress = $value;
    }

    /**
     * Sets the taxIdentifier property value. This container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> Currently, the <strong>taxIdentifier</strong> container is only returned in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorder" target="_blank">getOrder</a> and not in <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a>. So, if a seller wants to view a buyer's tax information for a particular order returned in <strong>getOrders</strong>, that seller would need to use the <strong>orderId</strong> value for that particular order and then run a <strong>getOrder</strong> call against that order ID. </span>
     * @param TaxIdentifier|null $value Value to set for the taxIdentifier property.
    */
    public function setTaxIdentifier(?TaxIdentifier $value): void {
        $this->taxIdentifier = $value;
    }

    /**
     * Sets the username property value. The buyer's eBay user ID.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>.</span>
     * @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value): void {
        $this->username = $value;
    }

}
