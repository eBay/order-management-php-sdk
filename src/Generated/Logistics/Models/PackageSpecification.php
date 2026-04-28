<?php

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type specifies the dimensions and weight of a package.
*/
class PackageSpecification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Dimensions|null $dimensions This complex type defines the dimensions of a package to be shipped.
    */
    private ?Dimensions $dimensions = null;
    
    /**
     * @var Weight|null $weight This complex type contains information about the weight of an object such as a shipping package.
    */
    private ?Weight $weight = null;
    
    /**
     * Instantiates a new PackageSpecification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PackageSpecification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PackageSpecification {
        return new PackageSpecification();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dimensions property value. This complex type defines the dimensions of a package to be shipped.
     * @return Dimensions|null
    */
    public function getDimensions(): ?Dimensions {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getObjectValue([Dimensions::class, 'createFromDiscriminatorValue'])),
            'weight' => fn(ParseNode $n) => $o->setWeight($n->getObjectValue([Weight::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the weight property value. This complex type contains information about the weight of an object such as a shipping package.
     * @return Weight|null
    */
    public function getWeight(): ?Weight {
        return $this->weight;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dimensions', $this->getDimensions());
        $writer->writeObjectValue('weight', $this->getWeight());
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
     * Sets the dimensions property value. This complex type defines the dimensions of a package to be shipped.
     * @param Dimensions|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?Dimensions $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the weight property value. This complex type contains information about the weight of an object such as a shipping package.
     * @param Weight|null $value Value to set for the weight property.
    */
    public function setWeight(?Weight $value): void {
        $this->weight = $value;
    }

}
