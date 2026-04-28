<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains a breakdown of all costs associated with the fulfillment of a line item.
*/
class DeliveryCost implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $discountAmount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $discountAmount = null;
    
    /**
     * @var Amount|null $handlingCost This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $handlingCost = null;
    
    /**
     * @var Amount|null $importCharges This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $importCharges = null;
    
    /**
     * @var Amount|null $shippingCost This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $shippingCost = null;
    
    /**
     * @var Amount|null $shippingIntermediationFee This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $shippingIntermediationFee = null;
    
    /**
     * Instantiates a new DeliveryCost and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryCost
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryCost {
        return new DeliveryCost();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the discountAmount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getDiscountAmount(): ?Amount {
        return $this->discountAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'handlingCost' => fn(ParseNode $n) => $o->setHandlingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'importCharges' => fn(ParseNode $n) => $o->setImportCharges($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingCost' => fn(ParseNode $n) => $o->setShippingCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'shippingIntermediationFee' => fn(ParseNode $n) => $o->setShippingIntermediationFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the handlingCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getHandlingCost(): ?Amount {
        return $this->handlingCost;
    }

    /**
     * Gets the importCharges property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getImportCharges(): ?Amount {
        return $this->importCharges;
    }

    /**
     * Gets the shippingCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getShippingCost(): ?Amount {
        return $this->shippingCost;
    }

    /**
     * Gets the shippingIntermediationFee property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getShippingIntermediationFee(): ?Amount {
        return $this->shippingIntermediationFee;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('discountAmount', $this->getDiscountAmount());
        $writer->writeObjectValue('handlingCost', $this->getHandlingCost());
        $writer->writeObjectValue('importCharges', $this->getImportCharges());
        $writer->writeObjectValue('shippingCost', $this->getShippingCost());
        $writer->writeObjectValue('shippingIntermediationFee', $this->getShippingIntermediationFee());
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
     * Sets the discountAmount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?Amount $value): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the handlingCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the handlingCost property.
    */
    public function setHandlingCost(?Amount $value): void {
        $this->handlingCost = $value;
    }

    /**
     * Sets the importCharges property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the importCharges property.
    */
    public function setImportCharges(?Amount $value): void {
        $this->importCharges = $value;
    }

    /**
     * Sets the shippingCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the shippingCost property.
    */
    public function setShippingCost(?Amount $value): void {
        $this->shippingCost = $value;
    }

    /**
     * Sets the shippingIntermediationFee property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the shippingIntermediationFee property.
    */
    public function setShippingIntermediationFee(?Amount $value): void {
        $this->shippingIntermediationFee = $value;
    }

}
