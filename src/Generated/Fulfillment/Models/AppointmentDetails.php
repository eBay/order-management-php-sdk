<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information used by the installation provider concerning appointment details selected by the buyer
*/
class AppointmentDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $appointmentEndTime The date and time the appointment ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Required for tire installation. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:00:00.000Z</code>
    */
    private ?string $appointmentEndTime = null;
    
    /**
     * @var string|null $appointmentStartTime The date and time the appointment begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:10:00.000Z</code>
    */
    private ?string $appointmentStartTime = null;
    
    /**
     * @var string|null $appointmentStatus The status of the appointment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentStatusEnum'>eBay API documentation</a>
    */
    private ?string $appointmentStatus = null;
    
    /**
     * @var string|null $appointmentType The type of appointment. MACRO appointments only have a start time (not bounded with end time). TIME_SLOT appointments have a period (both start time and end time). Required for tire installation. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentTypeEnum'>eBay API documentation</a>
    */
    private ?string $appointmentType = null;
    
    /**
     * @var string|null $appointmentWindow Appointment window for MACRO appointments. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentWindowEnum'>eBay API documentation</a>
    */
    private ?string $appointmentWindow = null;
    
    /**
     * @var string|null $serviceProviderAppointmentDate Service provider date of the appointment (no time stamp). Returned only for MACRO appointment types.
    */
    private ?string $serviceProviderAppointmentDate = null;
    
    /**
     * Instantiates a new AppointmentDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppointmentDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppointmentDetails {
        return new AppointmentDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appointmentEndTime property value. The date and time the appointment ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Required for tire installation. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:00:00.000Z</code>
     * @return string|null
    */
    public function getAppointmentEndTime(): ?string {
        return $this->appointmentEndTime;
    }

    /**
     * Gets the appointmentStartTime property value. The date and time the appointment begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:10:00.000Z</code>
     * @return string|null
    */
    public function getAppointmentStartTime(): ?string {
        return $this->appointmentStartTime;
    }

    /**
     * Gets the appointmentStatus property value. The status of the appointment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAppointmentStatus(): ?string {
        return $this->appointmentStatus;
    }

    /**
     * Gets the appointmentType property value. The type of appointment. MACRO appointments only have a start time (not bounded with end time). TIME_SLOT appointments have a period (both start time and end time). Required for tire installation. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAppointmentType(): ?string {
        return $this->appointmentType;
    }

    /**
     * Gets the appointmentWindow property value. Appointment window for MACRO appointments. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentWindowEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAppointmentWindow(): ?string {
        return $this->appointmentWindow;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appointmentEndTime' => fn(ParseNode $n) => $o->setAppointmentEndTime($n->getStringValue()),
            'appointmentStartTime' => fn(ParseNode $n) => $o->setAppointmentStartTime($n->getStringValue()),
            'appointmentStatus' => fn(ParseNode $n) => $o->setAppointmentStatus($n->getStringValue()),
            'appointmentType' => fn(ParseNode $n) => $o->setAppointmentType($n->getStringValue()),
            'appointmentWindow' => fn(ParseNode $n) => $o->setAppointmentWindow($n->getStringValue()),
            'serviceProviderAppointmentDate' => fn(ParseNode $n) => $o->setServiceProviderAppointmentDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the serviceProviderAppointmentDate property value. Service provider date of the appointment (no time stamp). Returned only for MACRO appointment types.
     * @return string|null
    */
    public function getServiceProviderAppointmentDate(): ?string {
        return $this->serviceProviderAppointmentDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('appointmentEndTime', $this->getAppointmentEndTime());
        $writer->writeStringValue('appointmentStartTime', $this->getAppointmentStartTime());
        $writer->writeStringValue('appointmentStatus', $this->getAppointmentStatus());
        $writer->writeStringValue('appointmentType', $this->getAppointmentType());
        $writer->writeStringValue('appointmentWindow', $this->getAppointmentWindow());
        $writer->writeStringValue('serviceProviderAppointmentDate', $this->getServiceProviderAppointmentDate());
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
     * Sets the appointmentEndTime property value. The date and time the appointment ends, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock. Required for tire installation. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:00:00.000Z</code>
     * @param string|null $value Value to set for the appointmentEndTime property.
    */
    public function setAppointmentEndTime(?string $value): void {
        $this->appointmentEndTime = $value;
    }

    /**
     * Sets the appointmentStartTime property value. The date and time the appointment begins, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2022-10-28T00:10:00.000Z</code>
     * @param string|null $value Value to set for the appointmentStartTime property.
    */
    public function setAppointmentStartTime(?string $value): void {
        $this->appointmentStartTime = $value;
    }

    /**
     * Sets the appointmentStatus property value. The status of the appointment. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the appointmentStatus property.
    */
    public function setAppointmentStatus(?string $value): void {
        $this->appointmentStatus = $value;
    }

    /**
     * Sets the appointmentType property value. The type of appointment. MACRO appointments only have a start time (not bounded with end time). TIME_SLOT appointments have a period (both start time and end time). Required for tire installation. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the appointmentType property.
    */
    public function setAppointmentType(?string $value): void {
        $this->appointmentType = $value;
    }

    /**
     * Sets the appointmentWindow property value. Appointment window for MACRO appointments. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AppointmentWindowEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the appointmentWindow property.
    */
    public function setAppointmentWindow(?string $value): void {
        $this->appointmentWindow = $value;
    }

    /**
     * Sets the serviceProviderAppointmentDate property value. Service provider date of the appointment (no time stamp). Returned only for MACRO appointment types.
     * @param string|null $value Value to set for the serviceProviderAppointmentDate property.
    */
    public function setServiceProviderAppointmentDate(?string $value): void {
        $this->serviceProviderAppointmentDate = $value;
    }

}
