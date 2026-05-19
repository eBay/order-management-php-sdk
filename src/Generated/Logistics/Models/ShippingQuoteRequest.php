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
 * This complex type defines the request body for <b>createShippingQuote</b>. Sellers <i>request a quote</i> for a shipment by defining the "To" and "From" addresses for the package, plus the package's size.  <br><br>Carriers respond by offering up a "rate" for the service of theirs that best fits seller's needs.
*/
class ShippingQuoteRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Order>|null $orders In this array, the seller specifies one or more orders that will be shipped in the shipping package. <br><br>A shipping package can contain any number of line items from one or more orders, providing they all ship in the same package.  <br><br><b>Maximum list size:</b> 10
    */
    private ?array $orders = null;
    
    /**
     * @var PackageSpecification|null $packageSpecification This complex type specifies the dimensions and weight of a package.
    */
    private ?PackageSpecification $packageSpecification = null;
    
    /**
     * @var Contact|null $shipFrom This complex type contains contact information for an individual buyer or seller.
    */
    private ?Contact $shipFrom = null;
    
    /**
     * @var Contact|null $shipTo This complex type contains contact information for an individual buyer or seller.
    */
    private ?Contact $shipTo = null;
    
    /**
     * Instantiates a new ShippingQuoteRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingQuoteRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingQuoteRequest {
        return new ShippingQuoteRequest();
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
            'orders' => fn(ParseNode $n) => $o->setOrders($n->getCollectionOfObjectValues([Order::class, 'createFromDiscriminatorValue'])),
            'packageSpecification' => fn(ParseNode $n) => $o->setPackageSpecification($n->getObjectValue([PackageSpecification::class, 'createFromDiscriminatorValue'])),
            'shipFrom' => fn(ParseNode $n) => $o->setShipFrom($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'shipTo' => fn(ParseNode $n) => $o->setShipTo($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orders property value. In this array, the seller specifies one or more orders that will be shipped in the shipping package. <br><br>A shipping package can contain any number of line items from one or more orders, providing they all ship in the same package.  <br><br><b>Maximum list size:</b> 10
     * @return array<Order>|null
    */
    public function getOrders(): ?array {
        return $this->orders;
    }

    /**
     * Gets the packageSpecification property value. This complex type specifies the dimensions and weight of a package.
     * @return PackageSpecification|null
    */
    public function getPackageSpecification(): ?PackageSpecification {
        return $this->packageSpecification;
    }

    /**
     * Gets the shipFrom property value. This complex type contains contact information for an individual buyer or seller.
     * @return Contact|null
    */
    public function getShipFrom(): ?Contact {
        return $this->shipFrom;
    }

    /**
     * Gets the shipTo property value. This complex type contains contact information for an individual buyer or seller.
     * @return Contact|null
    */
    public function getShipTo(): ?Contact {
        return $this->shipTo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('orders', $this->getOrders());
        $writer->writeObjectValue('packageSpecification', $this->getPackageSpecification());
        $writer->writeObjectValue('shipFrom', $this->getShipFrom());
        $writer->writeObjectValue('shipTo', $this->getShipTo());
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
     * Sets the orders property value. In this array, the seller specifies one or more orders that will be shipped in the shipping package. <br><br>A shipping package can contain any number of line items from one or more orders, providing they all ship in the same package.  <br><br><b>Maximum list size:</b> 10
     * @param array<Order>|null $value Value to set for the orders property.
    */
    public function setOrders(?array $value): void {
        $this->orders = $value;
    }

    /**
     * Sets the packageSpecification property value. This complex type specifies the dimensions and weight of a package.
     * @param PackageSpecification|null $value Value to set for the packageSpecification property.
    */
    public function setPackageSpecification(?PackageSpecification $value): void {
        $this->packageSpecification = $value;
    }

    /**
     * Sets the shipFrom property value. This complex type contains contact information for an individual buyer or seller.
     * @param Contact|null $value Value to set for the shipFrom property.
    */
    public function setShipFrom(?Contact $value): void {
        $this->shipFrom = $value;
    }

    /**
     * Sets the shipTo property value. This complex type contains contact information for an individual buyer or seller.
     * @param Contact|null $value Value to set for the shipTo property.
    */
    public function setShipTo(?Contact $value): void {
        $this->shipTo = $value;
    }

}
