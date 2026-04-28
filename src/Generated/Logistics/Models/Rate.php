<?php

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This complex type contains live quote information about a shipping service that's available for a given shipping quote request, including the shipping carrier and service, delivery window, shipping cost, and additional shipping options.
*/
class Rate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AdditionalOption>|null $additionalOptions Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as <code>INSURANCE</code> and <code>SIGNATURE</code>.
    */
    private ?array $additionalOptions = null;
    
    /**
     * @var Amount|null $baseShippingCost A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $baseShippingCost = null;
    
    /**
     * @var string|null $destinationTimeZone The name of the time zone region, as defined in the <a href="http://www.iana.org/time-zones "  target="_blank">IANA Time Zone Database</a>, to which the package is being shipped.  <br><br>Delivery dates are calculated relative to this time zone.  <br><br><span class="tablenote"><strong>Note:</strong> This is different from a Coordinated Universal Time (UTC) offset. For example, the <i>America/Los_Angeles</i> time zone identifies a region with the UTC standard time offset of <code>-08:00</code>, but so do several other time zones, including <i>America/Tijuana</i>,<i>America/Dawson</i>, and <i>Pacific/Pitcairn</i>.</span>
    */
    private ?string $destinationTimeZone = null;
    
    /**
     * @var string|null $maxEstimatedDeliveryDate The latest stated date and time the shipment will be delivered at this rate.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
    */
    private ?string $maxEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $minEstimatedDeliveryDate The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string.
    */
    private ?string $minEstimatedDeliveryDate = null;
    
    /**
     * @var array<string>|null $pickupNetworks A list of pickup networks compatible with the shipping service.
    */
    private ?array $pickupNetworks = null;
    
    /**
     * @var array<PickupSlot>|null $pickupSlots A list of available pickup slots for the package.
    */
    private ?array $pickupSlots = null;
    
    /**
     * @var string|null $pickupType The type of pickup or drop-off service associated with the <b>pickupSlots</b> time frames. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
    */
    private ?string $pickupType = null;
    
    /**
     * @var string|null $rateId The unique eBay-assigned ID for this shipping rate.
    */
    private ?string $rateId = null;
    
    /**
     * @var array<string>|null $rateRecommendation A list of reasons this rate is recommended. Available values are: <ul> <li><code>BUYER_CHOSEN</code> &mdash; The rate meets or exceeds the requirements of the buyer's preferred shipping option.</li> <li><code>CHEAPEST_ON_TIME</code> &mdash; The rate is the cheapest rate available that will provide delivery within the seller's time frame commitment.</li>  <li><code>EBAY_PLUS_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Plus program.</li> <li><code>FASTEST_ON_TIME</code> &mdash; The rate has the fastest shipping time, and will provide delivery within the seller's time frame commitment.</li> <li><code>GUARANTEED_DELIVERY_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program.</li></ul>
    */
    private ?array $rateRecommendation = null;
    
    /**
     * @var string|null $shippingCarrierCode The code name of the shipping carrier who will provide the service identified by <b>shippingServiceCode</b>.
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * @var string|null $shippingCarrierName The common name of the shipping carrier.
    */
    private ?string $shippingCarrierName = null;
    
    /**
     * @var string|null $shippingServiceCode The code name of the shipping service to be provided by the carrier identified by <b>shippingCarrierCode</b>.
    */
    private ?string $shippingServiceCode = null;
    
    /**
     * @var string|null $shippingServiceName The common name of the shipping service.
    */
    private ?string $shippingServiceName = null;
    
    /**
     * Instantiates a new Rate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Rate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Rate {
        return new Rate();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalOptions property value. Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as <code>INSURANCE</code> and <code>SIGNATURE</code>.
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
     * Gets the destinationTimeZone property value. The name of the time zone region, as defined in the <a href="http://www.iana.org/time-zones "  target="_blank">IANA Time Zone Database</a>, to which the package is being shipped.  <br><br>Delivery dates are calculated relative to this time zone.  <br><br><span class="tablenote"><strong>Note:</strong> This is different from a Coordinated Universal Time (UTC) offset. For example, the <i>America/Los_Angeles</i> time zone identifies a region with the UTC standard time offset of <code>-08:00</code>, but so do several other time zones, including <i>America/Tijuana</i>,<i>America/Dawson</i>, and <i>Pacific/Pitcairn</i>.</span>
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
            'pickupSlots' => fn(ParseNode $n) => $o->setPickupSlots($n->getCollectionOfObjectValues([PickupSlot::class, 'createFromDiscriminatorValue'])),
            'pickupType' => fn(ParseNode $n) => $o->setPickupType($n->getStringValue()),
            'rateId' => fn(ParseNode $n) => $o->setRateId($n->getStringValue()),
            'rateRecommendation' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setRateRecommendation($val);
            },
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
            'shippingCarrierName' => fn(ParseNode $n) => $o->setShippingCarrierName($n->getStringValue()),
            'shippingServiceCode' => fn(ParseNode $n) => $o->setShippingServiceCode($n->getStringValue()),
            'shippingServiceName' => fn(ParseNode $n) => $o->setShippingServiceName($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxEstimatedDeliveryDate property value. The latest stated date and time the shipment will be delivered at this rate.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @return string|null
    */
    public function getMaxEstimatedDeliveryDate(): ?string {
        return $this->maxEstimatedDeliveryDate;
    }

    /**
     * Gets the minEstimatedDeliveryDate property value. The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string.
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
     * Gets the pickupSlots property value. A list of available pickup slots for the package.
     * @return array<PickupSlot>|null
    */
    public function getPickupSlots(): ?array {
        return $this->pickupSlots;
    }

    /**
     * Gets the pickupType property value. The type of pickup or drop-off service associated with the <b>pickupSlots</b> time frames. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPickupType(): ?string {
        return $this->pickupType;
    }

    /**
     * Gets the rateId property value. The unique eBay-assigned ID for this shipping rate.
     * @return string|null
    */
    public function getRateId(): ?string {
        return $this->rateId;
    }

    /**
     * Gets the rateRecommendation property value. A list of reasons this rate is recommended. Available values are: <ul> <li><code>BUYER_CHOSEN</code> &mdash; The rate meets or exceeds the requirements of the buyer's preferred shipping option.</li> <li><code>CHEAPEST_ON_TIME</code> &mdash; The rate is the cheapest rate available that will provide delivery within the seller's time frame commitment.</li>  <li><code>EBAY_PLUS_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Plus program.</li> <li><code>FASTEST_ON_TIME</code> &mdash; The rate has the fastest shipping time, and will provide delivery within the seller's time frame commitment.</li> <li><code>GUARANTEED_DELIVERY_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program.</li></ul>
     * @return array<string>|null
    */
    public function getRateRecommendation(): ?array {
        return $this->rateRecommendation;
    }

    /**
     * Gets the shippingCarrierCode property value. The code name of the shipping carrier who will provide the service identified by <b>shippingServiceCode</b>.
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Gets the shippingCarrierName property value. The common name of the shipping carrier.
     * @return string|null
    */
    public function getShippingCarrierName(): ?string {
        return $this->shippingCarrierName;
    }

    /**
     * Gets the shippingServiceCode property value. The code name of the shipping service to be provided by the carrier identified by <b>shippingCarrierCode</b>.
     * @return string|null
    */
    public function getShippingServiceCode(): ?string {
        return $this->shippingServiceCode;
    }

    /**
     * Gets the shippingServiceName property value. The common name of the shipping service.
     * @return string|null
    */
    public function getShippingServiceName(): ?string {
        return $this->shippingServiceName;
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
        $writer->writeCollectionOfObjectValues('pickupSlots', $this->getPickupSlots());
        $writer->writeStringValue('pickupType', $this->getPickupType());
        $writer->writeStringValue('rateId', $this->getRateId());
        $writer->writeCollectionOfPrimitiveValues('rateRecommendation', $this->getRateRecommendation());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
        $writer->writeStringValue('shippingCarrierName', $this->getShippingCarrierName());
        $writer->writeStringValue('shippingServiceCode', $this->getShippingServiceCode());
        $writer->writeStringValue('shippingServiceName', $this->getShippingServiceName());
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
     * Sets the additionalOptions property value. Contains service and pricing information for one or more shipping options that are offered by the carrier and can be purchased in addition to the base shipping service provided by this rate. Shipping options can include items such as <code>INSURANCE</code> and <code>SIGNATURE</code>.
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
     * Sets the destinationTimeZone property value. The name of the time zone region, as defined in the <a href="http://www.iana.org/time-zones "  target="_blank">IANA Time Zone Database</a>, to which the package is being shipped.  <br><br>Delivery dates are calculated relative to this time zone.  <br><br><span class="tablenote"><strong>Note:</strong> This is different from a Coordinated Universal Time (UTC) offset. For example, the <i>America/Los_Angeles</i> time zone identifies a region with the UTC standard time offset of <code>-08:00</code>, but so do several other time zones, including <i>America/Tijuana</i>,<i>America/Dawson</i>, and <i>Pacific/Pitcairn</i>.</span>
     * @param string|null $value Value to set for the destinationTimeZone property.
    */
    public function setDestinationTimeZone(?string $value): void {
        $this->destinationTimeZone = $value;
    }

    /**
     * Sets the maxEstimatedDeliveryDate property value. The latest stated date and time the shipment will be delivered at this rate.  <br><br>The time stamp is formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @param string|null $value Value to set for the maxEstimatedDeliveryDate property.
    */
    public function setMaxEstimatedDeliveryDate(?string $value): void {
        $this->maxEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the minEstimatedDeliveryDate property value. The estimated earliest date and time the shipment will be delivered at this rate. The time stamp is formatted as an ISO 8601 UTC string.
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
     * Sets the pickupSlots property value. A list of available pickup slots for the package.
     * @param array<PickupSlot>|null $value Value to set for the pickupSlots property.
    */
    public function setPickupSlots(?array $value): void {
        $this->pickupSlots = $value;
    }

    /**
     * Sets the pickupType property value. The type of pickup or drop-off service associated with the <b>pickupSlots</b> time frames. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/logistics/types/api:PickupTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the pickupType property.
    */
    public function setPickupType(?string $value): void {
        $this->pickupType = $value;
    }

    /**
     * Sets the rateId property value. The unique eBay-assigned ID for this shipping rate.
     * @param string|null $value Value to set for the rateId property.
    */
    public function setRateId(?string $value): void {
        $this->rateId = $value;
    }

    /**
     * Sets the rateRecommendation property value. A list of reasons this rate is recommended. Available values are: <ul> <li><code>BUYER_CHOSEN</code> &mdash; The rate meets or exceeds the requirements of the buyer's preferred shipping option.</li> <li><code>CHEAPEST_ON_TIME</code> &mdash; The rate is the cheapest rate available that will provide delivery within the seller's time frame commitment.</li>  <li><code>EBAY_PLUS_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Plus program.</li> <li><code>FASTEST_ON_TIME</code> &mdash; The rate has the fastest shipping time, and will provide delivery within the seller's time frame commitment.</li> <li><code>GUARANTEED_DELIVERY_OK</code> &mdash; The rate complies with the shipping requirements of the eBay Guaranteed Delivery program.</li></ul>
     * @param array<string>|null $value Value to set for the rateRecommendation property.
    */
    public function setRateRecommendation(?array $value): void {
        $this->rateRecommendation = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. The code name of the shipping carrier who will provide the service identified by <b>shippingServiceCode</b>.
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

    /**
     * Sets the shippingCarrierName property value. The common name of the shipping carrier.
     * @param string|null $value Value to set for the shippingCarrierName property.
    */
    public function setShippingCarrierName(?string $value): void {
        $this->shippingCarrierName = $value;
    }

    /**
     * Sets the shippingServiceCode property value. The code name of the shipping service to be provided by the carrier identified by <b>shippingCarrierCode</b>.
     * @param string|null $value Value to set for the shippingServiceCode property.
    */
    public function setShippingServiceCode(?string $value): void {
        $this->shippingServiceCode = $value;
    }

    /**
     * Sets the shippingServiceName property value. The common name of the shipping service.
     * @param string|null $value Value to set for the shippingServiceName property.
    */
    public function setShippingServiceName(?string $value): void {
        $this->shippingServiceName = $value;
    }

}
