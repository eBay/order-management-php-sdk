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
 * The vase type for evidence processing requests.
*/
class ProcessEvidencePaymentDisputeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var EvidenceTypeEnum|null $evidenceType This enumeration type defines the different types of evidential documentation. | - **PROOF_OF_DELIVERY**: <strong>Important!</strong> This enum value is currently not supported for adding shipment tracking information for proof of delivery. Instead, use the createShippingFulfillment method to provide shipment tracking information evidence for a dispute.<br>This enumeration value indicates that the evidential documentation is for proof of order delivery. An example is shipment tracking information from a shipping carrier. A PROOF_OF_DELIVERY document might be needed if the buyer initiated the payment dispute for not receiving the item. - **PROOF_OF_AUTHENTICITY**: This enumeration value indicates that the evidential documentation is for proof of item authenticity. A PROOF_OF_AUTHENTICITY document/image might be needed if the buyer initiated the payment dispute due to suspecting that the item may be counterfeit. - **PROOF_OF_ITEM_AS_DESCRIBED**: This enumeration value indicates that the evidential documentation is to show that the item is as described. This document may be a photo. A PROOF_OF_ITEM_AS_DESCRIBED document might be needed if the buyer initiated the payment dispute because they thought the item was not as subscribed. - **PROOF_OF_CREDIT_NOT_DUE**: This enumeration value indicates that the evidential documentation is for proof of credit not due. A PROOF_OF_CREDIT_NOT_DUE document/image might be needed if the buyer initiated the payment dispute due to expecting a credit. - **PROOF_OF_RETURN_NOT_RECEIVED**: This enumeration value indicates that the evidential documentation is for proof that a return item has not been received by the seller, so a refund has not yet been issued. - **PROOF_OF_DELIVERY_AS_FILE**: This enumeration value indicates that the evidential documentation is a file that is proof of order delivery. - **PROOF_OF_DELIVERY_SIGNATURE**: This enumeration value indicates that the evidential documentation is a delivery signature file. - **PROOF_OF_PICKUP**: This enumeration value indicates that the evidential documentation is for buy online, pick up in store. - **OPTIONAL_SUPPORTING_DOCUMENTS**: This enumeration value indicates that the evidential documentation is optional.
    */
    private ?EvidenceTypeEnum $evidenceType = null;
    
    /**
     * @var array<FileEvidence>|null $files This array is used to specify one or more evidence files that will be added to or update the evidence set associated with a payment dispute.
    */
    private ?array $files = null;
    
    /**
     * @var array<OrderLineItems>|null $lineItems This array identifies the order line item(s) for which the evidence file(s) will be applicable. These values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response.
    */
    private ?array $lineItems = null;
    
    /**
     * Instantiates a new ProcessEvidencePaymentDisputeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProcessEvidencePaymentDisputeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProcessEvidencePaymentDisputeRequest {
        return new ProcessEvidencePaymentDisputeRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the evidenceType property value. This enumeration type defines the different types of evidential documentation. | - **PROOF_OF_DELIVERY**: <strong>Important!</strong> This enum value is currently not supported for adding shipment tracking information for proof of delivery. Instead, use the createShippingFulfillment method to provide shipment tracking information evidence for a dispute.<br>This enumeration value indicates that the evidential documentation is for proof of order delivery. An example is shipment tracking information from a shipping carrier. A PROOF_OF_DELIVERY document might be needed if the buyer initiated the payment dispute for not receiving the item. - **PROOF_OF_AUTHENTICITY**: This enumeration value indicates that the evidential documentation is for proof of item authenticity. A PROOF_OF_AUTHENTICITY document/image might be needed if the buyer initiated the payment dispute due to suspecting that the item may be counterfeit. - **PROOF_OF_ITEM_AS_DESCRIBED**: This enumeration value indicates that the evidential documentation is to show that the item is as described. This document may be a photo. A PROOF_OF_ITEM_AS_DESCRIBED document might be needed if the buyer initiated the payment dispute because they thought the item was not as subscribed. - **PROOF_OF_CREDIT_NOT_DUE**: This enumeration value indicates that the evidential documentation is for proof of credit not due. A PROOF_OF_CREDIT_NOT_DUE document/image might be needed if the buyer initiated the payment dispute due to expecting a credit. - **PROOF_OF_RETURN_NOT_RECEIVED**: This enumeration value indicates that the evidential documentation is for proof that a return item has not been received by the seller, so a refund has not yet been issued. - **PROOF_OF_DELIVERY_AS_FILE**: This enumeration value indicates that the evidential documentation is a file that is proof of order delivery. - **PROOF_OF_DELIVERY_SIGNATURE**: This enumeration value indicates that the evidential documentation is a delivery signature file. - **PROOF_OF_PICKUP**: This enumeration value indicates that the evidential documentation is for buy online, pick up in store. - **OPTIONAL_SUPPORTING_DOCUMENTS**: This enumeration value indicates that the evidential documentation is optional.
     * @return EvidenceTypeEnum|null
    */
    public function getEvidenceType(): ?EvidenceTypeEnum {
        return $this->evidenceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evidenceType' => fn(ParseNode $n) => $o->setEvidenceType($n->getEnumValue(EvidenceTypeEnum::class)),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileEvidence::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([OrderLineItems::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the files property value. This array is used to specify one or more evidence files that will be added to or update the evidence set associated with a payment dispute.
     * @return array<FileEvidence>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the lineItems property value. This array identifies the order line item(s) for which the evidence file(s) will be applicable. These values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response.
     * @return array<OrderLineItems>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('evidenceType', $this->getEvidenceType());
        $writer->writeCollectionOfObjectValues('files', $this->getFiles());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
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
     * Sets the evidenceType property value. This enumeration type defines the different types of evidential documentation. | - **PROOF_OF_DELIVERY**: <strong>Important!</strong> This enum value is currently not supported for adding shipment tracking information for proof of delivery. Instead, use the createShippingFulfillment method to provide shipment tracking information evidence for a dispute.<br>This enumeration value indicates that the evidential documentation is for proof of order delivery. An example is shipment tracking information from a shipping carrier. A PROOF_OF_DELIVERY document might be needed if the buyer initiated the payment dispute for not receiving the item. - **PROOF_OF_AUTHENTICITY**: This enumeration value indicates that the evidential documentation is for proof of item authenticity. A PROOF_OF_AUTHENTICITY document/image might be needed if the buyer initiated the payment dispute due to suspecting that the item may be counterfeit. - **PROOF_OF_ITEM_AS_DESCRIBED**: This enumeration value indicates that the evidential documentation is to show that the item is as described. This document may be a photo. A PROOF_OF_ITEM_AS_DESCRIBED document might be needed if the buyer initiated the payment dispute because they thought the item was not as subscribed. - **PROOF_OF_CREDIT_NOT_DUE**: This enumeration value indicates that the evidential documentation is for proof of credit not due. A PROOF_OF_CREDIT_NOT_DUE document/image might be needed if the buyer initiated the payment dispute due to expecting a credit. - **PROOF_OF_RETURN_NOT_RECEIVED**: This enumeration value indicates that the evidential documentation is for proof that a return item has not been received by the seller, so a refund has not yet been issued. - **PROOF_OF_DELIVERY_AS_FILE**: This enumeration value indicates that the evidential documentation is a file that is proof of order delivery. - **PROOF_OF_DELIVERY_SIGNATURE**: This enumeration value indicates that the evidential documentation is a delivery signature file. - **PROOF_OF_PICKUP**: This enumeration value indicates that the evidential documentation is for buy online, pick up in store. - **OPTIONAL_SUPPORTING_DOCUMENTS**: This enumeration value indicates that the evidential documentation is optional.
     * @param EvidenceTypeEnum|null $value Value to set for the evidenceType property.
    */
    public function setEvidenceType(?EvidenceTypeEnum $value): void {
        $this->evidenceType = $value;
    }

    /**
     * Sets the files property value. This array is used to specify one or more evidence files that will be added to or update the evidence set associated with a payment dispute.
     * @param array<FileEvidence>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the lineItems property value. This array identifies the order line item(s) for which the evidence file(s) will be applicable. These values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response.
     * @param array<OrderLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

}
