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
 * This type defines whether a provisional refund was issued to the buyer and whether the provisional refund was later reversed.
*/
class ProvisionalRefund implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $refundProvided This value indicates whether a provisional refund was issued to the buyer.
    */
    private ?bool $refundProvided = null;
    
    /**
     * @var bool|null $refundReversed This value indicates whether the provisional refund was later reversed.
    */
    private ?bool $refundReversed = null;
    
    /**
     * Instantiates a new ProvisionalRefund and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvisionalRefund
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvisionalRefund {
        return new ProvisionalRefund();
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
            'refundProvided' => fn(ParseNode $n) => $o->setRefundProvided($n->getBooleanValue()),
            'refundReversed' => fn(ParseNode $n) => $o->setRefundReversed($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the refundProvided property value. This value indicates whether a provisional refund was issued to the buyer.
     * @return bool|null
    */
    public function getRefundProvided(): ?bool {
        return $this->refundProvided;
    }

    /**
     * Gets the refundReversed property value. This value indicates whether the provisional refund was later reversed.
     * @return bool|null
    */
    public function getRefundReversed(): ?bool {
        return $this->refundReversed;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('refundProvided', $this->getRefundProvided());
        $writer->writeBooleanValue('refundReversed', $this->getRefundReversed());
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
     * Sets the refundProvided property value. This value indicates whether a provisional refund was issued to the buyer.
     * @param bool|null $value Value to set for the refundProvided property.
    */
    public function setRefundProvided(?bool $value): void {
        $this->refundProvided = $value;
    }

    /**
     * Sets the refundReversed property value. This value indicates whether the provisional refund was later reversed.
     * @param bool|null $value Value to set for the refundReversed property.
    */
    public function setRefundReversed(?bool $value): void {
        $this->refundReversed = $value;
    }

}
