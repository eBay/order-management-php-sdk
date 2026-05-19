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
 * This type contains information about the eBay programs under which a line item was listed and sold.
*/
class LineItemProperties implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $buyerProtection A value of <code>true</code> indicates that the line item is covered by eBay's Buyer Protection program.
    */
    private ?bool $buyerProtection = null;
    
    /**
     * @var bool|null $fromBestOffer This field is only returned if <code>true</code> and indicates that the purchase occurred by the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer feature can be set up for any listing type, but if this feature is set up for an auction listing, it will no longer be available once a bid has been placed on the listing.
    */
    private ?bool $fromBestOffer = null;
    
    /**
     * @var bool|null $soldViaAdCampaign This field is only returned if <code>true</code> and indicates that the line item was sold as a result of a seller's ad campaign.
    */
    private ?bool $soldViaAdCampaign = null;
    
    /**
     * Instantiates a new LineItemProperties and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineItemProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineItemProperties {
        return new LineItemProperties();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyerProtection property value. A value of <code>true</code> indicates that the line item is covered by eBay's Buyer Protection program.
     * @return bool|null
    */
    public function getBuyerProtection(): ?bool {
        return $this->buyerProtection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyerProtection' => fn(ParseNode $n) => $o->setBuyerProtection($n->getBooleanValue()),
            'fromBestOffer' => fn(ParseNode $n) => $o->setFromBestOffer($n->getBooleanValue()),
            'soldViaAdCampaign' => fn(ParseNode $n) => $o->setSoldViaAdCampaign($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the fromBestOffer property value. This field is only returned if <code>true</code> and indicates that the purchase occurred by the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer feature can be set up for any listing type, but if this feature is set up for an auction listing, it will no longer be available once a bid has been placed on the listing.
     * @return bool|null
    */
    public function getFromBestOffer(): ?bool {
        return $this->fromBestOffer;
    }

    /**
     * Gets the soldViaAdCampaign property value. This field is only returned if <code>true</code> and indicates that the line item was sold as a result of a seller's ad campaign.
     * @return bool|null
    */
    public function getSoldViaAdCampaign(): ?bool {
        return $this->soldViaAdCampaign;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('buyerProtection', $this->getBuyerProtection());
        $writer->writeBooleanValue('fromBestOffer', $this->getFromBestOffer());
        $writer->writeBooleanValue('soldViaAdCampaign', $this->getSoldViaAdCampaign());
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
     * Sets the buyerProtection property value. A value of <code>true</code> indicates that the line item is covered by eBay's Buyer Protection program.
     * @param bool|null $value Value to set for the buyerProtection property.
    */
    public function setBuyerProtection(?bool $value): void {
        $this->buyerProtection = $value;
    }

    /**
     * Sets the fromBestOffer property value. This field is only returned if <code>true</code> and indicates that the purchase occurred by the buyer and seller mutually agreeing on a Best Offer amount. The Best Offer feature can be set up for any listing type, but if this feature is set up for an auction listing, it will no longer be available once a bid has been placed on the listing.
     * @param bool|null $value Value to set for the fromBestOffer property.
    */
    public function setFromBestOffer(?bool $value): void {
        $this->fromBestOffer = $value;
    }

    /**
     * Sets the soldViaAdCampaign property value. This field is only returned if <code>true</code> and indicates that the line item was sold as a result of a seller's ad campaign.
     * @param bool|null $value Value to set for the soldViaAdCampaign property.
    */
    public function setSoldViaAdCampaign(?bool $value): void {
        $this->soldViaAdCampaign = $value;
    }

}
