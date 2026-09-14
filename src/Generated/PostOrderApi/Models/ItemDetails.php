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
 * This type provides information about the line item associated with the INR inquiry.
*/
class ItemDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $itemOnHold This field indicates the item related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the item is on hold due to eBay policy violation; false otherwise.
    */
    private ?bool $itemOnHold = null;
    
    /**
     * @var string|null $itemPictureUrl This field provides an URL where the gallery picture of the item may be viewed. This field is returned when available. If the item is on hold, this field may not be returned.
    */
    private ?string $itemPictureUrl = null;
    
    /**
     * @var Amount|null $itemPrice This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $itemPrice = null;
    
    /**
     * @var string|null $itemTitle The title of the eBay listing. If the item is on hold, the <b>itemID</b> of the listing is returned instead of the title.
    */
    private ?string $itemTitle = null;
    
    /**
     * @var string|null $viewPurchasedItemUrl When available, this field provides the URL to the item purchase page. If the item is on hold, a placeholder may be returned instead of the gallery picture.
    */
    private ?string $viewPurchasedItemUrl = null;
    
    /**
     * Instantiates a new ItemDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemDetails {
        return new ItemDetails();
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
            'itemOnHold' => fn(ParseNode $n) => $o->setItemOnHold($n->getBooleanValue()),
            'itemPictureUrl' => fn(ParseNode $n) => $o->setItemPictureUrl($n->getStringValue()),
            'itemPrice' => fn(ParseNode $n) => $o->setItemPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'itemTitle' => fn(ParseNode $n) => $o->setItemTitle($n->getStringValue()),
            'viewPurchasedItemUrl' => fn(ParseNode $n) => $o->setViewPurchasedItemUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemOnHold property value. This field indicates the item related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the item is on hold due to eBay policy violation; false otherwise.
     * @return bool|null
    */
    public function getItemOnHold(): ?bool {
        return $this->itemOnHold;
    }

    /**
     * Gets the itemPictureUrl property value. This field provides an URL where the gallery picture of the item may be viewed. This field is returned when available. If the item is on hold, this field may not be returned.
     * @return string|null
    */
    public function getItemPictureUrl(): ?string {
        return $this->itemPictureUrl;
    }

    /**
     * Gets the itemPrice property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getItemPrice(): ?Amount {
        return $this->itemPrice;
    }

    /**
     * Gets the itemTitle property value. The title of the eBay listing. If the item is on hold, the <b>itemID</b> of the listing is returned instead of the title.
     * @return string|null
    */
    public function getItemTitle(): ?string {
        return $this->itemTitle;
    }

    /**
     * Gets the viewPurchasedItemUrl property value. When available, this field provides the URL to the item purchase page. If the item is on hold, a placeholder may be returned instead of the gallery picture.
     * @return string|null
    */
    public function getViewPurchasedItemUrl(): ?string {
        return $this->viewPurchasedItemUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('itemOnHold', $this->getItemOnHold());
        $writer->writeStringValue('itemPictureUrl', $this->getItemPictureUrl());
        $writer->writeObjectValue('itemPrice', $this->getItemPrice());
        $writer->writeStringValue('itemTitle', $this->getItemTitle());
        $writer->writeStringValue('viewPurchasedItemUrl', $this->getViewPurchasedItemUrl());
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
     * Sets the itemOnHold property value. This field indicates the item related to the inquiry is hidden (the respective content is not returned). This field is returned as 'true' if the item is on hold due to eBay policy violation; false otherwise.
     * @param bool|null $value Value to set for the itemOnHold property.
    */
    public function setItemOnHold(?bool $value): void {
        $this->itemOnHold = $value;
    }

    /**
     * Sets the itemPictureUrl property value. This field provides an URL where the gallery picture of the item may be viewed. This field is returned when available. If the item is on hold, this field may not be returned.
     * @param string|null $value Value to set for the itemPictureUrl property.
    */
    public function setItemPictureUrl(?string $value): void {
        $this->itemPictureUrl = $value;
    }

    /**
     * Sets the itemPrice property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the itemPrice property.
    */
    public function setItemPrice(?Amount $value): void {
        $this->itemPrice = $value;
    }

    /**
     * Sets the itemTitle property value. The title of the eBay listing. If the item is on hold, the <b>itemID</b> of the listing is returned instead of the title.
     * @param string|null $value Value to set for the itemTitle property.
    */
    public function setItemTitle(?string $value): void {
        $this->itemTitle = $value;
    }

    /**
     * Sets the viewPurchasedItemUrl property value. When available, this field provides the URL to the item purchase page. If the item is on hold, a placeholder may be returned instead of the gallery picture.
     * @param string|null $value Value to set for the viewPurchasedItemUrl property.
    */
    public function setViewPurchasedItemUrl(?string $value): void {
        $this->viewPurchasedItemUrl = $value;
    }

}
