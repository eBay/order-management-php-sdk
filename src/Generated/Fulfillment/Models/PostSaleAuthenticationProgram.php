<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide the status and outcome of an order line item going through the Authenticity Guarantee verification process.
*/
class PostSaleAuthenticationProgram implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $outcomeReason This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationReasonEnum'>eBay API documentation</a>
    */
    private ?string $outcomeReason = null;
    
    /**
     * @var string|null $status The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>FAILED</code>, or <code>PASSED_WITH_EXCEPTION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationStatusEnum'>eBay API documentation</a>
    */
    private ?string $status = null;
    
    /**
     * Instantiates a new PostSaleAuthenticationProgram and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PostSaleAuthenticationProgram
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PostSaleAuthenticationProgram {
        return new PostSaleAuthenticationProgram();
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
            'outcomeReason' => fn(ParseNode $n) => $o->setOutcomeReason($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the outcomeReason property value. This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationReasonEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getOutcomeReason(): ?string {
        return $this->outcomeReason;
    }

    /**
     * Gets the status property value. The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>FAILED</code>, or <code>PASSED_WITH_EXCEPTION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('outcomeReason', $this->getOutcomeReason());
        $writer->writeStringValue('status', $this->getStatus());
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
     * Sets the outcomeReason property value. This field indicates the result of the authenticity verification inspection on an order line item. This field is not returned when the status value of the order line item is <code>PENDING</code> or <code>PASSED</code>. The possible values returned here are <code>NOT_AUTHENTIC</code>, <code>NOT_AS_DESCRIBED</code>, <code>CUSTOMIZED</code>, <code>MISCATEGORIZED</code>, or <code>NOT_AUTHENTIC_NO_RETURN</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationReasonEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the outcomeReason property.
    */
    public function setOutcomeReason(?string $value): void {
        $this->outcomeReason = $value;
    }

    /**
     * Sets the status property value. The value in this field indicates whether the order line item has passed or failed the authenticity verification inspection, or if the inspection and/or results are still pending. The possible values returned here are <code>PENDING</code>, <code>PASSED</code>, <code>FAILED</code>, or <code>PASSED_WITH_EXCEPTION</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:AuthenticityVerificationStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->status = $value;
    }

}
