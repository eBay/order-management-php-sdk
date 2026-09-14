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
 * This type contains the details of each line item in an order.
*/
class LineItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AppliedPromotion>|null $appliedPromotions This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item.
    */
    private ?array $appliedPromotions = null;
    
    /**
     * @var array<Property>|null $compatibilityProperties This array is only returned for a Parts & Accessory item and identifies the buyer's motor vehicle that is compatible with the part or accessory.
    */
    private ?array $compatibilityProperties = null;
    
    /**
     * @var DeliveryCost|null $deliveryCost This container consists of a breakdown of all costs associated with the fulfillment of the line item.
    */
    private ?DeliveryCost $deliveryCost = null;
    
    /**
     * @var Amount|null $discountedLineItemCost The cost of the line item after applying any discounts. This container is only returned if the order line item was discounted through a promotion.
    */
    private ?Amount $discountedLineItemCost = null;
    
    /**
     * @var array<EbayCollectAndRemitTax>|null $ebayCollectAndRemitTaxes This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>EBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
    */
    private ?array $ebayCollectAndRemitTaxes = null;
    
    /**
     * @var EbayCollectedCharges|null $ebayCollectedCharges This container consists of a breakdown of costs that are collected by eBay from the buyer for this order. <br><br><span class="tablenote"><strong>Note:</strong> Currently, this container is returned only if eBay is directly charging the buyer for eBay shipping.</span>
    */
    private ?EbayCollectedCharges $ebayCollectedCharges = null;
    
    /**
     * @var GiftDetails|null $giftDetails This container consists of information that is needed by the seller to send a digital gift card to the buyer or recipient of the digital gift card. This container is only returned and applicable for digital gift card line items.
    */
    private ?GiftDetails $giftDetails = null;
    
    /**
     * @var ItemLocation|null $itemLocation This container field describes the physical location of the order line item.<br><br><span class="tablenote"><strong>Note:</strong> If the item is shipped from a fulfillment center location through the Multi&#8209;Warehouse Program, this container will return the location details of the fulfillment center closest to the buyer.</span>
    */
    private ?ItemLocation $itemLocation = null;
    
    /**
     * @var string|null $legacyItemId The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the <strong>listingId</strong> instead.
    */
    private ?string $legacyItemId = null;
    
    /**
     * @var string|null $legacyVariationId The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
    */
    private ?string $legacyVariationId = null;
    
    /**
     * @var Amount|null $lineItemCost The selling price of the line item before applying any discounts. The value of this field is calculated by multiplying the single unit price by the number of units purchased (value of the <strong>quantity</strong> field).
    */
    private ?Amount $lineItemCost = null;
    
    /**
     * @var LineItemFulfillmentInstructions|null $lineItemFulfillmentInstructions This container consists of information related to shipping dates and expectations, including the 'ship-by date' and expected delivery windows that are based on the seller's stated handling time and the shipping service option that will be used. These fields provide guidance on making sure expected delivery dates are made, whether the order is an <em>eBay Guaranteed Delivery</em> order or a non-guaranteed delivery order.
    */
    private ?LineItemFulfillmentInstructions $lineItemFulfillmentInstructions = null;
    
    /**
     * @var LineItemFulfillmentStatusEnum|null $lineItemFulfillmentStatus This enumeration value indicates the current fulfillment status of the line item.
    */
    private ?LineItemFulfillmentStatusEnum $lineItemFulfillmentStatus = null;
    
    /**
     * @var string|null $lineItemId This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var array<LinkedOrderLineItem>|null $linkedOrderLineItems An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
    */
    private ?array $linkedOrderLineItems = null;
    
    /**
     * @var MarketplaceIdEnum|null $listingMarketplaceId The unique identifier of the eBay marketplace where the line item was listed.
    */
    private ?MarketplaceIdEnum $listingMarketplaceId = null;
    
    /**
     * @var LineItemProperties|null $properties Contains information about the eBay programs, if any, under which the line item was listed.
    */
    private ?LineItemProperties $properties = null;
    
    /**
     * @var MarketplaceIdEnum|null $purchaseMarketplaceId The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces.
    */
    private ?MarketplaceIdEnum $purchaseMarketplaceId = null;
    
    /**
     * @var int|null $quantity The number of units of the line item in the order. These are represented as a group by a single <strong>lineItemId</strong>.
    */
    private ?int $quantity = null;
    
    /**
     * @var array<LineItemRefund>|null $refunds This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
    */
    private ?array $refunds = null;
    
    /**
     * @var string|null $sku Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy Trading API system, but SKUs are required when listing items through the Inventory API model.
    */
    private ?string $sku = null;
    
    /**
     * @var SoldFormatEnum|null $soldFormat The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>.
    */
    private ?SoldFormatEnum $soldFormat = null;
    
    /**
     * @var array<Tax>|null $taxes Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
    */
    private ?array $taxes = null;
    
    /**
     * @var string|null $title The title of the listing.<br><br><span class="tablenote"><strong>Note:</strong> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
    */
    private ?string $title = null;
    
    /**
     * @var Amount|null $total This is the total price that the buyer must pay for the line item after all costs (item cost, delivery cost, taxes) are added, minus any discounts and/or promotions.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Goods and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
    */
    private ?Amount $total = null;
    
    /**
     * @var array<NameValuePair>|null $variationAspects An array of aspect name-value pairs that identifies the specific variation of a multi-variation listing. This array can contain multiple name-value pairs, such as <code>color:blue</code> and <code>size:large</code>, and will only be returned for orders created from a multiple-variation listing.
    */
    private ?array $variationAspects = null;
    
    /**
     * Instantiates a new LineItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LineItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LineItem {
        return new LineItem();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the appliedPromotions property value. This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item.
     * @return array<AppliedPromotion>|null
    */
    public function getAppliedPromotions(): ?array {
        return $this->appliedPromotions;
    }

    /**
     * Gets the compatibilityProperties property value. This array is only returned for a Parts & Accessory item and identifies the buyer's motor vehicle that is compatible with the part or accessory.
     * @return array<Property>|null
    */
    public function getCompatibilityProperties(): ?array {
        return $this->compatibilityProperties;
    }

    /**
     * Gets the deliveryCost property value. This container consists of a breakdown of all costs associated with the fulfillment of the line item.
     * @return DeliveryCost|null
    */
    public function getDeliveryCost(): ?DeliveryCost {
        return $this->deliveryCost;
    }

    /**
     * Gets the discountedLineItemCost property value. The cost of the line item after applying any discounts. This container is only returned if the order line item was discounted through a promotion.
     * @return Amount|null
    */
    public function getDiscountedLineItemCost(): ?Amount {
        return $this->discountedLineItemCost;
    }

    /**
     * Gets the ebayCollectAndRemitTaxes property value. This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>EBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     * @return array<EbayCollectAndRemitTax>|null
    */
    public function getEbayCollectAndRemitTaxes(): ?array {
        return $this->ebayCollectAndRemitTaxes;
    }

    /**
     * Gets the ebayCollectedCharges property value. This container consists of a breakdown of costs that are collected by eBay from the buyer for this order. <br><br><span class="tablenote"><strong>Note:</strong> Currently, this container is returned only if eBay is directly charging the buyer for eBay shipping.</span>
     * @return EbayCollectedCharges|null
    */
    public function getEbayCollectedCharges(): ?EbayCollectedCharges {
        return $this->ebayCollectedCharges;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appliedPromotions' => fn(ParseNode $n) => $o->setAppliedPromotions($n->getCollectionOfObjectValues([AppliedPromotion::class, 'createFromDiscriminatorValue'])),
            'compatibilityProperties' => fn(ParseNode $n) => $o->setCompatibilityProperties($n->getCollectionOfObjectValues([Property::class, 'createFromDiscriminatorValue'])),
            'deliveryCost' => fn(ParseNode $n) => $o->setDeliveryCost($n->getObjectValue([DeliveryCost::class, 'createFromDiscriminatorValue'])),
            'discountedLineItemCost' => fn(ParseNode $n) => $o->setDiscountedLineItemCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'ebayCollectAndRemitTaxes' => fn(ParseNode $n) => $o->setEbayCollectAndRemitTaxes($n->getCollectionOfObjectValues([EbayCollectAndRemitTax::class, 'createFromDiscriminatorValue'])),
            'ebayCollectedCharges' => fn(ParseNode $n) => $o->setEbayCollectedCharges($n->getObjectValue([EbayCollectedCharges::class, 'createFromDiscriminatorValue'])),
            'giftDetails' => fn(ParseNode $n) => $o->setGiftDetails($n->getObjectValue([GiftDetails::class, 'createFromDiscriminatorValue'])),
            'itemLocation' => fn(ParseNode $n) => $o->setItemLocation($n->getObjectValue([ItemLocation::class, 'createFromDiscriminatorValue'])),
            'legacyItemId' => fn(ParseNode $n) => $o->setLegacyItemId($n->getStringValue()),
            'legacyVariationId' => fn(ParseNode $n) => $o->setLegacyVariationId($n->getStringValue()),
            'lineItemCost' => fn(ParseNode $n) => $o->setLineItemCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'lineItemFulfillmentInstructions' => fn(ParseNode $n) => $o->setLineItemFulfillmentInstructions($n->getObjectValue([LineItemFulfillmentInstructions::class, 'createFromDiscriminatorValue'])),
            'lineItemFulfillmentStatus' => fn(ParseNode $n) => $o->setLineItemFulfillmentStatus($n->getEnumValue(LineItemFulfillmentStatusEnum::class)),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'linkedOrderLineItems' => fn(ParseNode $n) => $o->setLinkedOrderLineItems($n->getCollectionOfObjectValues([LinkedOrderLineItem::class, 'createFromDiscriminatorValue'])),
            'listingMarketplaceId' => fn(ParseNode $n) => $o->setListingMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([LineItemProperties::class, 'createFromDiscriminatorValue'])),
            'purchaseMarketplaceId' => fn(ParseNode $n) => $o->setPurchaseMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getCollectionOfObjectValues([LineItemRefund::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'soldFormat' => fn(ParseNode $n) => $o->setSoldFormat($n->getEnumValue(SoldFormatEnum::class)),
            'taxes' => fn(ParseNode $n) => $o->setTaxes($n->getCollectionOfObjectValues([Tax::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'variationAspects' => fn(ParseNode $n) => $o->setVariationAspects($n->getCollectionOfObjectValues([NameValuePair::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the giftDetails property value. This container consists of information that is needed by the seller to send a digital gift card to the buyer or recipient of the digital gift card. This container is only returned and applicable for digital gift card line items.
     * @return GiftDetails|null
    */
    public function getGiftDetails(): ?GiftDetails {
        return $this->giftDetails;
    }

    /**
     * Gets the itemLocation property value. This container field describes the physical location of the order line item.<br><br><span class="tablenote"><strong>Note:</strong> If the item is shipped from a fulfillment center location through the Multi&#8209;Warehouse Program, this container will return the location details of the fulfillment center closest to the buyer.</span>
     * @return ItemLocation|null
    */
    public function getItemLocation(): ?ItemLocation {
        return $this->itemLocation;
    }

    /**
     * Gets the legacyItemId property value. The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the <strong>listingId</strong> instead.
     * @return string|null
    */
    public function getLegacyItemId(): ?string {
        return $this->legacyItemId;
    }

    /**
     * Gets the legacyVariationId property value. The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
     * @return string|null
    */
    public function getLegacyVariationId(): ?string {
        return $this->legacyVariationId;
    }

    /**
     * Gets the lineItemCost property value. The selling price of the line item before applying any discounts. The value of this field is calculated by multiplying the single unit price by the number of units purchased (value of the <strong>quantity</strong> field).
     * @return Amount|null
    */
    public function getLineItemCost(): ?Amount {
        return $this->lineItemCost;
    }

    /**
     * Gets the lineItemFulfillmentInstructions property value. This container consists of information related to shipping dates and expectations, including the 'ship-by date' and expected delivery windows that are based on the seller's stated handling time and the shipping service option that will be used. These fields provide guidance on making sure expected delivery dates are made, whether the order is an <em>eBay Guaranteed Delivery</em> order or a non-guaranteed delivery order.
     * @return LineItemFulfillmentInstructions|null
    */
    public function getLineItemFulfillmentInstructions(): ?LineItemFulfillmentInstructions {
        return $this->lineItemFulfillmentInstructions;
    }

    /**
     * Gets the lineItemFulfillmentStatus property value. This enumeration value indicates the current fulfillment status of the line item.
     * @return LineItemFulfillmentStatusEnum|null
    */
    public function getLineItemFulfillmentStatus(): ?LineItemFulfillmentStatusEnum {
        return $this->lineItemFulfillmentStatus;
    }

    /**
     * Gets the lineItemId property value. This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
     * @return string|null
    */
    public function getLineItemId(): ?string {
        return $this->lineItemId;
    }

    /**
     * Gets the linkedOrderLineItems property value. An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
     * @return array<LinkedOrderLineItem>|null
    */
    public function getLinkedOrderLineItems(): ?array {
        return $this->linkedOrderLineItems;
    }

    /**
     * Gets the listingMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed.
     * @return MarketplaceIdEnum|null
    */
    public function getListingMarketplaceId(): ?MarketplaceIdEnum {
        return $this->listingMarketplaceId;
    }

    /**
     * Gets the properties property value. Contains information about the eBay programs, if any, under which the line item was listed.
     * @return LineItemProperties|null
    */
    public function getProperties(): ?LineItemProperties {
        return $this->properties;
    }

    /**
     * Gets the purchaseMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces.
     * @return MarketplaceIdEnum|null
    */
    public function getPurchaseMarketplaceId(): ?MarketplaceIdEnum {
        return $this->purchaseMarketplaceId;
    }

    /**
     * Gets the quantity property value. The number of units of the line item in the order. These are represented as a group by a single <strong>lineItemId</strong>.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the refunds property value. This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @return array<LineItemRefund>|null
    */
    public function getRefunds(): ?array {
        return $this->refunds;
    }

    /**
     * Gets the sku property value. Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy Trading API system, but SKUs are required when listing items through the Inventory API model.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the soldFormat property value. The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>.
     * @return SoldFormatEnum|null
    */
    public function getSoldFormat(): ?SoldFormatEnum {
        return $this->soldFormat;
    }

    /**
     * Gets the taxes property value. Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
     * @return array<Tax>|null
    */
    public function getTaxes(): ?array {
        return $this->taxes;
    }

    /**
     * Gets the title property value. The title of the listing.<br><br><span class="tablenote"><strong>Note:</strong> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the total property value. This is the total price that the buyer must pay for the line item after all costs (item cost, delivery cost, taxes) are added, minus any discounts and/or promotions.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Goods and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
     * @return Amount|null
    */
    public function getTotal(): ?Amount {
        return $this->total;
    }

    /**
     * Gets the variationAspects property value. An array of aspect name-value pairs that identifies the specific variation of a multi-variation listing. This array can contain multiple name-value pairs, such as <code>color:blue</code> and <code>size:large</code>, and will only be returned for orders created from a multiple-variation listing.
     * @return array<NameValuePair>|null
    */
    public function getVariationAspects(): ?array {
        return $this->variationAspects;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('appliedPromotions', $this->getAppliedPromotions());
        $writer->writeCollectionOfObjectValues('compatibilityProperties', $this->getCompatibilityProperties());
        $writer->writeObjectValue('deliveryCost', $this->getDeliveryCost());
        $writer->writeObjectValue('discountedLineItemCost', $this->getDiscountedLineItemCost());
        $writer->writeCollectionOfObjectValues('ebayCollectAndRemitTaxes', $this->getEbayCollectAndRemitTaxes());
        $writer->writeObjectValue('ebayCollectedCharges', $this->getEbayCollectedCharges());
        $writer->writeObjectValue('giftDetails', $this->getGiftDetails());
        $writer->writeObjectValue('itemLocation', $this->getItemLocation());
        $writer->writeStringValue('legacyItemId', $this->getLegacyItemId());
        $writer->writeStringValue('legacyVariationId', $this->getLegacyVariationId());
        $writer->writeObjectValue('lineItemCost', $this->getLineItemCost());
        $writer->writeObjectValue('lineItemFulfillmentInstructions', $this->getLineItemFulfillmentInstructions());
        $writer->writeEnumValue('lineItemFulfillmentStatus', $this->getLineItemFulfillmentStatus());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeCollectionOfObjectValues('linkedOrderLineItems', $this->getLinkedOrderLineItems());
        $writer->writeEnumValue('listingMarketplaceId', $this->getListingMarketplaceId());
        $writer->writeObjectValue('properties', $this->getProperties());
        $writer->writeEnumValue('purchaseMarketplaceId', $this->getPurchaseMarketplaceId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeCollectionOfObjectValues('refunds', $this->getRefunds());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeEnumValue('soldFormat', $this->getSoldFormat());
        $writer->writeCollectionOfObjectValues('taxes', $this->getTaxes());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeObjectValue('total', $this->getTotal());
        $writer->writeCollectionOfObjectValues('variationAspects', $this->getVariationAspects());
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
     * Sets the appliedPromotions property value. This array contains information about one or more sales promotions or discounts applied to the line item. It is always returned, but will be returned as an empty array if no special sales promotions or discounts apply to the order line item.
     * @param array<AppliedPromotion>|null $value Value to set for the appliedPromotions property.
    */
    public function setAppliedPromotions(?array $value): void {
        $this->appliedPromotions = $value;
    }

    /**
     * Sets the compatibilityProperties property value. This array is only returned for a Parts & Accessory item and identifies the buyer's motor vehicle that is compatible with the part or accessory.
     * @param array<Property>|null $value Value to set for the compatibilityProperties property.
    */
    public function setCompatibilityProperties(?array $value): void {
        $this->compatibilityProperties = $value;
    }

    /**
     * Sets the deliveryCost property value. This container consists of a breakdown of all costs associated with the fulfillment of the line item.
     * @param DeliveryCost|null $value Value to set for the deliveryCost property.
    */
    public function setDeliveryCost(?DeliveryCost $value): void {
        $this->deliveryCost = $value;
    }

    /**
     * Sets the discountedLineItemCost property value. The cost of the line item after applying any discounts. This container is only returned if the order line item was discounted through a promotion.
     * @param Amount|null $value Value to set for the discountedLineItemCost property.
    */
    public function setDiscountedLineItemCost(?Amount $value): void {
        $this->discountedLineItemCost = $value;
    }

    /**
     * Sets the ebayCollectAndRemitTaxes property value. This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>EBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     * @param array<EbayCollectAndRemitTax>|null $value Value to set for the ebayCollectAndRemitTaxes property.
    */
    public function setEbayCollectAndRemitTaxes(?array $value): void {
        $this->ebayCollectAndRemitTaxes = $value;
    }

    /**
     * Sets the ebayCollectedCharges property value. This container consists of a breakdown of costs that are collected by eBay from the buyer for this order. <br><br><span class="tablenote"><strong>Note:</strong> Currently, this container is returned only if eBay is directly charging the buyer for eBay shipping.</span>
     * @param EbayCollectedCharges|null $value Value to set for the ebayCollectedCharges property.
    */
    public function setEbayCollectedCharges(?EbayCollectedCharges $value): void {
        $this->ebayCollectedCharges = $value;
    }

    /**
     * Sets the giftDetails property value. This container consists of information that is needed by the seller to send a digital gift card to the buyer or recipient of the digital gift card. This container is only returned and applicable for digital gift card line items.
     * @param GiftDetails|null $value Value to set for the giftDetails property.
    */
    public function setGiftDetails(?GiftDetails $value): void {
        $this->giftDetails = $value;
    }

    /**
     * Sets the itemLocation property value. This container field describes the physical location of the order line item.<br><br><span class="tablenote"><strong>Note:</strong> If the item is shipped from a fulfillment center location through the Multi&#8209;Warehouse Program, this container will return the location details of the fulfillment center closest to the buyer.</span>
     * @param ItemLocation|null $value Value to set for the itemLocation property.
    */
    public function setItemLocation(?ItemLocation $value): void {
        $this->itemLocation = $value;
    }

    /**
     * Sets the legacyItemId property value. The eBay-generated legacy listing item ID of the listing. Note that the unique identifier of a listing in REST-based APIs is called the <strong>listingId</strong> instead.
     * @param string|null $value Value to set for the legacyItemId property.
    */
    public function setLegacyItemId(?string $value): void {
        $this->legacyItemId = $value;
    }

    /**
     * Sets the legacyVariationId property value. The unique identifier of a single variation within a multiple-variation listing. This field is only returned if the line item purchased was from a multiple-variation listing.
     * @param string|null $value Value to set for the legacyVariationId property.
    */
    public function setLegacyVariationId(?string $value): void {
        $this->legacyVariationId = $value;
    }

    /**
     * Sets the lineItemCost property value. The selling price of the line item before applying any discounts. The value of this field is calculated by multiplying the single unit price by the number of units purchased (value of the <strong>quantity</strong> field).
     * @param Amount|null $value Value to set for the lineItemCost property.
    */
    public function setLineItemCost(?Amount $value): void {
        $this->lineItemCost = $value;
    }

    /**
     * Sets the lineItemFulfillmentInstructions property value. This container consists of information related to shipping dates and expectations, including the 'ship-by date' and expected delivery windows that are based on the seller's stated handling time and the shipping service option that will be used. These fields provide guidance on making sure expected delivery dates are made, whether the order is an <em>eBay Guaranteed Delivery</em> order or a non-guaranteed delivery order.
     * @param LineItemFulfillmentInstructions|null $value Value to set for the lineItemFulfillmentInstructions property.
    */
    public function setLineItemFulfillmentInstructions(?LineItemFulfillmentInstructions $value): void {
        $this->lineItemFulfillmentInstructions = $value;
    }

    /**
     * Sets the lineItemFulfillmentStatus property value. This enumeration value indicates the current fulfillment status of the line item.
     * @param LineItemFulfillmentStatusEnum|null $value Value to set for the lineItemFulfillmentStatus property.
    */
    public function setLineItemFulfillmentStatus(?LineItemFulfillmentStatusEnum $value): void {
        $this->lineItemFulfillmentStatus = $value;
    }

    /**
     * Sets the lineItemId property value. This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
     * @param string|null $value Value to set for the lineItemId property.
    */
    public function setLineItemId(?string $value): void {
        $this->lineItemId = $value;
    }

    /**
     * Sets the linkedOrderLineItems property value. An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
     * @param array<LinkedOrderLineItem>|null $value Value to set for the linkedOrderLineItems property.
    */
    public function setLinkedOrderLineItems(?array $value): void {
        $this->linkedOrderLineItems = $value;
    }

    /**
     * Sets the listingMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed.
     * @param MarketplaceIdEnum|null $value Value to set for the listingMarketplaceId property.
    */
    public function setListingMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->listingMarketplaceId = $value;
    }

    /**
     * Sets the properties property value. Contains information about the eBay programs, if any, under which the line item was listed.
     * @param LineItemProperties|null $value Value to set for the properties property.
    */
    public function setProperties(?LineItemProperties $value): void {
        $this->properties = $value;
    }

    /**
     * Sets the purchaseMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces.
     * @param MarketplaceIdEnum|null $value Value to set for the purchaseMarketplaceId property.
    */
    public function setPurchaseMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->purchaseMarketplaceId = $value;
    }

    /**
     * Sets the quantity property value. The number of units of the line item in the order. These are represented as a group by a single <strong>lineItemId</strong>.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the refunds property value. This array is always returned, but it is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @param array<LineItemRefund>|null $value Value to set for the refunds property.
    */
    public function setRefunds(?array $value): void {
        $this->refunds = $value;
    }

    /**
     * Sets the sku property value. Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy Trading API system, but SKUs are required when listing items through the Inventory API model.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the soldFormat property value. The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>.
     * @param SoldFormatEnum|null $value Value to set for the soldFormat property.
    */
    public function setSoldFormat(?SoldFormatEnum $value): void {
        $this->soldFormat = $value;
    }

    /**
     * Sets the taxes property value. Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
     * @param array<Tax>|null $value Value to set for the taxes property.
    */
    public function setTaxes(?array $value): void {
        $this->taxes = $value;
    }

    /**
     * Sets the title property value. The title of the listing.<br><br><span class="tablenote"><strong>Note:</strong> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the total property value. This is the total price that the buyer must pay for the line item after all costs (item cost, delivery cost, taxes) are added, minus any discounts and/or promotions.<br><br><span class="tablenote"><strong>Note:</strong> For orders that are subject to eBay 'Collect and Remit' tax, the 'Collect and Remit' tax amount for the order will be included in this <strong>total</strong> value only when the <strong>fieldGroups</strong> query parameter is set to <code>TAX_BREAKDOWN</code>. If the <strong>fieldGroups</strong> query parameter is not set to <code>TAX_BREAKDOWN</code>, 'Collect and Remit' will not be added into this <strong>total</strong> value.<br><br>To determine if 'Collect and Remit' taxes were added into this <strong>total</strong> value, the user can check for the corresponding <strong>lineItems.ebayCollectAndRemitTaxes</strong> and the <strong>lineItems.taxes</strong> containers in the response. If both of these containers appear for one or more line items in the response with the following <strong>taxType</strong> values, the 'Collect and Remit' tax amount that the buyer paid is in this amount:<ul><li><code>STATE_SALES_TAX</code>: US state-mandated sales tax</li><li><code>PROVINCE_SALES_TAX</code>: Provincial Sales Tax in Canada</li><li><code>GST</code>: 'Goods and Services' tax in Canada, Australia, and New Zealand</li><li><code>VAT</code>: VAT collected for UK and EU countries</li></ul></span>
     * @param Amount|null $value Value to set for the total property.
    */
    public function setTotal(?Amount $value): void {
        $this->total = $value;
    }

    /**
     * Sets the variationAspects property value. An array of aspect name-value pairs that identifies the specific variation of a multi-variation listing. This array can contain multiple name-value pairs, such as <code>color:blue</code> and <code>size:large</code>, and will only be returned for orders created from a multiple-variation listing.
     * @param array<NameValuePair>|null $value Value to set for the variationAspects property.
    */
    public function setVariationAspects(?array $value): void {
        $this->variationAspects = $value;
    }

}
