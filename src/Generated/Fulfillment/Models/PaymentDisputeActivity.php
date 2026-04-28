<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by each recorded activity on a payment dispute, from creation to resolution.
*/
class PaymentDisputeActivity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $activityDate The timestamp in this field shows the date/time of the payment dispute activity.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $activityDate = null;
    
    /**
     * @var string|null $activityType This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of <code>DISPUTE_OPENED</code> is returned when a payment disute is first created,  a value indicating the seller's decision on the dispute, such as <code>SELLER_CONTEST</code>, is returned when seller makes a decision to accept or contest dispute, and a value of <code>DISPUTE_CLOSED</code> is returned when a payment disute is resolved. See <strong>ActivityEnum</strong> for an explanation of each of the values that may be returned here. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActivityEnum'>eBay API documentation</a>
    */
    private ?string $activityType = null;
    
    /**
     * @var string|null $actor This enumeration value indicates the actor that performed the action. Possible values include the <code>BUYER</code>, <code>SELLER</code>, <code>CS_AGENT</code> (eBay customer service), or <code>SYSTEM</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActorEnum'>eBay API documentation</a>
    */
    private ?string $actor = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * Instantiates a new PaymentDisputeActivity and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentDisputeActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentDisputeActivity {
        return new PaymentDisputeActivity();
    }

    /**
     * Gets the activityDate property value. The timestamp in this field shows the date/time of the payment dispute activity.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getActivityDate(): ?string {
        return $this->activityDate;
    }

    /**
     * Gets the activityType property value. This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of <code>DISPUTE_OPENED</code> is returned when a payment disute is first created,  a value indicating the seller's decision on the dispute, such as <code>SELLER_CONTEST</code>, is returned when seller makes a decision to accept or contest dispute, and a value of <code>DISPUTE_CLOSED</code> is returned when a payment disute is resolved. See <strong>ActivityEnum</strong> for an explanation of each of the values that may be returned here. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActivityEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getActivityType(): ?string {
        return $this->activityType;
    }

    /**
     * Gets the actor property value. This enumeration value indicates the actor that performed the action. Possible values include the <code>BUYER</code>, <code>SELLER</code>, <code>CS_AGENT</code> (eBay customer service), or <code>SYSTEM</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActorEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getActor(): ?string {
        return $this->actor;
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
            'activityDate' => fn(ParseNode $n) => $o->setActivityDate($n->getStringValue()),
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getStringValue()),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityDate', $this->getActivityDate());
        $writer->writeStringValue('activityType', $this->getActivityType());
        $writer->writeStringValue('actor', $this->getActor());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityDate property value. The timestamp in this field shows the date/time of the payment dispute activity.<br><br>The timestamps returned here use the ISO-8601 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO-8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the activityDate property.
    */
    public function setActivityDate(?string $value): void {
        $this->activityDate = $value;
    }

    /**
     * Sets the activityType property value. This enumeration value indicates the type of activity that occured on the payment dispute. For example, a value of <code>DISPUTE_OPENED</code> is returned when a payment disute is first created,  a value indicating the seller's decision on the dispute, such as <code>SELLER_CONTEST</code>, is returned when seller makes a decision to accept or contest dispute, and a value of <code>DISPUTE_CLOSED</code> is returned when a payment disute is resolved. See <strong>ActivityEnum</strong> for an explanation of each of the values that may be returned here. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActivityEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value): void {
        $this->activityType = $value;
    }

    /**
     * Sets the actor property value. This enumeration value indicates the actor that performed the action. Possible values include the <code>BUYER</code>, <code>SELLER</code>, <code>CS_AGENT</code> (eBay customer service), or <code>SYSTEM</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:ActorEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the actor property.
    */
    public function setActor(?string $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

}
