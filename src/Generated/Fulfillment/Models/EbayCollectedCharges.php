<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains the breakdown of costs that are collected by eBay from the buyer.
*/
class EbayCollectedCharges implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Charge>|null $charges This array shows any charges that eBay collects from the buyer.<br><br><span class="tablenote"><strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION.</span>
    */
    private ?array $charges = null;
    
    /**
     * @var Amount|null $ebayShipping This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $ebayShipping = null;
    
    /**
     * Instantiates a new EbayCollectedCharges and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayCollectedCharges
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayCollectedCharges {
        return new EbayCollectedCharges();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the charges property value. This array shows any charges that eBay collects from the buyer.<br><br><span class="tablenote"><strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION.</span>
     * @return array<Charge>|null
    */
    public function getCharges(): ?array {
        return $this->charges;
    }

    /**
     * Gets the ebayShipping property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getEbayShipping(): ?Amount {
        return $this->ebayShipping;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'charges' => fn(ParseNode $n) => $o->setCharges($n->getCollectionOfObjectValues([Charge::class, 'createFromDiscriminatorValue'])),
            'ebayShipping' => fn(ParseNode $n) => $o->setEbayShipping($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('charges', $this->getCharges());
        $writer->writeObjectValue('ebayShipping', $this->getEbayShipping());
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
     * Sets the charges property value. This array shows any charges that eBay collects from the buyer.<br><br><span class="tablenote"><strong> Note: </strong> Currently, the only supported charge type is BUYER_PROTECTION.</span>
     * @param array<Charge>|null $value Value to set for the charges property.
    */
    public function setCharges(?array $value): void {
        $this->charges = $value;
    }

    /**
     * Sets the ebayShipping property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the ebayShipping property.
    */
    public function setEbayShipping(?Amount $value): void {
        $this->ebayShipping = $value;
    }

}
