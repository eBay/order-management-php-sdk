<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the base response of the <strong>getActivities</strong> method, and includes a log of all activities of a payment dispute, from creation to resolution.
*/
class PaymentDisputeActivityHistory implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<PaymentDisputeActivity>|null $activity This array holds all activities of a payment dispute, from creation to resolution. For each activity, the activity type, the actor, and a timestamp is shown. The <strong>getActivities</strong> response is dynamic, and grows with each recorded activity.
    */
    private ?array $activity = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new PaymentDisputeActivityHistory and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDisputeActivityHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDisputeActivityHistory {
        return new PaymentDisputeActivityHistory();
    }

    /**
     * Gets the activity property value. This array holds all activities of a payment dispute, from creation to resolution. For each activity, the activity type, the actor, and a timestamp is shown. The <strong>getActivities</strong> response is dynamic, and grows with each recorded activity.
     * @return array<PaymentDisputeActivity>|null
    */
    public function getActivity(): ?array {
        return $this->activity;
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
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getCollectionOfObjectValues([PaymentDisputeActivity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('activity', $this->getActivity());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activity property value. This array holds all activities of a payment dispute, from creation to resolution. For each activity, the activity type, the actor, and a timestamp is shown. The <strong>getActivities</strong> response is dynamic, and grows with each recorded activity.
     * @param array<PaymentDisputeActivity>|null $value Value to set for the activity property.
    */
    public function setActivity(?array $value): void {
        $this->activity = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
