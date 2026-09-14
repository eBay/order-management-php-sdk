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

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide details about one or more monetary transactions that occur as part of a payment dispute.
*/
class MonetaryTransaction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DisputeAmount|null $amount The amount involved in the monetary transaction. For active cross-border trade orders, the currency conversion and <strong>exchangeRate</strong> fields will be displayed as well.
    */
    private ?DisputeAmount $amount = null;
    
    /**
     * @var string|null $date This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions.<br><br> The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
    */
    private ?string $date = null;
    
    /**
     * @var MonetaryTransactionReasonEnum|null $reason This enumeration value indicates the reason for the monetary transaction.
    */
    private ?MonetaryTransactionReasonEnum $reason = null;
    
    /**
     * @var MonetaryTransactionTypeEnum|null $type This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller.
    */
    private ?MonetaryTransactionTypeEnum $type = null;
    
    /**
     * Instantiates a new MonetaryTransaction and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MonetaryTransaction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MonetaryTransaction {
        return new MonetaryTransaction();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The amount involved in the monetary transaction. For active cross-border trade orders, the currency conversion and <strong>exchangeRate</strong> fields will be displayed as well.
     * @return DisputeAmount|null
    */
    public function getAmount(): ?DisputeAmount {
        return $this->amount;
    }

    /**
     * Gets the date property value. This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions.<br><br> The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getDate(): ?string {
        return $this->date;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([DisputeAmount::class, 'createFromDiscriminatorValue'])),
            'date' => fn(ParseNode $n) => $o->setDate($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getEnumValue(MonetaryTransactionReasonEnum::class)),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(MonetaryTransactionTypeEnum::class)),
        ];
    }

    /**
     * Gets the reason property value. This enumeration value indicates the reason for the monetary transaction.
     * @return MonetaryTransactionReasonEnum|null
    */
    public function getReason(): ?MonetaryTransactionReasonEnum {
        return $this->reason;
    }

    /**
     * Gets the type property value. This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller.
     * @return MonetaryTransactionTypeEnum|null
    */
    public function getType(): ?MonetaryTransactionTypeEnum {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('date', $this->getDate());
        $writer->writeEnumValue('reason', $this->getReason());
        $writer->writeEnumValue('type', $this->getType());
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
     * Sets the amount property value. The amount involved in the monetary transaction. For active cross-border trade orders, the currency conversion and <strong>exchangeRate</strong> fields will be displayed as well.
     * @param DisputeAmount|null $value Value to set for the amount property.
    */
    public function setAmount(?DisputeAmount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the date property value. This timestamp indicates when the monetary transaction occurred. A date is returned for all monetary transactions.<br><br> The following format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the date property.
    */
    public function setDate(?string $value): void {
        $this->date = $value;
    }

    /**
     * Sets the reason property value. This enumeration value indicates the reason for the monetary transaction.
     * @param MonetaryTransactionReasonEnum|null $value Value to set for the reason property.
    */
    public function setReason(?MonetaryTransactionReasonEnum $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the type property value. This enumeration value indicates whether the monetary transaction is a charge or a credit to the seller.
     * @param MonetaryTransactionTypeEnum|null $value Value to set for the type property.
    */
    public function setType(?MonetaryTransactionTypeEnum $value): void {
        $this->type = $value;
    }

}
