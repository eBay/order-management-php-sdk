<?php

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type defines a time window for the pickup of a package.
*/
class PickupSlot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $pickupSlotEndTime The date and time the pickup slot ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
    */
    private ?string $pickupSlotEndTime = null;
    
    /**
     * @var string|null $pickupSlotId Seller-defined name for the pickup slot. <!-- Max characters? -->
    */
    private ?string $pickupSlotId = null;
    
    /**
     * @var string|null $pickupSlotStartTime The date and time the pickup slot begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> UTC string.
    */
    private ?string $pickupSlotStartTime = null;
    
    /**
     * @var string|null $pickupSlotTimeZone The time zone of the pickup location, returned as <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a> ID (also know as an Olson time zone ID).
    */
    private ?string $pickupSlotTimeZone = null;
    
    /**
     * Instantiates a new PickupSlot and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PickupSlot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PickupSlot {
        return new PickupSlot();
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
            'pickupSlotEndTime' => fn(ParseNode $n) => $o->setPickupSlotEndTime($n->getStringValue()),
            'pickupSlotId' => fn(ParseNode $n) => $o->setPickupSlotId($n->getStringValue()),
            'pickupSlotStartTime' => fn(ParseNode $n) => $o->setPickupSlotStartTime($n->getStringValue()),
            'pickupSlotTimeZone' => fn(ParseNode $n) => $o->setPickupSlotTimeZone($n->getStringValue()),
        ];
    }

    /**
     * Gets the pickupSlotEndTime property value. The date and time the pickup slot ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @return string|null
    */
    public function getPickupSlotEndTime(): ?string {
        return $this->pickupSlotEndTime;
    }

    /**
     * Gets the pickupSlotId property value. Seller-defined name for the pickup slot. <!-- Max characters? -->
     * @return string|null
    */
    public function getPickupSlotId(): ?string {
        return $this->pickupSlotId;
    }

    /**
     * Gets the pickupSlotStartTime property value. The date and time the pickup slot begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> UTC string.
     * @return string|null
    */
    public function getPickupSlotStartTime(): ?string {
        return $this->pickupSlotStartTime;
    }

    /**
     * Gets the pickupSlotTimeZone property value. The time zone of the pickup location, returned as <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a> ID (also know as an Olson time zone ID).
     * @return string|null
    */
    public function getPickupSlotTimeZone(): ?string {
        return $this->pickupSlotTimeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('pickupSlotEndTime', $this->getPickupSlotEndTime());
        $writer->writeStringValue('pickupSlotId', $this->getPickupSlotId());
        $writer->writeStringValue('pickupSlotStartTime', $this->getPickupSlotStartTime());
        $writer->writeStringValue('pickupSlotTimeZone', $this->getPickupSlotTimeZone());
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
     * Sets the pickupSlotEndTime property value. The date and time the pickup slot ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @param string|null $value Value to set for the pickupSlotEndTime property.
    */
    public function setPickupSlotEndTime(?string $value): void {
        $this->pickupSlotEndTime = $value;
    }

    /**
     * Sets the pickupSlotId property value. Seller-defined name for the pickup slot. <!-- Max characters? -->
     * @param string|null $value Value to set for the pickupSlotId property.
    */
    public function setPickupSlotId(?string $value): void {
        $this->pickupSlotId = $value;
    }

    /**
     * Sets the pickupSlotStartTime property value. The date and time the pickup slot begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> UTC string.
     * @param string|null $value Value to set for the pickupSlotStartTime property.
    */
    public function setPickupSlotStartTime(?string $value): void {
        $this->pickupSlotStartTime = $value;
    }

    /**
     * Sets the pickupSlotTimeZone property value. The time zone of the pickup location, returned as <a href="https://www.iana.org/time-zones " target="_blank">Time Zone Database</a> ID (also know as an Olson time zone ID).
     * @param string|null $value Value to set for the pickupSlotTimeZone property.
    */
    public function setPickupSlotTimeZone(?string $value): void {
        $this->pickupSlotTimeZone = $value;
    }

}
