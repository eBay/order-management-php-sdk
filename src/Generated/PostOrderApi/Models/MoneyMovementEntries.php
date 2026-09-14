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
 * This type is used to provide details on any monetary transactions that occur in association with an INR inquiry or a case.
*/
class MoneyMovementEntries implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<MoneyMovementEntry>|null $moneyMovementEntryList This array contains details about one or more monetary transactions associated with an INR inquiry or a case. This array is only returned if monetary transactions have occurred with the INR inquiry or case.
    */
    private ?array $moneyMovementEntryList = null;
    
    /**
     * Instantiates a new MoneyMovementEntries and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MoneyMovementEntries
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MoneyMovementEntries {
        return new MoneyMovementEntries();
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
            'moneyMovementEntryList' => fn(ParseNode $n) => $o->setMoneyMovementEntryList($n->getCollectionOfObjectValues([MoneyMovementEntry::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the moneyMovementEntryList property value. This array contains details about one or more monetary transactions associated with an INR inquiry or a case. This array is only returned if monetary transactions have occurred with the INR inquiry or case.
     * @return array<MoneyMovementEntry>|null
    */
    public function getMoneyMovementEntryList(): ?array {
        return $this->moneyMovementEntryList;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('moneyMovementEntryList', $this->getMoneyMovementEntryList());
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
     * Sets the moneyMovementEntryList property value. This array contains details about one or more monetary transactions associated with an INR inquiry or a case. This array is only returned if monetary transactions have occurred with the INR inquiry or case.
     * @param array<MoneyMovementEntry>|null $value Value to set for the moneyMovementEntryList property.
    */
    public function setMoneyMovementEntryList(?array $value): void {
        $this->moneyMovementEntryList = $value;
    }

}
