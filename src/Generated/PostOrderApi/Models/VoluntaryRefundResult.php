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
 * This type is used by the <b>refundResult</b> container, which shows the payment source used and status of the refund to the buyer.
*/
class VoluntaryRefundResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var RefundPaymentTypeEnum|null $refundSource This enumerated type lists the methods that can be used to issue a buyer refund.
    */
    private ?RefundPaymentTypeEnum $refundSource = null;
    
    /**
     * @var RefundStatusEnum|null $refundStatus This enumeration type contains the possible outcomes of a refund action initiated through the <b>POST /post-order/v2/inquiry/{inquiryId}/issue_refund</b> or <b>POST /post-order/v2/casemanagement/{caseId}/issue_refund </b> methods.
    */
    private ?RefundStatusEnum $refundStatus = null;
    
    /**
     * Instantiates a new VoluntaryRefundResult and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VoluntaryRefundResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VoluntaryRefundResult {
        return new VoluntaryRefundResult();
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
            'refundSource' => fn(ParseNode $n) => $o->setRefundSource($n->getEnumValue(RefundPaymentTypeEnum::class)),
            'refundStatus' => fn(ParseNode $n) => $o->setRefundStatus($n->getEnumValue(RefundStatusEnum::class)),
        ];
    }

    /**
     * Gets the refundSource property value. This enumerated type lists the methods that can be used to issue a buyer refund.
     * @return RefundPaymentTypeEnum|null
    */
    public function getRefundSource(): ?RefundPaymentTypeEnum {
        return $this->refundSource;
    }

    /**
     * Gets the refundStatus property value. This enumeration type contains the possible outcomes of a refund action initiated through the <b>POST /post-order/v2/inquiry/{inquiryId}/issue_refund</b> or <b>POST /post-order/v2/casemanagement/{caseId}/issue_refund </b> methods.
     * @return RefundStatusEnum|null
    */
    public function getRefundStatus(): ?RefundStatusEnum {
        return $this->refundStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('refundSource', $this->getRefundSource());
        $writer->writeEnumValue('refundStatus', $this->getRefundStatus());
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
     * Sets the refundSource property value. This enumerated type lists the methods that can be used to issue a buyer refund.
     * @param RefundPaymentTypeEnum|null $value Value to set for the refundSource property.
    */
    public function setRefundSource(?RefundPaymentTypeEnum $value): void {
        $this->refundSource = $value;
    }

    /**
     * Sets the refundStatus property value. This enumeration type contains the possible outcomes of a refund action initiated through the <b>POST /post-order/v2/inquiry/{inquiryId}/issue_refund</b> or <b>POST /post-order/v2/casemanagement/{caseId}/issue_refund </b> methods.
     * @param RefundStatusEnum|null $value Value to set for the refundStatus property.
    */
    public function setRefundStatus(?RefundStatusEnum $value): void {
        $this->refundStatus = $value;
    }

}
