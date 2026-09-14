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
 * This type is used to provide details on every monetary transaction that occurs in regards to an Item Not Received inquiry or eBay case.
*/
class MoneyMovementEntry implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $amount = null;
    
    /**
     * @var DateTime|null $date This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $date = null;
    
    /**
     * @var FundingSource|null $fundingSource This type shows the seller's funding source used for the buyer refund, or in the case where eBay issued the refund to the buyer, the seller's funding source used by eBay to recoup this refund money from the seller.
    */
    private ?FundingSource $fundingSource = null;
    
    /**
     * @var FundingStatusEnum|null $fundingStatus This enumerated type is used to indicate if eBay was able to successfully 'fund' a refund to the buyer using the seller's preferred method of payment for refunds.
    */
    private ?FundingStatusEnum $fundingStatus = null;
    
    /**
     * @var string|null $type This string value indicates the type of monetary transaction, such as a refund.
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new MoneyMovementEntry and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoneyMovementEntry
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoneyMovementEntry {
        return new MoneyMovementEntry();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the date property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateTimeValue()),
            'fundingSource' => fn(ParseNode $n) => $o->setFundingSource($n->getObjectValue([FundingSource::class, 'createFromDiscriminatorValue'])),
            'fundingStatus' => fn(ParseNode $n) => $o->setFundingStatus($n->getEnumValue(FundingStatusEnum::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingSource property value. This type shows the seller's funding source used for the buyer refund, or in the case where eBay issued the refund to the buyer, the seller's funding source used by eBay to recoup this refund money from the seller.
     * @return FundingSource|null
    */
    public function getFundingSource(): ?FundingSource {
        return $this->fundingSource;
    }

    /**
     * Gets the fundingStatus property value. This enumerated type is used to indicate if eBay was able to successfully 'fund' a refund to the buyer using the seller's preferred method of payment for refunds.
     * @return FundingStatusEnum|null
    */
    public function getFundingStatus(): ?FundingStatusEnum {
        return $this->fundingStatus;
    }

    /**
     * Gets the type property value. This string value indicates the type of monetary transaction, such as a refund.
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeDateTimeValue('date', $this->getDate());
        $writer->writeObjectValue('fundingSource', $this->getFundingSource());
        $writer->writeEnumValue('fundingStatus', $this->getFundingStatus());
        $writer->writeStringValue('type', $this->getType());
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
     * Sets the amount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the date property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the date property.
    */
    public function setDate(?DateTime $value): void {
        $this->date = $value;
    }

    /**
     * Sets the fundingSource property value. This type shows the seller's funding source used for the buyer refund, or in the case where eBay issued the refund to the buyer, the seller's funding source used by eBay to recoup this refund money from the seller.
     * @param FundingSource|null $value Value to set for the fundingSource property.
    */
    public function setFundingSource(?FundingSource $value): void {
        $this->fundingSource = $value;
    }

    /**
     * Sets the fundingStatus property value. This enumerated type is used to indicate if eBay was able to successfully 'fund' a refund to the buyer using the seller's preferred method of payment for refunds.
     * @param FundingStatusEnum|null $value Value to set for the fundingStatus property.
    */
    public function setFundingStatus(?FundingStatusEnum $value): void {
        $this->fundingStatus = $value;
    }

    /**
     * Sets the type property value. This string value indicates the type of monetary transaction, such as a refund.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->type = $value;
    }

}
