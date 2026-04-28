<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container is returned if the buyer is returning one or more line items in an order that is associated with the payment dispute, and that buyer has provided return shipping tracking information and/or a note about the return.
*/
class InfoFromBuyer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $contentOnHold When the value of this field is <code>true</code> it indicates that the buyer's note regarding the payment dispute (i.e., the <b>buyerProvided.note</b> field,) is on hold. When this is the case, the <b>buyerProvided.note</b> field will not be returned.<br><br>When the value of this field is <code>false</code>, it is not returned.
    */
    private ?bool $contentOnHold = null;
    
    /**
     * @var string|null $note This field shows any note that was left by the buyer in regard to the dispute.
    */
    private ?string $note = null;
    
    /**
     * @var array<TrackingInfo>|null $returnShipmentTracking This array shows shipment tracking information for one or more shipping packages being returned to the buyer after a payment dispute.
    */
    private ?array $returnShipmentTracking = null;
    
    /**
     * Instantiates a new InfoFromBuyer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InfoFromBuyer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InfoFromBuyer {
        return new InfoFromBuyer();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the contentOnHold property value. When the value of this field is <code>true</code> it indicates that the buyer's note regarding the payment dispute (i.e., the <b>buyerProvided.note</b> field,) is on hold. When this is the case, the <b>buyerProvided.note</b> field will not be returned.<br><br>When the value of this field is <code>false</code>, it is not returned.
     * @return bool|null
    */
    public function getContentOnHold(): ?bool {
        return $this->contentOnHold;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentOnHold' => fn(ParseNode $n) => $o->setContentOnHold($n->getBooleanValue()),
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'returnShipmentTracking' => fn(ParseNode $n) => $o->setReturnShipmentTracking($n->getCollectionOfObjectValues([TrackingInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the note property value. This field shows any note that was left by the buyer in regard to the dispute.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the returnShipmentTracking property value. This array shows shipment tracking information for one or more shipping packages being returned to the buyer after a payment dispute.
     * @return array<TrackingInfo>|null
    */
    public function getReturnShipmentTracking(): ?array {
        return $this->returnShipmentTracking;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('contentOnHold', $this->getContentOnHold());
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeCollectionOfObjectValues('returnShipmentTracking', $this->getReturnShipmentTracking());
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
     * Sets the contentOnHold property value. When the value of this field is <code>true</code> it indicates that the buyer's note regarding the payment dispute (i.e., the <b>buyerProvided.note</b> field,) is on hold. When this is the case, the <b>buyerProvided.note</b> field will not be returned.<br><br>When the value of this field is <code>false</code>, it is not returned.
     * @param bool|null $value Value to set for the contentOnHold property.
    */
    public function setContentOnHold(?bool $value): void {
        $this->contentOnHold = $value;
    }

    /**
     * Sets the note property value. This field shows any note that was left by the buyer in regard to the dispute.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the returnShipmentTracking property value. This array shows shipment tracking information for one or more shipping packages being returned to the buyer after a payment dispute.
     * @param array<TrackingInfo>|null $value Value to set for the returnShipmentTracking property.
    */
    public function setReturnShipmentTracking(?array $value): void {
        $this->returnShipmentTracking = $value;
    }

}
