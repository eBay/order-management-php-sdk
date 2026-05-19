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
 * This type contains information about any requests that have been made to cancel an order.
*/
class CancelStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cancelledDate The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $cancelledDate = null;
    
    /**
     * @var array<CancelRequest>|null $cancelRequests This array contains details of one or more buyer requests to cancel the order. <br><br><b>For the getOrders call:</b>  This array is returned but is always empty.<br><b>For the getOrder call:</b> This array is returned fully populated with information about any cancellation requests.
    */
    private ?array $cancelRequests = null;
    
    /**
     * @var string|null $cancelState The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of <code>NONE_REQUESTED</code> is returned.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum'>eBay API documentation</a>
    */
    private ?string $cancelState = null;
    
    /**
     * Instantiates a new CancelStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CancelStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CancelStatus {
        return new CancelStatus();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancelledDate property value. The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getCancelledDate(): ?string {
        return $this->cancelledDate;
    }

    /**
     * Gets the cancelRequests property value. This array contains details of one or more buyer requests to cancel the order. <br><br><b>For the getOrders call:</b>  This array is returned but is always empty.<br><b>For the getOrder call:</b> This array is returned fully populated with information about any cancellation requests.
     * @return array<CancelRequest>|null
    */
    public function getCancelRequests(): ?array {
        return $this->cancelRequests;
    }

    /**
     * Gets the cancelState property value. The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of <code>NONE_REQUESTED</code> is returned.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCancelState(): ?string {
        return $this->cancelState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelledDate' => fn(ParseNode $n) => $o->setCancelledDate($n->getStringValue()),
            'cancelRequests' => fn(ParseNode $n) => $o->setCancelRequests($n->getCollectionOfObjectValues([CancelRequest::class, 'createFromDiscriminatorValue'])),
            'cancelState' => fn(ParseNode $n) => $o->setCancelState($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancelledDate', $this->getCancelledDate());
        $writer->writeCollectionOfObjectValues('cancelRequests', $this->getCancelRequests());
        $writer->writeStringValue('cancelState', $this->getCancelState());
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
     * Sets the cancelledDate property value. The date and time the order was cancelled, if applicable. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the cancelledDate property.
    */
    public function setCancelledDate(?string $value): void {
        $this->cancelledDate = $value;
    }

    /**
     * Sets the cancelRequests property value. This array contains details of one or more buyer requests to cancel the order. <br><br><b>For the getOrders call:</b>  This array is returned but is always empty.<br><b>For the getOrder call:</b> This array is returned fully populated with information about any cancellation requests.
     * @param array<CancelRequest>|null $value Value to set for the cancelRequests property.
    */
    public function setCancelRequests(?array $value): void {
        $this->cancelRequests = $value;
    }

    /**
     * Sets the cancelState property value. The state of the order with regard to cancellation. This field is always returned, and if there are no cancellation requests, a value of <code>NONE_REQUESTED</code> is returned.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:CancelStateEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the cancelState property.
    */
    public function setCancelState(?string $value): void {
        $this->cancelState = $value;
    }

}
