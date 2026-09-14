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
 * This type is returned for order line items eligible for the Authenticity Guarantee service and/or for order line items fulfilled by the eBay Fulfillment program or eBay shipping.
*/
class Program implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PostSaleAuthenticationProgram|null $authenticityVerification This field is returned when the third-party authenticator performs the authentication verification inspection on the order line item. Different values will be returned based on whether the item passed or failed the authentication verification inspection.
    */
    private ?PostSaleAuthenticationProgram $authenticityVerification = null;
    
    /**
     * @var EbayInternationalShipping|null $ebayInternationalShipping This container is returned if the order is being fulfilled through eBay International Shipping.
    */
    private ?EbayInternationalShipping $ebayInternationalShipping = null;
    
    /**
     * @var EbayShipping|null $ebayShipping This container is returned only if the order is an eBay shipping order. It consists of a field that indicates the provider of a shipping label for this order.
    */
    private ?EbayShipping $ebayShipping = null;
    
    /**
     * @var EbayVaultProgram|null $ebayVault This field provides information about the eBay vault program that has been selected for an order. This is returned only for those items that are eligible for the eBay Vault Program.
    */
    private ?EbayVaultProgram $ebayVault = null;
    
    /**
     * @var EbayFulfillmentProgram|null $fulfillmentProgram This field provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
    */
    private ?EbayFulfillmentProgram $fulfillmentProgram = null;
    
    /**
     * Instantiates a new Program and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Program
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Program {
        return new Program();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticityVerification property value. This field is returned when the third-party authenticator performs the authentication verification inspection on the order line item. Different values will be returned based on whether the item passed or failed the authentication verification inspection.
     * @return PostSaleAuthenticationProgram|null
    */
    public function getAuthenticityVerification(): ?PostSaleAuthenticationProgram {
        return $this->authenticityVerification;
    }

    /**
     * Gets the ebayInternationalShipping property value. This container is returned if the order is being fulfilled through eBay International Shipping.
     * @return EbayInternationalShipping|null
    */
    public function getEbayInternationalShipping(): ?EbayInternationalShipping {
        return $this->ebayInternationalShipping;
    }

    /**
     * Gets the ebayShipping property value. This container is returned only if the order is an eBay shipping order. It consists of a field that indicates the provider of a shipping label for this order.
     * @return EbayShipping|null
    */
    public function getEbayShipping(): ?EbayShipping {
        return $this->ebayShipping;
    }

    /**
     * Gets the ebayVault property value. This field provides information about the eBay vault program that has been selected for an order. This is returned only for those items that are eligible for the eBay Vault Program.
     * @return EbayVaultProgram|null
    */
    public function getEbayVault(): ?EbayVaultProgram {
        return $this->ebayVault;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticityVerification' => fn(ParseNode $n) => $o->setAuthenticityVerification($n->getObjectValue([PostSaleAuthenticationProgram::class, 'createFromDiscriminatorValue'])),
            'ebayInternationalShipping' => fn(ParseNode $n) => $o->setEbayInternationalShipping($n->getObjectValue([EbayInternationalShipping::class, 'createFromDiscriminatorValue'])),
            'ebayShipping' => fn(ParseNode $n) => $o->setEbayShipping($n->getObjectValue([EbayShipping::class, 'createFromDiscriminatorValue'])),
            'ebayVault' => fn(ParseNode $n) => $o->setEbayVault($n->getObjectValue([EbayVaultProgram::class, 'createFromDiscriminatorValue'])),
            'fulfillmentProgram' => fn(ParseNode $n) => $o->setFulfillmentProgram($n->getObjectValue([EbayFulfillmentProgram::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fulfillmentProgram property value. This field provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     * @return EbayFulfillmentProgram|null
    */
    public function getFulfillmentProgram(): ?EbayFulfillmentProgram {
        return $this->fulfillmentProgram;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authenticityVerification', $this->getAuthenticityVerification());
        $writer->writeObjectValue('ebayInternationalShipping', $this->getEbayInternationalShipping());
        $writer->writeObjectValue('ebayShipping', $this->getEbayShipping());
        $writer->writeObjectValue('ebayVault', $this->getEbayVault());
        $writer->writeObjectValue('fulfillmentProgram', $this->getFulfillmentProgram());
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
     * Sets the authenticityVerification property value. This field is returned when the third-party authenticator performs the authentication verification inspection on the order line item. Different values will be returned based on whether the item passed or failed the authentication verification inspection.
     * @param PostSaleAuthenticationProgram|null $value Value to set for the authenticityVerification property.
    */
    public function setAuthenticityVerification(?PostSaleAuthenticationProgram $value): void {
        $this->authenticityVerification = $value;
    }

    /**
     * Sets the ebayInternationalShipping property value. This container is returned if the order is being fulfilled through eBay International Shipping.
     * @param EbayInternationalShipping|null $value Value to set for the ebayInternationalShipping property.
    */
    public function setEbayInternationalShipping(?EbayInternationalShipping $value): void {
        $this->ebayInternationalShipping = $value;
    }

    /**
     * Sets the ebayShipping property value. This container is returned only if the order is an eBay shipping order. It consists of a field that indicates the provider of a shipping label for this order.
     * @param EbayShipping|null $value Value to set for the ebayShipping property.
    */
    public function setEbayShipping(?EbayShipping $value): void {
        $this->ebayShipping = $value;
    }

    /**
     * Sets the ebayVault property value. This field provides information about the eBay vault program that has been selected for an order. This is returned only for those items that are eligible for the eBay Vault Program.
     * @param EbayVaultProgram|null $value Value to set for the ebayVault property.
    */
    public function setEbayVault(?EbayVaultProgram $value): void {
        $this->ebayVault = $value;
    }

    /**
     * Sets the fulfillmentProgram property value. This field provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     * @param EbayFulfillmentProgram|null $value Value to set for the fulfillmentProgram property.
    */
    public function setFulfillmentProgram(?EbayFulfillmentProgram $value): void {
        $this->fulfillmentProgram = $value;
    }

}
