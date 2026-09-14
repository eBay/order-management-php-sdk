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
 * This type contains a breakdown of all costs associated with the fulfillment of a line item.
*/
class DeliveryCost implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $discountAmount The amount of any shipping discount that has been applied to the line item. This container is returned only if a shipping discount applies to the line item.
    */
    private ?Amount $discountAmount = null;
    
    /**
     * @var Amount|null $handlingCost The amount of any handing cost that has been applied to the line item. This container is returned only if a handling cost applies to the line item.
    */
    private ?Amount $handlingCost = null;
    
    /**
     * @var Amount|null $importCharges The amount of any import charges applied to international shipping of the line item. This container is only returned if import charges apply to the line item.
    */
    private ?Amount $importCharges = null;
    
    /**
     * @var Amount|null $shippingCost The total cost of shipping all units of the line item. This container is always returned even when the shipping cost is free, in which case the <strong>value</strong> field will show <code>0.0</code> (dollars).
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var Amount|null $shippingIntermediationFee This field shows the fee due to eBay's international shipping provider for a line item that is being shipped through the Global Shipping Program.<br><br>This container is only returned for line items being shipped internationally through the Global Shipping Program, which is currently only supported in the US and UK marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> The value returned for this field will always be <code>0.0</code> for line items sold in the UK marketplace.</span>
    */
    private ?Amount $shippingIntermediationFee = null;
    
    /**
     * Instantiates a new DeliveryCost and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryCost
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryCost {
        return new DeliveryCost();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the discountAmount property value. The amount of any shipping discount that has been applied to the line item. This container is returned only if a shipping discount applies to the line item.
     * @return Amount|null
    */
    public function getDiscountAmount(): ?Amount {
        return $this->discountAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'handlingCost' => fn(ParseNode $n) => $o->setHandlingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'importCharges' => fn(ParseNode $n) => $o->setImportCharges($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingIntermediationFee' => fn(ParseNode $n) => $o->setShippingIntermediationFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the handlingCost property value. The amount of any handing cost that has been applied to the line item. This container is returned only if a handling cost applies to the line item.
     * @return Amount|null
    */
    public function getHandlingCost(): ?Amount {
        return $this->handlingCost;
    }

    /**
     * Gets the importCharges property value. The amount of any import charges applied to international shipping of the line item. This container is only returned if import charges apply to the line item.
     * @return Amount|null
    */
    public function getImportCharges(): ?Amount {
        return $this->importCharges;
    }

    /**
     * Gets the shippingCost property value. The total cost of shipping all units of the line item. This container is always returned even when the shipping cost is free, in which case the <strong>value</strong> field will show <code>0.0</code> (dollars).
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the shippingIntermediationFee property value. This field shows the fee due to eBay's international shipping provider for a line item that is being shipped through the Global Shipping Program.<br><br>This container is only returned for line items being shipped internationally through the Global Shipping Program, which is currently only supported in the US and UK marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> The value returned for this field will always be <code>0.0</code> for line items sold in the UK marketplace.</span>
     * @return Amount|null
    */
    public function getShippingIntermediationFee(): ?Amount {
        return $this->shippingIntermediationFee;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('discountAmount', $this->getDiscountAmount());
        $writer->writeObjectValue('handlingCost', $this->getHandlingCost());
        $writer->writeObjectValue('importCharges', $this->getImportCharges());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeObjectValue('shippingIntermediationFee', $this->getShippingIntermediationFee());
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
     * Sets the discountAmount property value. The amount of any shipping discount that has been applied to the line item. This container is returned only if a shipping discount applies to the line item.
     * @param Amount|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?Amount $value): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the handlingCost property value. The amount of any handing cost that has been applied to the line item. This container is returned only if a handling cost applies to the line item.
     * @param Amount|null $value Value to set for the handlingCost property.
    */
    public function setHandlingCost(?Amount $value): void {
        $this->handlingCost = $value;
    }

    /**
     * Sets the importCharges property value. The amount of any import charges applied to international shipping of the line item. This container is only returned if import charges apply to the line item.
     * @param Amount|null $value Value to set for the importCharges property.
    */
    public function setImportCharges(?Amount $value): void {
        $this->importCharges = $value;
    }

    /**
     * Sets the shippingCost property value. The total cost of shipping all units of the line item. This container is always returned even when the shipping cost is free, in which case the <strong>value</strong> field will show <code>0.0</code> (dollars).
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the shippingIntermediationFee property value. This field shows the fee due to eBay's international shipping provider for a line item that is being shipped through the Global Shipping Program.<br><br>This container is only returned for line items being shipped internationally through the Global Shipping Program, which is currently only supported in the US and UK marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> The value returned for this field will always be <code>0.0</code> for line items sold in the UK marketplace.</span>
     * @param Amount|null $value Value to set for the shippingIntermediationFee property.
    */
    public function setShippingIntermediationFee(?Amount $value): void {
        $this->shippingIntermediationFee = $value;
    }

}
