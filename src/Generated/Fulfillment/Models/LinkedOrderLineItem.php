<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains data on a line item that is related to, but not a part of the order.
*/
class LinkedOrderLineItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<NameValuePair>|null $lineItemAspects This array contains the complete set of items aspects for the linked line item. For example:<br><pre>"lineItemAspects": [<br>    {<br>        "name": "Tire Type",<br>        "value": "All Season"<br>    },<br><br>    ...<br> <br>    {<br>        "name": "Car Type",<br>        "value": "Performance"<br>    }<br>]</pre><span class="tablenote"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.</span>
    */
    private ?array $lineItemAspects = null;
    
    /**
     * @var string|null $lineItemId The unique identifier of the linked order line item.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var string|null $maxEstimatedDeliveryDate The end of the date range in which the linked line item is expected to be delivered to the shipping address.
    */
    private ?string $maxEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $minEstimatedDeliveryDate The beginning of the date range in which the linked line item is expected to be delivered to the shipping address.
    */
    private ?string $minEstimatedDeliveryDate = null;
    
    /**
     * @var string|null $orderId The unique identifier of the order to which the linked line item belongs.
    */
    private ?string $orderId = null;
    
    /**
     * @var string|null $sellerId The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
    */
    private ?string $sellerId = null;
    
    /**
     * @var array<TrackingInfo>|null $shipments An array containing any shipment tracking information available for the linked line item.
    */
    private ?array $shipments = null;
    
    /**
     * @var string|null $title The listing title of the linked line item.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new LinkedOrderLineItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinkedOrderLineItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinkedOrderLineItem {
        return new LinkedOrderLineItem();
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
            'lineItemAspects' => fn(ParseNode $n) => $o->setLineItemAspects($n->getCollectionOfObjectValues([NameValuePair::class, 'createFromDiscriminatorValue'])),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'maxEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMaxEstimatedDeliveryDate($n->getStringValue()),
            'minEstimatedDeliveryDate' => fn(ParseNode $n) => $o->setMinEstimatedDeliveryDate($n->getStringValue()),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'sellerId' => fn(ParseNode $n) => $o->setSellerId($n->getStringValue()),
            'shipments' => fn(ParseNode $n) => $o->setShipments($n->getCollectionOfObjectValues([TrackingInfo::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the lineItemAspects property value. This array contains the complete set of items aspects for the linked line item. For example:<br><pre>"lineItemAspects": [<br>    {<br>        "name": "Tire Type",<br>        "value": "All Season"<br>    },<br><br>    ...<br> <br>    {<br>        "name": "Car Type",<br>        "value": "Performance"<br>    }<br>]</pre><span class="tablenote"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.</span>
     * @return array<NameValuePair>|null
    */
    public function getLineItemAspects(): ?array {
        return $this->lineItemAspects;
    }

    /**
     * Gets the lineItemId property value. The unique identifier of the linked order line item.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the maxEstimatedDeliveryDate property value. The end of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @return string|null
    */
    public function getMaxEstimatedDeliveryDate(): ?string {
        return $this->maxEstimatedDeliveryDate;
    }

    /**
     * Gets the minEstimatedDeliveryDate property value. The beginning of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @return string|null
    */
    public function getMinEstimatedDeliveryDate(): ?string {
        return $this->minEstimatedDeliveryDate;
    }

    /**
     * Gets the orderId property value. The unique identifier of the order to which the linked line item belongs.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the sellerId property value. The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     * @return string|null
    */
    public function getSellerId(): ?string {
        return $this->sellerId;
    }

    /**
     * Gets the shipments property value. An array containing any shipment tracking information available for the linked line item.
     * @return array<TrackingInfo>|null
    */
    public function getShipments(): ?array {
        return $this->shipments;
    }

    /**
     * Gets the title property value. The listing title of the linked line item.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('lineItemAspects', $this->getLineItemAspects());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeStringValue('maxEstimatedDeliveryDate', $this->getMaxEstimatedDeliveryDate());
        $writer->writeStringValue('minEstimatedDeliveryDate', $this->getMinEstimatedDeliveryDate());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeStringValue('sellerId', $this->getSellerId());
        $writer->writeCollectionOfObjectValues('shipments', $this->getShipments());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the lineItemAspects property value. This array contains the complete set of items aspects for the linked line item. For example:<br><pre>"lineItemAspects": [<br>    {<br>        "name": "Tire Type",<br>        "value": "All Season"<br>    },<br><br>    ...<br> <br>    {<br>        "name": "Car Type",<br>        "value": "Performance"<br>    }<br>]</pre><span class="tablenote"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's listing site, which may vary from the seller's language.</span>
     * @param array<NameValuePair>|null $value Value to set for the lineItemAspects property.
    */
    public function setLineItemAspects(?array $value): void {
        $this->lineItemAspects = $value;
    }

    /**
     * Sets the lineItemId property value. The unique identifier of the linked order line item.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the maxEstimatedDeliveryDate property value. The end of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @param string|null $value Value to set for the maxEstimatedDeliveryDate property.
    */
    public function setMaxEstimatedDeliveryDate(?string $value): void {
        $this->maxEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the minEstimatedDeliveryDate property value. The beginning of the date range in which the linked line item is expected to be delivered to the shipping address.
     * @param string|null $value Value to set for the minEstimatedDeliveryDate property.
    */
    public function setMinEstimatedDeliveryDate(?string $value): void {
        $this->minEstimatedDeliveryDate = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the order to which the linked line item belongs.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the sellerId property value. The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     * @param string|null $value Value to set for the sellerId property.
    */
    public function setSellerId(?string $value): void {
        $this->sellerId = $value;
    }

    /**
     * Sets the shipments property value. An array containing any shipment tracking information available for the linked line item.
     * @param array<TrackingInfo>|null $value Value to set for the shipments property.
    */
    public function setShipments(?array $value): void {
        $this->shipments = $value;
    }

    /**
     * Sets the title property value. The listing title of the linked line item.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
