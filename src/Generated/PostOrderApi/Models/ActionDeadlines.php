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

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <b>actionDeadlines</b> container, which  provides the number of remaining days that a buyer or seller has before being required to take action on an INR or Return case.
*/
class ActionDeadlines implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $daysForBuyerToProvideProofOfShipment This integer value indicates the number of days that the buyer has to provide proof of return shipment before the case expires. This field is only returned for a Return case.
    */
    private ?int $daysForBuyerToProvideProofOfShipment = null;
    
    /**
     * @var int|null $daysToExpireWithoutResponse This integer value indicates the number of days that a user (buyer or seller) has to make a required response on the case before the case expires.
    */
    private ?int $daysToExpireWithoutResponse = null;
    
    /**
     * @var int|null $daysToExpireWithResponse This integer value indicates the number of days that remain before the case expires.
    */
    private ?int $daysToExpireWithResponse = null;
    
    /**
     * @var int|null $daysToReturnItem This integer value indicates the number of remaining days that the buyer has to return an item and still expect a refund from the seller. This field is only returned for a Return case.
    */
    private ?int $daysToReturnItem = null;
    
    /**
     * @var int|null $maxDaysToFileClaim This integer value indicates the number of remaining days that the buyer has to file a claim.
    */
    private ?int $maxDaysToFileClaim = null;
    
    /**
     * Instantiates a new ActionDeadlines and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActionDeadlines
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActionDeadlines {
        return new ActionDeadlines();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the daysForBuyerToProvideProofOfShipment property value. This integer value indicates the number of days that the buyer has to provide proof of return shipment before the case expires. This field is only returned for a Return case.
     * @return int|null
    */
    public function getDaysForBuyerToProvideProofOfShipment(): ?int {
        return $this->daysForBuyerToProvideProofOfShipment;
    }

    /**
     * Gets the daysToExpireWithoutResponse property value. This integer value indicates the number of days that a user (buyer or seller) has to make a required response on the case before the case expires.
     * @return int|null
    */
    public function getDaysToExpireWithoutResponse(): ?int {
        return $this->daysToExpireWithoutResponse;
    }

    /**
     * Gets the daysToExpireWithResponse property value. This integer value indicates the number of days that remain before the case expires.
     * @return int|null
    */
    public function getDaysToExpireWithResponse(): ?int {
        return $this->daysToExpireWithResponse;
    }

    /**
     * Gets the daysToReturnItem property value. This integer value indicates the number of remaining days that the buyer has to return an item and still expect a refund from the seller. This field is only returned for a Return case.
     * @return int|null
    */
    public function getDaysToReturnItem(): ?int {
        return $this->daysToReturnItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'daysForBuyerToProvideProofOfShipment' => fn(ParseNode $n) => $o->setDaysForBuyerToProvideProofOfShipment($n->getIntegerValue()),
            'daysToExpireWithoutResponse' => fn(ParseNode $n) => $o->setDaysToExpireWithoutResponse($n->getIntegerValue()),
            'daysToExpireWithResponse' => fn(ParseNode $n) => $o->setDaysToExpireWithResponse($n->getIntegerValue()),
            'daysToReturnItem' => fn(ParseNode $n) => $o->setDaysToReturnItem($n->getIntegerValue()),
            'maxDaysToFileClaim' => fn(ParseNode $n) => $o->setMaxDaysToFileClaim($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxDaysToFileClaim property value. This integer value indicates the number of remaining days that the buyer has to file a claim.
     * @return int|null
    */
    public function getMaxDaysToFileClaim(): ?int {
        return $this->maxDaysToFileClaim;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('daysForBuyerToProvideProofOfShipment', $this->getDaysForBuyerToProvideProofOfShipment());
        $writer->writeIntegerValue('daysToExpireWithoutResponse', $this->getDaysToExpireWithoutResponse());
        $writer->writeIntegerValue('daysToExpireWithResponse', $this->getDaysToExpireWithResponse());
        $writer->writeIntegerValue('daysToReturnItem', $this->getDaysToReturnItem());
        $writer->writeIntegerValue('maxDaysToFileClaim', $this->getMaxDaysToFileClaim());
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
     * Sets the daysForBuyerToProvideProofOfShipment property value. This integer value indicates the number of days that the buyer has to provide proof of return shipment before the case expires. This field is only returned for a Return case.
     * @param int|null $value Value to set for the daysForBuyerToProvideProofOfShipment property.
    */
    public function setDaysForBuyerToProvideProofOfShipment(?int $value): void {
        $this->daysForBuyerToProvideProofOfShipment = $value;
    }

    /**
     * Sets the daysToExpireWithoutResponse property value. This integer value indicates the number of days that a user (buyer or seller) has to make a required response on the case before the case expires.
     * @param int|null $value Value to set for the daysToExpireWithoutResponse property.
    */
    public function setDaysToExpireWithoutResponse(?int $value): void {
        $this->daysToExpireWithoutResponse = $value;
    }

    /**
     * Sets the daysToExpireWithResponse property value. This integer value indicates the number of days that remain before the case expires.
     * @param int|null $value Value to set for the daysToExpireWithResponse property.
    */
    public function setDaysToExpireWithResponse(?int $value): void {
        $this->daysToExpireWithResponse = $value;
    }

    /**
     * Sets the daysToReturnItem property value. This integer value indicates the number of remaining days that the buyer has to return an item and still expect a refund from the seller. This field is only returned for a Return case.
     * @param int|null $value Value to set for the daysToReturnItem property.
    */
    public function setDaysToReturnItem(?int $value): void {
        $this->daysToReturnItem = $value;
    }

    /**
     * Sets the maxDaysToFileClaim property value. This integer value indicates the number of remaining days that the buyer has to file a claim.
     * @param int|null $value Value to set for the maxDaysToFileClaim property.
    */
    public function setMaxDaysToFileClaim(?int $value): void {
        $this->maxDaysToFileClaim = $value;
    }

}
