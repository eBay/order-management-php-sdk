<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment partner.
*/
class EbayFulfillmentProgram implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fulfilledBy The value returned in this field indicates the party that is handling fulfillment of the order line item. <br><br>Valid value: <code>EBAY</code>
    */
    private ?string $fulfilledBy = null;
    
    /**
     * Instantiates a new EbayFulfillmentProgram and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayFulfillmentProgram
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayFulfillmentProgram {
        return new EbayFulfillmentProgram();
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
            'fulfilledBy' => fn(ParseNode $n) => $o->setFulfilledBy($n->getStringValue()),
        ];
    }

    /**
     * Gets the fulfilledBy property value. The value returned in this field indicates the party that is handling fulfillment of the order line item. <br><br>Valid value: <code>EBAY</code>
     * @return string|null
    */
    public function getFulfilledBy(): ?string {
        return $this->fulfilledBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fulfilledBy', $this->getFulfilledBy());
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
     * Sets the fulfilledBy property value. The value returned in this field indicates the party that is handling fulfillment of the order line item. <br><br>Valid value: <code>EBAY</code>
     * @param string|null $value Value to set for the fulfilledBy property.
    */
    public function setFulfilledBy(?string $value): void {
        $this->fulfilledBy = $value;
    }

}
