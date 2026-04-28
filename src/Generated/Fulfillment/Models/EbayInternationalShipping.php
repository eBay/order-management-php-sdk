<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about an order line item being managed through eBay International Shipping.
*/
class EbayInternationalShipping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $returnsManagedBy The value returned in this field indicates the party that is responsible for managing returns of the order line item.<br><br>Valid value: <code>EBAY</code>
    */
    private ?string $returnsManagedBy = null;
    
    /**
     * Instantiates a new EbayInternationalShipping and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayInternationalShipping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayInternationalShipping {
        return new EbayInternationalShipping();
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
            'returnsManagedBy' => fn(ParseNode $n) => $o->setReturnsManagedBy($n->getStringValue()),
        ];
    }

    /**
     * Gets the returnsManagedBy property value. The value returned in this field indicates the party that is responsible for managing returns of the order line item.<br><br>Valid value: <code>EBAY</code>
     * @return string|null
    */
    public function getReturnsManagedBy(): ?string {
        return $this->returnsManagedBy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('returnsManagedBy', $this->getReturnsManagedBy());
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
     * Sets the returnsManagedBy property value. The value returned in this field indicates the party that is responsible for managing returns of the order line item.<br><br>Valid value: <code>EBAY</code>
     * @param string|null $value Value to set for the returnsManagedBy property.
    */
    public function setReturnsManagedBy(?string $value): void {
        $this->returnsManagedBy = $value;
    }

}
