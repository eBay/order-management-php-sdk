<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used for seller provided shipment tracking information.
*/
class TrackingInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $shipmentTrackingNumber This string value represents the shipment tracking number of the package.
    */
    private ?string $shipmentTrackingNumber = null;
    
    /**
     * @var string|null $shippingCarrierCode This string value represents the shipping carrier used to ship the package.
    */
    private ?string $shippingCarrierCode = null;
    
    /**
     * Instantiates a new TrackingInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TrackingInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TrackingInfo {
        return new TrackingInfo();
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
            'shipmentTrackingNumber' => fn(ParseNode $n) => $o->setShipmentTrackingNumber($n->getStringValue()),
            'shippingCarrierCode' => fn(ParseNode $n) => $o->setShippingCarrierCode($n->getStringValue()),
        ];
    }

    /**
     * Gets the shipmentTrackingNumber property value. This string value represents the shipment tracking number of the package.
     * @return string|null
    */
    public function getShipmentTrackingNumber(): ?string {
        return $this->shipmentTrackingNumber;
    }

    /**
     * Gets the shippingCarrierCode property value. This string value represents the shipping carrier used to ship the package.
     * @return string|null
    */
    public function getShippingCarrierCode(): ?string {
        return $this->shippingCarrierCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('shipmentTrackingNumber', $this->getShipmentTrackingNumber());
        $writer->writeStringValue('shippingCarrierCode', $this->getShippingCarrierCode());
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
     * Sets the shipmentTrackingNumber property value. This string value represents the shipment tracking number of the package.
     * @param string|null $value Value to set for the shipmentTrackingNumber property.
    */
    public function setShipmentTrackingNumber(?string $value): void {
        $this->shipmentTrackingNumber = $value;
    }

    /**
     * Sets the shippingCarrierCode property value. This string value represents the shipping carrier used to ship the package.
     * @param string|null $value Value to set for the shippingCarrierCode property.
    */
    public function setShippingCarrierCode(?string $value): void {
        $this->shippingCarrierCode = $value;
    }

}
