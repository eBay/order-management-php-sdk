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
 * This type contains information about a sales promotion that is applied to a line item.
*/
class AppliedPromotion implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description A description of the applied sales promotion.
    */
    private ?string $description = null;
    
    /**
     * @var Amount|null $discountAmount The monetary amount of the sales promotion.
    */
    private ?Amount $discountAmount = null;
    
    /**
     * @var string|null $promotionId An eBay-generated unique identifier of the sales promotion.<br><br> Multiple types of sales promotions are available to eBay Store owners, including order size/volume discounts, shipping discounts, special coupons, and price markdowns. Sales promotions can be managed through the Marketing tab of Seller Hub in My eBay or by using the Marketing API's <strong>createItemPromotion</strong> method.
    */
    private ?string $promotionId = null;
    
    /**
     * Instantiates a new AppliedPromotion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppliedPromotion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppliedPromotion {
        return new AppliedPromotion();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. A description of the applied sales promotion.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discountAmount property value. The monetary amount of the sales promotion.
     * @return Amount|null
    */
    public function getDiscountAmount(): ?Amount {
        return $this->discountAmount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'discountAmount' => fn(ParseNode $n) => $o->setDiscountAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the promotionId property value. An eBay-generated unique identifier of the sales promotion.<br><br> Multiple types of sales promotions are available to eBay Store owners, including order size/volume discounts, shipping discounts, special coupons, and price markdowns. Sales promotions can be managed through the Marketing tab of Seller Hub in My eBay or by using the Marketing API's <strong>createItemPromotion</strong> method.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('discountAmount', $this->getDiscountAmount());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
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
     * Sets the description property value. A description of the applied sales promotion.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the discountAmount property value. The monetary amount of the sales promotion.
     * @param Amount|null $value Value to set for the discountAmount property.
    */
    public function setDiscountAmount(?Amount $value): void {
        $this->discountAmount = $value;
    }

    /**
     * Sets the promotionId property value. An eBay-generated unique identifier of the sales promotion.<br><br> Multiple types of sales promotions are available to eBay Store owners, including order size/volume discounts, shipping discounts, special coupons, and price markdowns. Sales promotions can be managed through the Marketing tab of Seller Hub in My eBay or by using the Marketing API's <strong>createItemPromotion</strong> method.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

}
