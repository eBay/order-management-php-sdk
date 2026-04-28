<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains the specifications for the entire collection of shipping fulfillments that are associated with the order specified by a <b>getShippingFulfillments</b> call. The <b>fulfillments</b> container returns an array of all the fulfillments in the collection.
*/
class ShippingFulfillmentPagedCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ShippingFulfillment>|null $fulfillments This array contains one or more fulfillments required for the order that was specified in method endpoint.
    */
    private ?array $fulfillments = null;
    
    /**
     * @var int|null $total The total number of fulfillments in the specified order.<br><br><span class="tablenote"><strong>Note:</strong> If no fulfillments are found for the order, this field is returned with a value of <code>0</code>.</span>
    */
    private ?int $total = null;
    
    /**
     * @var array<Error>|null $warnings This array is only returned if one or more errors or warnings occur with the call request.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new ShippingFulfillmentPagedCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShippingFulfillmentPagedCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ShippingFulfillmentPagedCollection {
        return new ShippingFulfillmentPagedCollection();
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
            'fulfillments' => fn(ParseNode $n) => $o->setFulfillments($n->getCollectionOfObjectValues([ShippingFulfillment::class, 'createFromDiscriminatorValue'])),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fulfillments property value. This array contains one or more fulfillments required for the order that was specified in method endpoint.
     * @return array<ShippingFulfillment>|null
    */
    public function getFulfillments(): ?array {
        return $this->fulfillments;
    }

    /**
     * Gets the total property value. The total number of fulfillments in the specified order.<br><br><span class="tablenote"><strong>Note:</strong> If no fulfillments are found for the order, this field is returned with a value of <code>0</code>.</span>
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the warnings property value. This array is only returned if one or more errors or warnings occur with the call request.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('fulfillments', $this->getFulfillments());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the fulfillments property value. This array contains one or more fulfillments required for the order that was specified in method endpoint.
     * @param array<ShippingFulfillment>|null $value Value to set for the fulfillments property.
    */
    public function setFulfillments(?array $value): void {
        $this->fulfillments = $value;
    }

    /**
     * Sets the total property value. The total number of fulfillments in the specified order.<br><br><span class="tablenote"><strong>Note:</strong> If no fulfillments are found for the order, this field is returned with a value of <code>0</code>.</span>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

    /**
     * Sets the warnings property value. This array is only returned if one or more errors or warnings occur with the call request.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
