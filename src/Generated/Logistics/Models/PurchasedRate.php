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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The "rate" that has been selected and purchased for the shipment, as referenced by the <b>rateId</b> value.
*/
class PurchasedRate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AdditionalOption>|null $additionalOptions An list of additional, optional features that have been purchased for the shipment.
    */
    private ?array $additionalOptions = null;
    
    /**
     * @var Amount|null $baseShippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $baseShippingCost = null;
    
    /**
     * @var string|null $destinationTimeZone The time zone of the destination according to <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a>. For example, "America/Los_Angeles".
    */
    private ?string $destinationTimeZone = null;
    
    /**
     * @var string|null $maxEstimatedDeliveryDate A string value representing maximum (latest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
    */
    private ?string $maxEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $minEstimatedDeliveryDate A string value representing minimum (earliest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a>ISO 8601</a> UTC string.
    */
    private ?string $minEstimatedDeliveryDate = null;
    
    /**
     * @var array<string>|null $pickupNetworks A list of pickup networks compatible with the shipping service.
    */
    private ?array $pickupNetworks = null;
    
    /**
     * @var string|null $pickupSlotId This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup.
    */
    private ?string $pickupSlotId = null;
    
    /**
     * @var string|null $pickupType The type of pickup or drop off configured for the shipment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
    */
    private ?string $pickupType = null;
    
    /**
     * @var string|null $rateId The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment.
    */
    private ?string $rateId = null;
    
    /**
     * @var string|null $shippingCarrierCode The ID code for the carrier that was selected for the package shipment.
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var string|null $shippingCarrierName The name of the shipping carrier.
    */
    private ?string $shippingCarrierName = null;
    
    /**
     * @var string|null $shippingQuoteId The unique eBay-generated ID of the <i>shipping quote</i> from which the seller selected a shipping rate (<b>rateId</b>).
    */
    private ?string $shippingQuoteId = null;
    
    /**
     * @var string|null $shippingServiceCode String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies.
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * @var string|null $shippingServiceName The name of the shipping service.
    */
    private ?string $shippingServiceName = null;
    
    /**
     * @var Amount|null $totalShippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $totalShippingCost = null;
    
    /**
     * Instantiates a new PurchasedRate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PurchasedRate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PurchasedRate {
        return new PurchasedRate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalOptions property value. An list of additional, optional features that have been purchased for the shipment.
     * @return array<AdditionalOption>|null
    */
    public function getAdditionalOptions(): ?array {
        return $this->additionalOptions;
    }

    /**
     * Gets the baseShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getBaseShippingCost(): ?Amount {
        return $this->baseShippingCost;
    }

    /**
     * Gets the destinationTimeZone property value. The time zone of the destination according to <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a>. For example, "America/Los_Angeles".
     * @return string|null
    */
    public function getDestinationTimeZone(): ?string {
        return $this->destinationTimeZone;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalOptions' => fn(ParseNode $n) => $o->setAdditionalOptions($n->getCollectionOfObjectValues([AdditionalOption::class, 'createFromDiscriminatorValue'])),
            'baseShippingCost' => fn(ParseNode $n) => $o->setBaseShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'destinationTimeZone' => fn(ParseNode $n) => $o->setDestinationTimeZone($n->getStringValue()),
            'maxEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMaxEstimatedDeliveryDate($n->getStringValue()),
            'minEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMinEstimatedDeliveryDate($n->getStringValue()),
            'pickupNetworks' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setPickupNetworks($val);
            },
            'pickupSlotId' => fn(ParseNode $n) => $o->setPickupSlotId($n->getStringValue()),
            'pickupType' => fn(ParseNode $n) => $o->setPickupType($n->getStringValue()),
            'rateId' => fn(ParseNode $n) => $o->setRateId($n->getStringValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'shippingCarrierName' => fn(ParseNode $n) => $o->setShippingCarrierName($n->getStringValue()),
            'shippingQuoteId' => fn(ParseNode $n) => $o->setShippingQuoteId($n->getStringValue()),
            'shippingServiceCode' => fn(ParseNode $n) => $o->setShippingServiceCode($n->getStringValue()),
            'shippingServiceName' => fn(ParseNode $n) => $o->setShippingServiceName($n->getStringValue()),
            'totalShippingCost' => fn(ParseNode $n) => $o->setTotalShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the maxEstimatedDeliveryDate property value. A string value representing maximum (latest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @return string|null
    */
    public function getMaxEstimatedDeliveryDate(): ?string {
        return $this->maxEstimatedDeliveryDate;
    }

    /**
     * Gets the minEstimatedDeliveryDate property value. A string value representing minimum (earliest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a>ISO 8601</a> UTC string.
     * @return string|null
    */
    public function getMinEstimatedDeliveryDate(): ?string {
        return $this->minEstimatedDeliveryDate;
    }

    /**
     * Gets the pickupNetworks property value. A list of pickup networks compatible with the shipping service.
     * @return array<string>|null
    */
    public function getPickupNetworks(): ?array {
        return $this->pickupNetworks;
    }

    /**
     * Gets the pickupSlotId property value. This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup.
     * @return string|null
    */
    public function getPickupSlotId(): ?string {
        return $this->pickupSlotId;
    }

    /**
     * Gets the pickupType property value. The type of pickup or drop off configured for the shipment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPickupType(): ?string {
        return $this->pickupType;
    }

    /**
     * Gets the rateId property value. The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment.
     * @return string|null
    */
    public function getRateId(): ?string {
        return $this->rateId;
    }

    /**
     * Gets the shippingCarrierCode property value. The ID code for the carrier that was selected for the package shipment.
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the shippingCarrierName property value. The name of the shipping carrier.
     * @return string|null
    */
    public function getShippingCarrierName(): ?string {
        return $this->shippingCarrierName;
    }

    /**
     * Gets the shippingQuoteId property value. The unique eBay-generated ID of the <i>shipping quote</i> from which the seller selected a shipping rate (<b>rateId</b>).
     * @return string|null
    */
    public function getShippingQuoteId(): ?string {
        return $this->shippingQuoteId;
    }

    /**
     * Gets the shippingServiceCode property value. String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies.
     * @return string|null
    */
    public function getShippingServiceCode(): ?string {
        return $this->shippingServiceCode;
    }

    /**
     * Gets the shippingServiceName property value. The name of the shipping service.
     * @return string|null
    */
    public function getShippingServiceName(): ?string {
        return $this->shippingServiceName;
    }

    /**
     * Gets the totalShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getTotalShippingCost(): ?Amount {
        return $this->totalShippingCost;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('additionalOptions', $this->getAdditionalOptions());
        $writer->writeObjectValue('baseShippingCost', $this->getBaseShippingCost());
        $writer->writeStringValue('destinationTimeZone', $this->getDestinationTimeZone());
        $writer->writeStringValue('maxEstimatedDeliveryDate', $this->getMaxEstimatedDeliveryDate());
        $writer->writeStringValue('minEstimatedDeliveryDate', $this->getMinEstimatedDeliveryDate());
        $writer->writeCollectionOfPrimitiveValues('pickupNetworks', $this->getPickupNetworks());
        $writer->writeStringValue('pickupSlotId', $this->getPickupSlotId());
        $writer->writeStringValue('pickupType', $this->getPickupType());
        $writer->writeStringValue('rateId', $this->getRateId());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
        $writer->writeStringValue('shippingCarrierName', $this->getShippingCarrierName());
        $writer->writeStringValue('shippingQuoteId', $this->getShippingQuoteId());
        $writer->writeStringValue('shippingServiceCode', $this->getShippingServiceCode());
        $writer->writeStringValue('shippingServiceName', $this->getShippingServiceName());
        $writer->writeObjectValue('totalShippingCost', $this->getTotalShippingCost());
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
     * Sets the additionalOptions property value. An list of additional, optional features that have been purchased for the shipment.
     * @param array<AdditionalOption>|null $value Value to set for the additionalOptions property.
    */
    public function setAdditionalOptions(?array $value): void {
        $this->additionalOptions = $value;
    }

    /**
     * Sets the baseShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the baseShippingCost property.
    */
    public function setBaseShippingCost(?Amount $value): void {
        $this->baseShippingCost = $value;
    }

    /**
     * Sets the destinationTimeZone property value. The time zone of the destination according to <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a>. For example, "America/Los_Angeles".
     * @param string|null $value Value to set for the destinationTimeZone property.
    */
    public function setDestinationTimeZone(?string $value): void {
        $this->destinationTimeZone = $value;
    }

    /**
     * Sets the maxEstimatedDeliveryDate property value. A string value representing maximum (latest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @param string|null $value Value to set for the maxEstimatedDeliveryDate property.
    */
    public function setMaxEstimatedDeliveryDate(?string $value): void {
        $this->maxEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the minEstimatedDeliveryDate property value. A string value representing minimum (earliest) estimated delivery time, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a>ISO 8601</a> UTC string.
     * @param string|null $value Value to set for the minEstimatedDeliveryDate property.
    */
    public function setMinEstimatedDeliveryDate(?string $value): void {
        $this->minEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the pickupNetworks property value. A list of pickup networks compatible with the shipping service.
     * @param array<string>|null $value Value to set for the pickupNetworks property.
    */
    public function setPickupNetworks(?array $value): void {
        $this->pickupNetworks = $value;
    }

    /**
     * Sets the pickupSlotId property value. This unique eBay-assigned ID value is returned only if the shipment has been configured for a scheduled pickup.
     * @param string|null $value Value to set for the pickupSlotId property.
    */
    public function setPickupSlotId(?string $value): void {
        $this->pickupSlotId = $value;
    }

    /**
     * Sets the pickupType property value. The type of pickup or drop off configured for the shipment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the pickupType property.
    */
    public function setPickupType(?string $value): void {
        $this->pickupType = $value;
    }

    /**
     * Sets the rateId property value. The eBay-generated ID of the shipping rate that the seller has chosen to purchase for the shipment.
     * @param string|null $value Value to set for the rateId property.
    */
    public function setRateId(?string $value): void {
        $this->rateId = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. The ID code for the carrier that was selected for the package shipment.
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the shippingCarrierName property value. The name of the shipping carrier.
     * @param string|null $value Value to set for the shippingCarrierName property.
    */
    public function setShippingCarrierName(?string $value): void {
        $this->shippingCarrierName = $value;
    }

    /**
     * Sets the shippingQuoteId property value. The unique eBay-generated ID of the <i>shipping quote</i> from which the seller selected a shipping rate (<b>rateId</b>).
     * @param string|null $value Value to set for the shippingQuoteId property.
    */
    public function setShippingQuoteId(?string $value): void {
        $this->shippingQuoteId = $value;
    }

    /**
     * Sets the shippingServiceCode property value. String ID code for the shipping service selected for the package shipment. This is a service that the shipping carrier supplies.
     * @param string|null $value Value to set for the shippingServiceCode property.
    */
    public function setShippingServiceCode(?string $value): void {
        $this->shippingServiceCode = $value;
    }

    /**
     * Sets the shippingServiceName property value. The name of the shipping service.
     * @param string|null $value Value to set for the shippingServiceName property.
    */
    public function setShippingServiceName(?string $value): void {
        $this->shippingServiceName = $value;
    }

    /**
     * Sets the totalShippingCost property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the totalShippingCost property.
    */
    public function setTotalShippingCost(?Amount $value): void {
        $this->totalShippingCost = $value;
    }

}
