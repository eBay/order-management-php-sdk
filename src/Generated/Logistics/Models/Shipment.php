<?php

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type defines a shipment for a specific package (for example, a box or letter). Shipments are always linked to a purchased shipping label. 
*/
class Shipment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ShipmentCancellation|null $cancellation This type defines a shipment cancellation by the date and time the cancellation request was made and the current status of the request.
    */
    private ?ShipmentCancellation $cancellation = null;
    
    /**
     * @var string|null $creationDate The date and time the shipment was created, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $labelCustomMessage If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label.
    */
    private ?string $labelCustomMessage = null;
    
    /**
     * @var string|null $labelDownloadUrl The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See <a href="/api-docs/sell/logistics/resources/shipment/methods/downloadLabelFile">downloadLabelFile</a> for requesting different response file formats.
    */
    private ?string $labelDownloadUrl = null;
    
    /**
     * @var string|null $labelSize The seller's desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the <b>creaateFromShippingQuote</b> call matches a size the carrier supports, the value will be represented here in the shipment. <br><br>Currently, the only valid value is: <code>4"x6"</code>
    */
    private ?string $labelSize = null;
    
    /**
     * @var array<Order>|null $orders A list of one or more orders that will be shipped in the shipping package.
    */
    private ?array $orders = null;
    
    /**
     * @var PackageSpecification|null $packageSpecification This complex type specifies the dimensions and weight of a package.
    */
    private ?PackageSpecification $packageSpecification = null;
    
    /**
     * @var PurchasedRate|null $rate The "rate" that has been selected and purchased for the shipment, as referenced by the <b>rateId</b> value.
    */
    private ?PurchasedRate $rate = null;
    
    /**
     * @var Contact|null $returnTo This complex type contains contact information for an individual buyer or seller.
    */
    private ?Contact $returnTo = null;
    
    /**
     * @var Contact|null $shipFrom This complex type contains contact information for an individual buyer or seller.
    */
    private ?Contact $shipFrom = null;
    
    /**
     * @var string|null $shipmentId The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to <b>createFromShippingQuote</b>.
    */
    private ?string $shipmentId = null;
    
    /**
     * @var string|null $shipmentTrackingNumber A unique carrier-assigned ID string that can be used to track the shipment.
    */
    private ?string $shipmentTrackingNumber = null;
    
    /**
     * @var Contact|null $shipTo This complex type contains contact information for an individual buyer or seller.
    */
    private ?Contact $shipTo = null;
    
    /**
     * Instantiates a new Shipment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Shipment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Shipment {
        return new Shipment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancellation property value. This type defines a shipment cancellation by the date and time the cancellation request was made and the current status of the request.
     * @return ShipmentCancellation|null
    */
    public function getCancellation(): ?ShipmentCancellation {
        return $this->cancellation;
    }

    /**
     * Gets the creationDate property value. The date and time the shipment was created, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancellation' => fn(ParseNode $n) => $o->setCancellation($n->getObjectValue([ShipmentCancellation::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'labelCustomMessage' => fn(ParseNode $n) => $o->setLabelCustomMessage($n->getStringValue()),
            'labelDownloadUrl' => fn(ParseNode $n) => $o->setLabelDownloadUrl($n->getStringValue()),
            'labelSize' => fn(ParseNode $n) => $o->setLabelSize($n->getStringValue()),
            'orders' => fn(ParseNode $n) => $o->setOrders($n->getCollectionOfObjectValues([Order::class, 'createFromDiscriminatorValue'])),
            'packageSpecification' => fn(ParseNode $n) => $o->setPackageSpecification($n->getObjectValue([PackageSpecification::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([PurchasedRate::class, 'createFromDiscriminatorValue'])),
            'returnTo' => fn(ParseNode $n) => $o->setReturnTo($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'shipFrom' => fn(ParseNode $n) => $o->setShipFrom($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
            'shipmentId' => fn(ParseNode $n) => $o->setShipmentId($n->getStringValue()),
            'shipmentTrackingNumber' => fn(ParseNode $n) => $o->setShipmentTrackingNumber($n->getStringValue()),
            'shipTo' => fn(ParseNode $n) => $o->setShipTo($n->getObjectValue([Contact::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the labelCustomMessage property value. If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label.
     * @return string|null
    */
    public function getLabelCustomMessage(): ?string {
        return $this->labelCustomMessage;
    }

    /**
     * Gets the labelDownloadUrl property value. The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See <a href="/api-docs/sell/logistics/resources/shipment/methods/downloadLabelFile">downloadLabelFile</a> for requesting different response file formats.
     * @return string|null
    */
    public function getLabelDownloadUrl(): ?string {
        return $this->labelDownloadUrl;
    }

    /**
     * Gets the labelSize property value. The seller's desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the <b>creaateFromShippingQuote</b> call matches a size the carrier supports, the value will be represented here in the shipment. <br><br>Currently, the only valid value is: <code>4"x6"</code>
     * @return string|null
    */
    public function getLabelSize(): ?string {
        return $this->labelSize;
    }

    /**
     * Gets the orders property value. A list of one or more orders that will be shipped in the shipping package.
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
     * Gets the rate property value. The "rate" that has been selected and purchased for the shipment, as referenced by the <b>rateId</b> value.
     * @return PurchasedRate|null
    */
    public function getRate(): ?PurchasedRate {
        return $this->rate;
    }

    /**
     * Gets the returnTo property value. This complex type contains contact information for an individual buyer or seller.
     * @return Contact|null
    */
    public function getReturnTo(): ?Contact {
        return $this->returnTo;
    }

    /**
     * Gets the shipFrom property value. This complex type contains contact information for an individual buyer or seller.
     * @return Contact|null
    */
    public function getShipFrom(): ?Contact {
        return $this->shipFrom;
    }

    /**
     * Gets the shipmentId property value. The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to <b>createFromShippingQuote</b>.
     * @return string|null
    */
    public function getShipmentId(): ?string {
        return $this->shipmentId;
    }

    /**
     * Gets the shipmentTrackingNumber property value. A unique carrier-assigned ID string that can be used to track the shipment.
     * @return string|null
    */
    public function getShipmentTrackingNumber(): ?string {
        return $this->shipmentTrackingNumber;
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
        $writer->writeObjectValue('cancellation', $this->getCancellation());
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('labelCustomMessage', $this->getLabelCustomMessage());
        $writer->writeStringValue('labelDownloadUrl', $this->getLabelDownloadUrl());
        $writer->writeStringValue('labelSize', $this->getLabelSize());
        $writer->writeCollectionOfObjectValues('orders', $this->getOrders());
        $writer->writeObjectValue('packageSpecification', $this->getPackageSpecification());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('returnTo', $this->getReturnTo());
        $writer->writeObjectValue('shipFrom', $this->getShipFrom());
        $writer->writeStringValue('shipmentId', $this->getShipmentId());
        $writer->writeStringValue('shipmentTrackingNumber', $this->getShipmentTrackingNumber());
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
     * Sets the cancellation property value. This type defines a shipment cancellation by the date and time the cancellation request was made and the current status of the request.
     * @param ShipmentCancellation|null $value Value to set for the cancellation property.
    */
    public function setCancellation(?ShipmentCancellation $value): void {
        $this->cancellation = $value;
    }

    /**
     * Sets the creationDate property value. The date and time the shipment was created, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock.  <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2018-08-20T07:09:00.000Z</code>
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the labelCustomMessage property value. If supported by the selected shipping carrier, this field can contain optional seller text to be printed on the shipping label.
     * @param string|null $value Value to set for the labelCustomMessage property.
    */
    public function setLabelCustomMessage(?string $value): void {
        $this->labelCustomMessage = $value;
    }

    /**
     * Sets the labelDownloadUrl property value. The direct URL the seller can use to download an image of the shipping label. By default, the file format is PDF. See <a href="/api-docs/sell/logistics/resources/shipment/methods/downloadLabelFile">downloadLabelFile</a> for requesting different response file formats.
     * @param string|null $value Value to set for the labelDownloadUrl property.
    */
    public function setLabelDownloadUrl(?string $value): void {
        $this->labelDownloadUrl = $value;
    }

    /**
     * Sets the labelSize property value. The seller's desired label size. The support for multi-sized labels is shipping-carrier specific and if the size requested in the <b>creaateFromShippingQuote</b> call matches a size the carrier supports, the value will be represented here in the shipment. <br><br>Currently, the only valid value is: <code>4"x6"</code>
     * @param string|null $value Value to set for the labelSize property.
    */
    public function setLabelSize(?string $value): void {
        $this->labelSize = $value;
    }

    /**
     * Sets the orders property value. A list of one or more orders that will be shipped in the shipping package.
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
     * Sets the rate property value. The "rate" that has been selected and purchased for the shipment, as referenced by the <b>rateId</b> value.
     * @param PurchasedRate|null $value Value to set for the rate property.
    */
    public function setRate(?PurchasedRate $value): void {
        $this->rate = $value;
    }

    /**
     * Sets the returnTo property value. This complex type contains contact information for an individual buyer or seller.
     * @param Contact|null $value Value to set for the returnTo property.
    */
    public function setReturnTo(?Contact $value): void {
        $this->returnTo = $value;
    }

    /**
     * Sets the shipFrom property value. This complex type contains contact information for an individual buyer or seller.
     * @param Contact|null $value Value to set for the shipFrom property.
    */
    public function setShipFrom(?Contact $value): void {
        $this->shipFrom = $value;
    }

    /**
     * Sets the shipmentId property value. The unique eBay-assigned ID for the shipment. The ID is generated when the shipment is created by a call to <b>createFromShippingQuote</b>.
     * @param string|null $value Value to set for the shipmentId property.
    */
    public function setShipmentId(?string $value): void {
        $this->shipmentId = $value;
    }

    /**
     * Sets the shipmentTrackingNumber property value. A unique carrier-assigned ID string that can be used to track the shipment.
     * @param string|null $value Value to set for the shipmentTrackingNumber property.
    */
    public function setShipmentTrackingNumber(?string $value): void {
        $this->shipmentTrackingNumber = $value;
    }

    /**
     * Sets the shipTo property value. This complex type contains contact information for an individual buyer or seller.
     * @param Contact|null $value Value to set for the shipTo property.
    */
    public function setShipTo(?Contact $value): void {
        $this->shipTo = $value;
    }

}
