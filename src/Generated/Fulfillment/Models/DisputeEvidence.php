<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <strong>evidence</strong> array that is returned in the <strong>getPaymentDispute</strong> response if one or more evidential documents are associated with the payment dispute. 
*/
class DisputeEvidence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $evidenceId Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
    */
    private ?string $evidenceId = null;
    
    /**
     * @var string|null $evidenceType This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
    */
    private ?string $evidenceType = null;
    
    /**
     * @var array<FileInfo>|null $files This array shows the name, ID, file type, and upload date for each provided file.
    */
    private ?array $files = null;
    
    /**
     * @var array<OrderLineItems>|null $lineItems This array shows one or more order line items associated with the evidential document that has been provided.
    */
    private ?array $lineItems = null;
    
    /**
     * @var string|null $providedDate The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $providedDate = null;
    
    /**
     * @var string|null $requestDate The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $requestDate = null;
    
    /**
     * @var string|null $respondByDate The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $respondByDate = null;
    
    /**
     * @var array<TrackingInfo>|null $shipmentTracking This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the <strong>evidence</strong> container if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code> for an INR-related payment dispute.
    */
    private ?array $shipmentTracking = null;
    
    /**
     * Instantiates a new DisputeEvidence and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisputeEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisputeEvidence {
        return new DisputeEvidence();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the evidenceId property value. Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     * @return string|null
    */
    public function getEvidenceId(): ?string {
        return $this->evidenceId;
    }

    /**
     * Gets the evidenceType property value. This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEvidenceType(): ?string {
        return $this->evidenceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evidenceId' => fn(ParseNode $n) => $o->setEvidenceId($n->getStringValue()),
            'evidenceType' => fn(ParseNode $n) => $o->setEvidenceType($n->getStringValue()),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileInfo::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([OrderLineItems::class, 'createFromDiscriminatorValue'])),
            'providedDate' => fn(ParseNode $n) => $o->setProvidedDate($n->getStringValue()),
            'requestDate' => fn(ParseNode $n) => $o->setRequestDate($n->getStringValue()),
            'respondByDate' => fn(ParseNode $n) => $o->setRespondByDate($n->getStringValue()),
            'shipmentTracking' => fn(ParseNode $n) => $o->setShipmentTracking($n->getCollectionOfObjectValues([TrackingInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the files property value. This array shows the name, ID, file type, and upload date for each provided file.
     * @return array<FileInfo>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the lineItems property value. This array shows one or more order line items associated with the evidential document that has been provided.
     * @return array<OrderLineItems>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the providedDate property value. The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getProvidedDate(): ?string {
        return $this->providedDate;
    }

    /**
     * Gets the requestDate property value. The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getRequestDate(): ?string {
        return $this->requestDate;
    }

    /**
     * Gets the respondByDate property value. The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getRespondByDate(): ?string {
        return $this->respondByDate;
    }

    /**
     * Gets the shipmentTracking property value. This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the <strong>evidence</strong> container if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code> for an INR-related payment dispute.
     * @return array<TrackingInfo>|null
    */
    public function getShipmentTracking(): ?array {
        return $this->shipmentTracking;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('evidenceId', $this->getEvidenceId());
        $writer->writeStringValue('evidenceType', $this->getEvidenceType());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeStringValue('providedDate', $this->getProvidedDate());
        $writer->writeStringValue('requestDate', $this->getRequestDate());
        $writer->writeStringValue('respondByDate', $this->getRespondByDate());
        $writer->writeCollectionOfObjectValues('shipmentTracking', $this->getShipmentTracking());
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
     * Sets the evidenceId property value. Unique identifier of the evidential file set. Potentially, each evidential file set can have more than one file, that is why there is this file set identifier, and then an identifier for each file within this file set.
     * @param string|null $value Value to set for the evidenceId property.
    */
    public function setEvidenceId(?string $value): void {
        $this->evidenceId = $value;
    }

    /**
     * Sets the evidenceType property value. This enumeration value shows the type of evidential file provided. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the evidenceType property.
    */
    public function setEvidenceType(?string $value): void {
        $this->evidenceType = $value;
    }

    /**
     * Sets the files property value. This array shows the name, ID, file type, and upload date for each provided file.
     * @param array<FileInfo>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the lineItems property value. This array shows one or more order line items associated with the evidential document that has been provided.
     * @param array<OrderLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the providedDate property value. The timestamp in this field shows the date/time when the seller provided a requested evidential document to eBay. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the providedDate property.
    */
    public function setProvidedDate(?string $value): void {
        $this->providedDate = $value;
    }

    /**
     * Sets the requestDate property value. The timestamp in this field shows the date/time when eBay requested the evidential document from the seller in response to a payment dispute. <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the requestDate property.
    */
    public function setRequestDate(?string $value): void {
        $this->requestDate = $value;
    }

    /**
     * Sets the respondByDate property value. The timestamp in this field shows the date/time when the seller was expected to provide a requested evidential document to eBay.  <br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the respondByDate property.
    */
    public function setRespondByDate(?string $value): void {
        $this->respondByDate = $value;
    }

    /**
     * Sets the shipmentTracking property value. This array shows the shipping carrier and shipment tracking number associated with each shipment package of the order. This array is returned under the <strong>evidence</strong> container if the seller has provided shipment tracking information as evidence to support <code>PROOF_OF_DELIVERY</code> for an INR-related payment dispute.
     * @param array<TrackingInfo>|null $value Value to set for the shipmentTracking property.
    */
    public function setShipmentTracking(?array $value): void {
        $this->shipmentTracking = $value;
    }

}
