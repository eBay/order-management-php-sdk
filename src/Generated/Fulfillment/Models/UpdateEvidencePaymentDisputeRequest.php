<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the request payload of the <strong>updateEvidence</strong> method. The <strong>updateEvidence</strong> method is used to update an existing evidence set against a payment dispute with one or more evidence files.
*/
class UpdateEvidencePaymentDisputeRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $evidenceId The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
    */
    private ?string $evidenceId = null;
    
    /**
     * @var string|null $evidenceType This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
    */
    private ?string $evidenceType = null;
    
    /**
     * @var array<FileEvidence>|null $files This array is used to specify one or more evidence files that will be added to the evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.<br><br> The unique identifier of an evidence file is returned in the response payload of the <strong>uploadEvidence</strong> method.
    */
    private ?array $files = null;
    
    /**
     * @var array<OrderLineItems>|null $lineItems This required array identifies the order line item(s) for which the evidence file(s) will be applicable. <br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response. <br><br><span class="tablenote"><b>Note:</b> Both the <strong>itemId</strong> and <strong>lineItemID</strong> fields are needed to identify each order line item.</span>
    */
    private ?array $lineItems = null;
    
    /**
     * Instantiates a new UpdateEvidencePaymentDisputeRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateEvidencePaymentDisputeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateEvidencePaymentDisputeRequest {
        return new UpdateEvidencePaymentDisputeRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the evidenceId property value. The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @return string|null
    */
    public function getEvidenceId(): ?string {
        return $this->evidenceId;
    }

    /**
     * Gets the evidenceType property value. This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEvidenceType(): ?string {
        return $this->evidenceType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'evidenceId' => fn(ParseNode $n) => $o->setEvidenceId($n->getStringValue()),
            'evidenceType' => fn(ParseNode $n) => $o->setEvidenceType($n->getStringValue()),
            'files' => fn(ParseNode $n) => $o->setFiles($n->getCollectionOfObjectValues([FileEvidence::class, 'createFromDiscriminatorValue'])),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([OrderLineItems::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the files property value. This array is used to specify one or more evidence files that will be added to the evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.<br><br> The unique identifier of an evidence file is returned in the response payload of the <strong>uploadEvidence</strong> method.
     * @return array<FileEvidence>|null
    */
    public function getFiles(): ?array {
        return $this->files;
    }

    /**
     * Gets the lineItems property value. This required array identifies the order line item(s) for which the evidence file(s) will be applicable. <br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response. <br><br><span class="tablenote"><b>Note:</b> Both the <strong>itemId</strong> and <strong>lineItemID</strong> fields are needed to identify each order line item.</span>
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
        $writer->writeStringValue('evidenceId', $this->getEvidenceId());
        $writer->writeStringValue('evidenceType', $this->getEvidenceType());
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
     * Sets the evidenceId property value. The unique identifier of the evidence set that is being updated with new evidence files.<br><br> This ID is returned under the <strong>evidence</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @param string|null $value Value to set for the evidenceId property.
    */
    public function setEvidenceId(?string $value): void {
        $this->evidenceId = $value;
    }

    /**
     * Sets the evidenceType property value. This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field.<br><br>See the <a href="/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum" target="_blank ">EvidenceTypeEnum</a> type for the supported evidence types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/api:EvidenceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the evidenceType property.
    */
    public function setEvidenceType(?string $value): void {
        $this->evidenceType = $value;
    }

    /**
     * Sets the files property value. This array is used to specify one or more evidence files that will be added to the evidence set associated with a payment dispute. At least one evidence file must be specified in the <strong>files</strong> array.<br><br> The unique identifier of an evidence file is returned in the response payload of the <strong>uploadEvidence</strong> method.
     * @param array<FileEvidence>|null $value Value to set for the files property.
    */
    public function setFiles(?array $value): void {
        $this->files = $value;
    }

    /**
     * Sets the lineItems property value. This required array identifies the order line item(s) for which the evidence file(s) will be applicable. <br><Br>These values are returned under the <strong>evidenceRequests.lineItems</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response. <br><br><span class="tablenote"><b>Note:</b> Both the <strong>itemId</strong> and <strong>lineItemID</strong> fields are needed to identify each order line item.</span>
     * @param array<OrderLineItems>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

}
