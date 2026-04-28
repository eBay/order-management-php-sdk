<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the monetary value of the payment dispute, and the currency used.
*/
class SimpleAmount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency A three-letter ISO 4217 code (such as <code>USD</code> for US site) that indicates the currency of the amount in the <strong>value</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
    */
    private ?string $currency = null;
    
    /**
     * @var string|null $value The monetary amount of the payment dispute. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new SimpleAmount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SimpleAmount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SimpleAmount {
        return new SimpleAmount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. A three-letter ISO 4217 code (such as <code>USD</code> for US site) that indicates the currency of the amount in the <strong>value</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The monetary amount of the payment dispute. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the currency property value. A three-letter ISO 4217 code (such as <code>USD</code> for US site) that indicates the currency of the amount in the <strong>value</strong> field. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CurrencyCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the value property value. The monetary amount of the payment dispute. Both the <strong>value</strong> and <strong>currency</strong> fields are always returned with the <strong>amount</strong> container.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
