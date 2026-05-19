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
 * This type contains information about a digital gift card line item that was purchased as a gift and sent to the recipient by email.<br><br><span class="tablenote"><strong>Note:</strong> <b>GiftDetails</b> will not be returned for any order that is more than 90 days old.</span>
*/
class GiftDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $message This field contains the gift message from the buyer to the gift recipient. This field is only returned if the buyer of the gift included a message for the gift.<br><br><span class="tablenote"><strong>Note:</strong> The <b>message</b> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $message = null;
    
    /**
     * @var string|null $recipientEmail The email address of the gift recipient. The seller will send the digital gift card to this email address.<br><br><span class="tablenote"><strong>Note:</strong> The <b>recipientEmail</b> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $recipientEmail = null;
    
    /**
     * @var string|null $senderName The name of the buyer, which will appear on the email that is sent to the gift recipient.<br><br><span class="tablenote"><strong>Note:</strong> The <b>senderName</b> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?string $senderName = null;
    
    /**
     * Instantiates a new GiftDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GiftDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GiftDetails {
        return new GiftDetails();
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
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'recipientEmail' => fn(ParseNode $n) => $o->setRecipientEmail($n->getStringValue()),
            'senderName' => fn(ParseNode $n) => $o->setSenderName($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. This field contains the gift message from the buyer to the gift recipient. This field is only returned if the buyer of the gift included a message for the gift.<br><br><span class="tablenote"><strong>Note:</strong> The <b>message</b> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the recipientEmail property value. The email address of the gift recipient. The seller will send the digital gift card to this email address.<br><br><span class="tablenote"><strong>Note:</strong> The <b>recipientEmail</b> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getRecipientEmail(): ?string {
        return $this->recipientEmail;
    }

    /**
     * Gets the senderName property value. The name of the buyer, which will appear on the email that is sent to the gift recipient.<br><br><span class="tablenote"><strong>Note:</strong> The <b>senderName</b> will not be returned for any order that is more than 90 days old.</span>
     * @return string|null
    */
    public function getSenderName(): ?string {
        return $this->senderName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('recipientEmail', $this->getRecipientEmail());
        $writer->writeStringValue('senderName', $this->getSenderName());
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
     * Sets the message property value. This field contains the gift message from the buyer to the gift recipient. This field is only returned if the buyer of the gift included a message for the gift.<br><br><span class="tablenote"><strong>Note:</strong> The <b>message</b> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the recipientEmail property value. The email address of the gift recipient. The seller will send the digital gift card to this email address.<br><br><span class="tablenote"><strong>Note:</strong> The <b>recipientEmail</b> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the recipientEmail property.
    */
    public function setRecipientEmail(?string $value): void {
        $this->recipientEmail = $value;
    }

    /**
     * Sets the senderName property value. The name of the buyer, which will appear on the email that is sent to the gift recipient.<br><br><span class="tablenote"><strong>Note:</strong> The <b>senderName</b> will not be returned for any order that is more than 90 days old.</span>
     * @param string|null $value Value to set for the senderName property.
    */
    public function setSenderName(?string $value): void {
        $this->senderName = $value;
    }

}
