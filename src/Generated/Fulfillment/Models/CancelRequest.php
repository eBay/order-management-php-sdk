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
 * This type contains information about a buyer request to cancel an order.
*/
class CancelRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $cancelCompletedDate This string is the date and time that the order cancellation was completed, if applicable. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $cancelCompletedDate = null;
    
    /**
     * @var string|null $cancelInitiator This string value indicates the party who made the initial cancellation request. This is typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
    */
    private ?string $cancelInitiator = null;
    
    /**
     * @var string|null $cancelReason This string indicates the reason why the <strong>cancelInitiator</strong> initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason is 'out of stock'. If a cancellation request has been made, this field should be returned.
    */
    private ?string $cancelReason = null;
    
    /**
     * @var string|null $cancelRequestedDate This string is the date and time that the order cancellation was requested. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $cancelRequestedDate = null;
    
    /**
     * @var string|null $cancelRequestId This string vlaue is the unique identifier of the order cancellation request. This field is returned for each cancellation request.
    */
    private ?string $cancelRequestId = null;
    
    /**
     * @var CancelRequestStateEnum|null $cancelRequestState The current stage or condition of the cancellation request. This field is returned for each cancellation request.
    */
    private ?CancelRequestStateEnum $cancelRequestState = null;
    
    /**
     * Instantiates a new CancelRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CancelRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CancelRequest {
        return new CancelRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the cancelCompletedDate property value. This string is the date and time that the order cancellation was completed, if applicable. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getCancelCompletedDate(): ?string {
        return $this->cancelCompletedDate;
    }

    /**
     * Gets the cancelInitiator property value. This string value indicates the party who made the initial cancellation request. This is typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
     * @return string|null
    */
    public function getCancelInitiator(): ?string {
        return $this->cancelInitiator;
    }

    /**
     * Gets the cancelReason property value. This string indicates the reason why the <strong>cancelInitiator</strong> initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason is 'out of stock'. If a cancellation request has been made, this field should be returned.
     * @return string|null
    */
    public function getCancelReason(): ?string {
        return $this->cancelReason;
    }

    /**
     * Gets the cancelRequestedDate property value. This string is the date and time that the order cancellation was requested. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getCancelRequestedDate(): ?string {
        return $this->cancelRequestedDate;
    }

    /**
     * Gets the cancelRequestId property value. This string vlaue is the unique identifier of the order cancellation request. This field is returned for each cancellation request.
     * @return string|null
    */
    public function getCancelRequestId(): ?string {
        return $this->cancelRequestId;
    }

    /**
     * Gets the cancelRequestState property value. The current stage or condition of the cancellation request. This field is returned for each cancellation request.
     * @return CancelRequestStateEnum|null
    */
    public function getCancelRequestState(): ?CancelRequestStateEnum {
        return $this->cancelRequestState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelCompletedDate' => fn(ParseNode $n) => $o->setCancelCompletedDate($n->getStringValue()),
            'cancelInitiator' => fn(ParseNode $n) => $o->setCancelInitiator($n->getStringValue()),
            'cancelReason' => fn(ParseNode $n) => $o->setCancelReason($n->getStringValue()),
            'cancelRequestedDate' => fn(ParseNode $n) => $o->setCancelRequestedDate($n->getStringValue()),
            'cancelRequestId' => fn(ParseNode $n) => $o->setCancelRequestId($n->getStringValue()),
            'cancelRequestState' => fn(ParseNode $n) => $o->setCancelRequestState($n->getEnumValue(CancelRequestStateEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('cancelCompletedDate', $this->getCancelCompletedDate());
        $writer->writeStringValue('cancelInitiator', $this->getCancelInitiator());
        $writer->writeStringValue('cancelReason', $this->getCancelReason());
        $writer->writeStringValue('cancelRequestedDate', $this->getCancelRequestedDate());
        $writer->writeStringValue('cancelRequestId', $this->getCancelRequestId());
        $writer->writeEnumValue('cancelRequestState', $this->getCancelRequestState());
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
     * Sets the cancelCompletedDate property value. This string is the date and time that the order cancellation was completed, if applicable. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the cancellation request has actually been approved by the seller.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the cancelCompletedDate property.
    */
    public function setCancelCompletedDate(?string $value): void {
        $this->cancelCompletedDate = $value;
    }

    /**
     * Sets the cancelInitiator property value. This string value indicates the party who made the initial cancellation request. This is typically, either the 'Buyer' or 'Seller'. If a cancellation request has been made, this field should be returned.
     * @param string|null $value Value to set for the cancelInitiator property.
    */
    public function setCancelInitiator(?string $value): void {
        $this->cancelInitiator = $value;
    }

    /**
     * Sets the cancelReason property value. This string indicates the reason why the <strong>cancelInitiator</strong> initiated the cancellation request. Cancellation reasons for a buyer might include 'order placed by mistake' or 'order won't arrive in time'. For a seller, a typical cancellation reason is 'out of stock'. If a cancellation request has been made, this field should be returned.
     * @param string|null $value Value to set for the cancelReason property.
    */
    public function setCancelReason(?string $value): void {
        $this->cancelReason = $value;
    }

    /**
     * Sets the cancelRequestedDate property value. This string is the date and time that the order cancellation was requested. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is returned for each cancellation request.<br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the cancelRequestedDate property.
    */
    public function setCancelRequestedDate(?string $value): void {
        $this->cancelRequestedDate = $value;
    }

    /**
     * Sets the cancelRequestId property value. This string vlaue is the unique identifier of the order cancellation request. This field is returned for each cancellation request.
     * @param string|null $value Value to set for the cancelRequestId property.
    */
    public function setCancelRequestId(?string $value): void {
        $this->cancelRequestId = $value;
    }

    /**
     * Sets the cancelRequestState property value. The current stage or condition of the cancellation request. This field is returned for each cancellation request.
     * @param CancelRequestStateEnum|null $value Value to set for the cancelRequestState property.
    */
    public function setCancelRequestState(?CancelRequestStateEnum $value): void {
        $this->cancelRequestState = $value;
    }

}
