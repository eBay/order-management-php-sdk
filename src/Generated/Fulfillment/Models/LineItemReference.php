<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type identifies the line item and quantity of that line item that comprises one fulfillment, such as a shipping package.
*/
class LineItemReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $lineItemId This is the unique identifier of the eBay order line item that is part of the shipping fulfillment.<br><br>Line item Ids can be found in the lineItems.<b>lineItemId</b> field of the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> response.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var int|null $quantity This is the number of lineItems associated with the <a href="#request.trackingNumber">trackingNumber</a> specified by the seller. This must be a whole number greater than zero (0).<br><br><b>Default:</b> 1
    */
    private ?int $quantity = null;
    
    /**
     * Instantiates a new LineItemReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineItemReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineItemReference {
        return new LineItemReference();
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
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the lineItemId property value. This is the unique identifier of the eBay order line item that is part of the shipping fulfillment.<br><br>Line item Ids can be found in the lineItems.<b>lineItemId</b> field of the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> response.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the quantity property value. This is the number of lineItems associated with the <a href="#request.trackingNumber">trackingNumber</a> specified by the seller. This must be a whole number greater than zero (0).<br><br><b>Default:</b> 1
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
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
     * Sets the lineItemId property value. This is the unique identifier of the eBay order line item that is part of the shipping fulfillment.<br><br>Line item Ids can be found in the lineItems.<b>lineItemId</b> field of the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> response.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the quantity property value. This is the number of lineItems associated with the <a href="#request.trackingNumber">trackingNumber</a> specified by the seller. This must be a whole number greater than zero (0).<br><br><b>Default:</b> 1
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

}
