<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\OrderManagement\Generated\PostOrderApi\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide information about each event or action that has occurred with a particular INR inquiry or case.
*/
class ClaimHistoryEventModel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $action This string value indicates the action initiated by one of the parties involved with the INR inquiry or case.
    */
    private ?string $action = null;
    
    /**
     * @var UserPartyEnum|null $actor This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
    */
    private ?UserPartyEnum $actor = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DateTime|null $date This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $date = null;
    
    /**
     * @var string|null $description A text-based description of this event or action. This field is returned if available.
    */
    private ?string $description = null;
    
    /**
     * @var MoneyMovementEntries|null $moneyMovement This type is used to provide details on any monetary transactions that occur in association with an INR inquiry or a case.
    */
    private ?MoneyMovementEntries $moneyMovement = null;
    
    /**
     * Instantiates a new ClaimHistoryEventModel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClaimHistoryEventModel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClaimHistoryEventModel {
        return new ClaimHistoryEventModel();
    }

    /**
     * Gets the action property value. This string value indicates the action initiated by one of the parties involved with the INR inquiry or case.
     * @return string|null
    */
    public function getAction(): ?string {
        return $this->action;
    }

    /**
     * Gets the actor property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @return UserPartyEnum|null
    */
    public function getActor(): ?UserPartyEnum {
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
     * Gets the date property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Gets the description property value. A text-based description of this event or action. This field is returned if available.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getStringValue()),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getEnumValue(UserPartyEnum::class)),
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'moneyMovement' => fn(ParseNode $n) => $o->setMoneyMovement($n->getObjectValue([MoneyMovementEntries::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the moneyMovement property value. This type is used to provide details on any monetary transactions that occur in association with an INR inquiry or a case.
     * @return MoneyMovementEntries|null
    */
    public function getMoneyMovement(): ?MoneyMovementEntries {
        return $this->moneyMovement;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('action', $this->getAction());
        $writer->writeEnumValue('actor', $this->getActor());
        $writer->writeDateTimeValue('date', $this->getDate());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('moneyMovement', $this->getMoneyMovement());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. This string value indicates the action initiated by one of the parties involved with the INR inquiry or case.
     * @param string|null $value Value to set for the action property.
    */
    public function setAction(?string $value): void {
        $this->action = $value;
    }

    /**
     * Sets the actor property value. This enumerated type lists the types of users who can possibly perform an action on an INR inquiry or a case.
     * @param UserPartyEnum|null $value Value to set for the actor property.
    */
    public function setActor(?UserPartyEnum $value): void {
        $this->actor = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the date property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the date property.
    */
    public function setDate(?DateTime $value): void {
        $this->date = $value;
    }

    /**
     * Sets the description property value. A text-based description of this event or action. This field is returned if available.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the moneyMovement property value. This type is used to provide details on any monetary transactions that occur in association with an INR inquiry or a case.
     * @param MoneyMovementEntries|null $value Value to set for the moneyMovement property.
    */
    public function setMoneyMovement(?MoneyMovementEntries $value): void {
        $this->moneyMovement = $value;
    }

}
