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
 * This complex type describes a "shipping quote," which contains the parameters for a package shipment. The shipping quote contains a list of "live quotes" or <i>rates</i> for the shipment. Rates are offered by a carrier for a particular service, or set of services, for shipping the package. Included in the shipping quote are the package specifications, the shipment's origin and destination addresses, and the shipping parameters specified by the seller.  <br><br>Use the <strong>rateId</strong> value to select the specific service you want when you create a shipment by calling <strong>createFromShippingQuote</strong>.
*/
class ShippingQuote implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $creationDate The date and time this quote was created, expressed as an ISO 8601 UTC string.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $expirationDate The last date and time that this quote will be honored, expressed as an ISO 8601 UTC string. After this time the quote expires and the expressed rates can no longer be purchased.
    */
    private ?string $expirationDate = null;
    
    /**
     * @var array<Order>|null $orders A list of one or more orders that will be shipped in the shipping package.
    */
    private ?array $orders = null;
    
    /**
     * @var PackageSpecification|null $packageSpecification The weight and dimensions of the package covered by this shipping quote.
    */
    private ?PackageSpecification $packageSpecification = null;
    
    /**
     * @var array<Rate>|null $rates A list of <i>rates</i> where each rate, as identified by a <strong>rateId</strong>, contains information about a specific shipping service offered by a carrier.  Rates include shipping carrier and service, the to and from locations, the pickup and delivery windows, the seller's shipping parameters, the service constraints, and the cost for the base service and a list of additional shipping options.<br><br><span class="tablenote"><strong>Note:</strong> The Logistics API only supports USPS shipping rates and labels.</span><br>Each rate offered is supported by a label service where you can purchase the rate, and associated shipping label, via a call to <strong>createFromShippingQuote</strong>.
    */
    private ?array $rates = null;
    
    /**
     * @var Contact|null $shipFrom The address and contact details for the origin of the shipment.
    */
    private ?Contact $shipFrom = null;
    
    /**
     * @var string|null $shippingQuoteId The unique eBay-assigned ID for this shipping quote. The value of this field is associated with a specific package, based on its origin, destination, and size.
    */
    private ?string $shippingQuoteId = null;
    
    /**
     * @var Contact|null $shipTo The address and contact details for the destination of the shipment.
    */
    private ?Contact $shipTo = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings A list of any warnings triggered by the request.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new ShippingQuote and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingQuote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingQuote {
        return new ShippingQuote();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the creationDate property value. The date and time this quote was created, expressed as an ISO 8601 UTC string.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the expirationDate property value. The last date and time that this quote will be honored, expressed as an ISO 8601 UTC string. After this time the quote expires and the expressed rates can no longer be purchased.
     * @return string|null
    */
    public function getExpirationDate(): ?string {
        return $this->expirationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'expirationDate' => fn(ParseNode $n) => $o->setExpirationDate($n->getStringValue()),
            'orders' => fn(ParseNode $n) => $o->setOrders($n->getCollectionOfObjectValues([Order::class, 'createFromDiscriminatorValue'])),
            'packageSpecification' => fn(ParseNode $n) => $o->setPackageSpecification($n->getObjectValue([PackageSpecification::class, 'createFromDiscriminatorValue'])),
            'rates' => fn(ParseNode $n) => $o->setRates($n->getCollectionOfObjectValues([Rate::class, 'createFromDiscriminatorValue'])),
            'shipFrom' => fn(ParseNode $n) => $o->setShipFrom($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'shippingQuoteId' => fn(ParseNode $n) => $o->setShippingQuoteId($n->getStringValue()),
            'shipTo' => fn(ParseNode $n) => $o->setShipTo($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the orders property value. A list of one or more orders that will be shipped in the shipping package.
     * @return array<Order>|null
    */
    public function getOrders(): ?array {
        return $this->orders;
    }

    /**
     * Gets the packageSpecification property value. The weight and dimensions of the package covered by this shipping quote.
     * @return PackageSpecification|null
    */
    public function getPackageSpecification(): ?PackageSpecification {
        return $this->packageSpecification;
    }

    /**
     * Gets the rates property value. A list of <i>rates</i> where each rate, as identified by a <strong>rateId</strong>, contains information about a specific shipping service offered by a carrier.  Rates include shipping carrier and service, the to and from locations, the pickup and delivery windows, the seller's shipping parameters, the service constraints, and the cost for the base service and a list of additional shipping options.<br><br><span class="tablenote"><strong>Note:</strong> The Logistics API only supports USPS shipping rates and labels.</span><br>Each rate offered is supported by a label service where you can purchase the rate, and associated shipping label, via a call to <strong>createFromShippingQuote</strong>.
     * @return array<Rate>|null
    */
    public function getRates(): ?array {
        return $this->rates;
    }

    /**
     * Gets the shipFrom property value. The address and contact details for the origin of the shipment.
     * @return Contact|null
    */
    public function getShipFrom(): ?Contact {
        return $this->shipFrom;
    }

    /**
     * Gets the shippingQuoteId property value. The unique eBay-assigned ID for this shipping quote. The value of this field is associated with a specific package, based on its origin, destination, and size.
     * @return string|null
    */
    public function getShippingQuoteId(): ?string {
        return $this->shippingQuoteId;
    }

    /**
     * Gets the shipTo property value. The address and contact details for the destination of the shipment.
     * @return Contact|null
    */
    public function getShipTo(): ?Contact {
        return $this->shipTo;
    }

    /**
     * Gets the warnings property value. A list of any warnings triggered by the request.
     * @return array<ErrorDetailV3>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('expirationDate', $this->getExpirationDate());
        $writer->writeCollectionOfObjectValues('orders', $this->getOrders());
        $writer->writeObjectValue('packageSpecification', $this->getPackageSpecification());
        $writer->writeCollectionOfObjectValues('rates', $this->getRates());
        $writer->writeObjectValue('shipFrom', $this->getShipFrom());
        $writer->writeStringValue('shippingQuoteId', $this->getShippingQuoteId());
        $writer->writeObjectValue('shipTo', $this->getShipTo());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the creationDate property value. The date and time this quote was created, expressed as an ISO 8601 UTC string.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the expirationDate property value. The last date and time that this quote will be honored, expressed as an ISO 8601 UTC string. After this time the quote expires and the expressed rates can no longer be purchased.
     * @param string|null $value Value to set for the expirationDate property.
    */
    public function setExpirationDate(?string $value): void {
        $this->expirationDate = $value;
    }

    /**
     * Sets the orders property value. A list of one or more orders that will be shipped in the shipping package.
     * @param array<Order>|null $value Value to set for the orders property.
    */
    public function setOrders(?array $value): void {
        $this->orders = $value;
    }

    /**
     * Sets the packageSpecification property value. The weight and dimensions of the package covered by this shipping quote.
     * @param PackageSpecification|null $value Value to set for the packageSpecification property.
    */
    public function setPackageSpecification(?PackageSpecification $value): void {
        $this->packageSpecification = $value;
    }

    /**
     * Sets the rates property value. A list of <i>rates</i> where each rate, as identified by a <strong>rateId</strong>, contains information about a specific shipping service offered by a carrier.  Rates include shipping carrier and service, the to and from locations, the pickup and delivery windows, the seller's shipping parameters, the service constraints, and the cost for the base service and a list of additional shipping options.<br><br><span class="tablenote"><strong>Note:</strong> The Logistics API only supports USPS shipping rates and labels.</span><br>Each rate offered is supported by a label service where you can purchase the rate, and associated shipping label, via a call to <strong>createFromShippingQuote</strong>.
     * @param array<Rate>|null $value Value to set for the rates property.
    */
    public function setRates(?array $value): void {
        $this->rates = $value;
    }

    /**
     * Sets the shipFrom property value. The address and contact details for the origin of the shipment.
     * @param Contact|null $value Value to set for the shipFrom property.
    */
    public function setShipFrom(?Contact $value): void {
        $this->shipFrom = $value;
    }

    /**
     * Sets the shippingQuoteId property value. The unique eBay-assigned ID for this shipping quote. The value of this field is associated with a specific package, based on its origin, destination, and size.
     * @param string|null $value Value to set for the shippingQuoteId property.
    */
    public function setShippingQuoteId(?string $value): void {
        $this->shippingQuoteId = $value;
    }

    /**
     * Sets the shipTo property value. The address and contact details for the destination of the shipment.
     * @param Contact|null $value Value to set for the shipTo property.
    */
    public function setShipTo(?Contact $value): void {
        $this->shipTo = $value;
    }

    /**
     * Sets the warnings property value. A list of any warnings triggered by the request.
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
