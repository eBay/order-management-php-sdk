<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about the management of the shipping for the order.
*/
class EbayShipping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $shippingLabelProvidedBy This field contains the shipping label provider. If <code>EBAY</code>, this order is managed by eBay shipping and a free shipping label by eBay is downloadable by the seller via the eBay website.
    */
    private ?string $shippingLabelProvidedBy = null;
    
    /**
     * Instantiates a new EbayShipping and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayShipping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayShipping {
        return new EbayShipping();
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
            'shippingLabelProvidedBy' => fn(ParseNode $n) => $o->setShippingLabelProvidedBy($n->getStringValue()),
        ];
    }

    /**
     * Gets the shippingLabelProvidedBy property value. This field contains the shipping label provider. If <code>EBAY</code>, this order is managed by eBay shipping and a free shipping label by eBay is downloadable by the seller via the eBay website.
     * @return string|null
    */
    public function getShippingLabelProvidedBy(): ?string {
        return $this->shippingLabelProvidedBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('shippingLabelProvidedBy', $this->getShippingLabelProvidedBy());
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
     * Sets the shippingLabelProvidedBy property value. This field contains the shipping label provider. If <code>EBAY</code>, this order is managed by eBay shipping and a free shipping label by eBay is downloadable by the seller via the eBay website.
     * @param string|null $value Value to set for the shippingLabelProvidedBy property.
    */
    public function setShippingLabelProvidedBy(?string $value): void {
        $this->shippingLabelProvidedBy = $value;
    }

}
