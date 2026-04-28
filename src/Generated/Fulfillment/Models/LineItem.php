<?php

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
     * @var array<Property>|null $compatibilityProperties This array is only returned for a Parts & Accessory item, and identifies the buyer's motor vehicle that is compatible with the part or accessory.
    */
    private ?array $compatibilityProperties = null;
    
    /**
     * @var DeliveryCost|null $deliveryCost This type contains a breakdown of all costs associated with the fulfillment of a line item.
    */
    private ?DeliveryCost $deliveryCost = null;
    
    /**
     * @var Amount|null $discountedLineItemCost This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $discountedLineItemCost = null;
    
    /**
     * @var array<EbayCollectAndRemitTax>|null $ebayCollectAndRemitTaxes This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>eBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
    */
    private ?array $ebayCollectAndRemitTaxes = null;
    
    /**
     * @var EbayCollectedCharges|null $ebayCollectedCharges This type contains the breakdown of costs that are collected by eBay from the buyer.
    */
    private ?EbayCollectedCharges $ebayCollectedCharges = null;
    
    /**
     * @var GiftDetails|null $giftDetails This type contains information about a digital gift card line item that was purchased as a gift and sent to the recipient by email.<br><br><span class="tablenote"><strong>Note:</strong> <b>GiftDetails</b> will not be returned for any order that is more than 90 days old.</span>
    */
    private ?GiftDetails $giftDetails = null;
    
    /**
     * @var ItemLocation|null $itemLocation This type describes the physical location of an order.
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
     * @var Amount|null $lineItemCost This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $lineItemCost = null;
    
    /**
     * @var LineItemFulfillmentInstructions|null $lineItemFulfillmentInstructions This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for <i>eBay Guaranteed Delivery</i> as well as for non-guaranteed delivery.
    */
    private ?LineItemFulfillmentInstructions $lineItemFulfillmentInstructions = null;
    
    /**
     * @var string|null $lineItemFulfillmentStatus This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:LineItemFulfillmentStatusEnum'>eBay API documentation</a>
    */
    private ?string $lineItemFulfillmentStatus = null;
    
    /**
     * @var string|null $lineItemId This is the unique identifier of an eBay order line item. This field is created as soon as there is a commitment to buy from the seller.
    */
    private ?string $lineItemId = null;
    
    /**
     * @var array<LinkedOrderLineItem>|null $linkedOrderLineItems An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID, and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
    */
    private ?array $linkedOrderLineItems = null;
    
    /**
     * @var string|null $listingMarketplaceId The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $listingMarketplaceId = null;
    
    /**
     * @var LineItemProperties|null $properties This type contains information about the eBay programs under which a line item was listed and sold.
    */
    private ?LineItemProperties $properties = null;
    
    /**
     * @var string|null $purchaseMarketplaceId The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $purchaseMarketplaceId = null;
    
    /**
     * @var int|null $quantity The number of units of the line item in the order. These are represented as a group by a single <b>lineItemId</b>.
    */
    private ?int $quantity = null;
    
    /**
     * @var array<LineItemRefund>|null $refunds This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
    */
    private ?array $refunds = null;
    
    /**
     * @var string|null $sku Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model.
    */
    private ?string $sku = null;
    
    /**
     * @var string|null $soldFormat The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:SoldFormatEnum'>eBay API documentation</a>
    */
    private ?string $soldFormat = null;
    
    /**
     * @var array<Tax>|null $taxes Contains a list of taxes applied to the line item, if any. This array is always returned, but will be returned as empty if no taxes are applicable to the line item.
    */
    private ?array $taxes = null;
    
    /**
     * @var string|null $title The title of the listing.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
    */
    private ?string $title = null;
    
    /**
     * @var Amount|null $total This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
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
     * Gets the compatibilityProperties property value. This array is only returned for a Parts & Accessory item, and identifies the buyer's motor vehicle that is compatible with the part or accessory.
     * @return array<Property>|null
    */
    public function getCompatibilityProperties(): ?array {
        return $this->compatibilityProperties;
    }

    /**
     * Gets the deliveryCost property value. This type contains a breakdown of all costs associated with the fulfillment of a line item.
     * @return DeliveryCost|null
    */
    public function getDeliveryCost(): ?DeliveryCost {
        return $this->deliveryCost;
    }

    /**
     * Gets the discountedLineItemCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getDiscountedLineItemCost(): ?Amount {
        return $this->discountedLineItemCost;
    }

    /**
     * Gets the ebayCollectAndRemitTaxes property value. This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>eBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     * @return array<EbayCollectAndRemitTax>|null
    */
    public function getEbayCollectAndRemitTaxes(): ?array {
        return $this->ebayCollectAndRemitTaxes;
    }

    /**
     * Gets the ebayCollectedCharges property value. This type contains the breakdown of costs that are collected by eBay from the buyer.
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
            'lineItemFulfillmentStatus' => fn(ParseNode $n) => $o->setLineItemFulfillmentStatus($n->getStringValue()),
            'lineItemId' => fn(ParseNode $n) => $o->setLineItemId($n->getStringValue()),
            'linkedOrderLineItems' => fn(ParseNode $n) => $o->setLinkedOrderLineItems($n->getCollectionOfObjectValues([LinkedOrderLineItem::class, 'createFromDiscriminatorValue'])),
            'listingMarketplaceId' => fn(ParseNode $n) => $o->setListingMarketplaceId($n->getStringValue()),
            'properties' => fn(ParseNode $n) => $o->setProperties($n->getObjectValue([LineItemProperties::class, 'createFromDiscriminatorValue'])),
            'purchaseMarketplaceId' => fn(ParseNode $n) => $o->setPurchaseMarketplaceId($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'refunds' => fn(ParseNode $n) => $o->setRefunds($n->getCollectionOfObjectValues([LineItemRefund::class, 'createFromDiscriminatorValue'])),
            'sku' => fn(ParseNode $n) => $o->setSku($n->getStringValue()),
            'soldFormat' => fn(ParseNode $n) => $o->setSoldFormat($n->getStringValue()),
            'taxes' => fn(ParseNode $n) => $o->setTaxes($n->getCollectionOfObjectValues([Tax::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'variationAspects' => fn(ParseNode $n) => $o->setVariationAspects($n->getCollectionOfObjectValues([NameValuePair::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the giftDetails property value. This type contains information about a digital gift card line item that was purchased as a gift and sent to the recipient by email.<br><br><span class="tablenote"><strong>Note:</strong> <b>GiftDetails</b> will not be returned for any order that is more than 90 days old.</span>
     * @return GiftDetails|null
    */
    public function getGiftDetails(): ?GiftDetails {
        return $this->giftDetails;
    }

    /**
     * Gets the itemLocation property value. This type describes the physical location of an order.
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
     * Gets the lineItemCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getLineItemCost(): ?Amount {
        return $this->lineItemCost;
    }

    /**
     * Gets the lineItemFulfillmentInstructions property value. This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for <i>eBay Guaranteed Delivery</i> as well as for non-guaranteed delivery.
     * @return LineItemFulfillmentInstructions|null
    */
    public function getLineItemFulfillmentInstructions(): ?LineItemFulfillmentInstructions {
        return $this->lineItemFulfillmentInstructions;
    }

    /**
     * Gets the lineItemFulfillmentStatus property value. This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:LineItemFulfillmentStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getLineItemFulfillmentStatus(): ?string {
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
     * Gets the linkedOrderLineItems property value. An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID, and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
     * @return array<LinkedOrderLineItem>|null
    */
    public function getLinkedOrderLineItems(): ?array {
        return $this->linkedOrderLineItems;
    }

    /**
     * Gets the listingMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getListingMarketplaceId(): ?string {
        return $this->listingMarketplaceId;
    }

    /**
     * Gets the properties property value. This type contains information about the eBay programs under which a line item was listed and sold.
     * @return LineItemProperties|null
    */
    public function getProperties(): ?LineItemProperties {
        return $this->properties;
    }

    /**
     * Gets the purchaseMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPurchaseMarketplaceId(): ?string {
        return $this->purchaseMarketplaceId;
    }

    /**
     * Gets the quantity property value. The number of units of the line item in the order. These are represented as a group by a single <b>lineItemId</b>.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the refunds property value. This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @return array<LineItemRefund>|null
    */
    public function getRefunds(): ?array {
        return $this->refunds;
    }

    /**
     * Gets the sku property value. Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model.
     * @return string|null
    */
    public function getSku(): ?string {
        return $this->sku;
    }

    /**
     * Gets the soldFormat property value. The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:SoldFormatEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getSoldFormat(): ?string {
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
     * Gets the title property value. The title of the listing.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the total property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
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
        $writer->writeStringValue('lineItemFulfillmentStatus', $this->getLineItemFulfillmentStatus());
        $writer->writeStringValue('lineItemId', $this->getLineItemId());
        $writer->writeCollectionOfObjectValues('linkedOrderLineItems', $this->getLinkedOrderLineItems());
        $writer->writeStringValue('listingMarketplaceId', $this->getListingMarketplaceId());
        $writer->writeObjectValue('properties', $this->getProperties());
        $writer->writeStringValue('purchaseMarketplaceId', $this->getPurchaseMarketplaceId());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeCollectionOfObjectValues('refunds', $this->getRefunds());
        $writer->writeStringValue('sku', $this->getSku());
        $writer->writeStringValue('soldFormat', $this->getSoldFormat());
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
     * Sets the compatibilityProperties property value. This array is only returned for a Parts & Accessory item, and identifies the buyer's motor vehicle that is compatible with the part or accessory.
     * @param array<Property>|null $value Value to set for the compatibilityProperties property.
    */
    public function setCompatibilityProperties(?array $value): void {
        $this->compatibilityProperties = $value;
    }

    /**
     * Sets the deliveryCost property value. This type contains a breakdown of all costs associated with the fulfillment of a line item.
     * @param DeliveryCost|null $value Value to set for the deliveryCost property.
    */
    public function setDeliveryCost(?DeliveryCost $value): void {
        $this->deliveryCost = $value;
    }

    /**
     * Sets the discountedLineItemCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the discountedLineItemCost property.
    */
    public function setDiscountedLineItemCost(?Amount $value): void {
        $this->discountedLineItemCost = $value;
    }

    /**
     * Sets the ebayCollectAndRemitTaxes property value. This container will be returned if the order line item is subject to a 'Collect and Remit' tax that eBay will collect and remit to the proper taxing authority on the buyer's behalf.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul>The amount of this tax is shown in the <strong>amount</strong> field, and the type of tax is shown in the <strong>taxType</strong> field.<br><br>eBay will display the tax type and amount during checkout in accordance with the buyer's address, and handle collection and remittance of the tax without requiring the seller to take any action.
     * @param array<EbayCollectAndRemitTax>|null $value Value to set for the ebayCollectAndRemitTaxes property.
    */
    public function setEbayCollectAndRemitTaxes(?array $value): void {
        $this->ebayCollectAndRemitTaxes = $value;
    }

    /**
     * Sets the ebayCollectedCharges property value. This type contains the breakdown of costs that are collected by eBay from the buyer.
     * @param EbayCollectedCharges|null $value Value to set for the ebayCollectedCharges property.
    */
    public function setEbayCollectedCharges(?EbayCollectedCharges $value): void {
        $this->ebayCollectedCharges = $value;
    }

    /**
     * Sets the giftDetails property value. This type contains information about a digital gift card line item that was purchased as a gift and sent to the recipient by email.<br><br><span class="tablenote"><strong>Note:</strong> <b>GiftDetails</b> will not be returned for any order that is more than 90 days old.</span>
     * @param GiftDetails|null $value Value to set for the giftDetails property.
    */
    public function setGiftDetails(?GiftDetails $value): void {
        $this->giftDetails = $value;
    }

    /**
     * Sets the itemLocation property value. This type describes the physical location of an order.
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
     * Sets the lineItemCost property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the lineItemCost property.
    */
    public function setLineItemCost(?Amount $value): void {
        $this->lineItemCost = $value;
    }

    /**
     * Sets the lineItemFulfillmentInstructions property value. This type contains the specifications for processing the fulfillment of a line item, including the handling window and the delivery window. These fields provide guidance for <i>eBay Guaranteed Delivery</i> as well as for non-guaranteed delivery.
     * @param LineItemFulfillmentInstructions|null $value Value to set for the lineItemFulfillmentInstructions property.
    */
    public function setLineItemFulfillmentInstructions(?LineItemFulfillmentInstructions $value): void {
        $this->lineItemFulfillmentInstructions = $value;
    }

    /**
     * Sets the lineItemFulfillmentStatus property value. This enumeration value indicates the current fulfillment status of the line item. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:LineItemFulfillmentStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the lineItemFulfillmentStatus property.
    */
    public function setLineItemFulfillmentStatus(?string $value): void {
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
     * Sets the linkedOrderLineItems property value. An array of one or more line items related to the corresponding order, but not a part of that order. Details include the order ID, line item ID, and title of the linked line item, the seller of that item, item specifics, estimated delivery times, and shipment tracking (if available).
     * @param array<LinkedOrderLineItem>|null $value Value to set for the linkedOrderLineItems property.
    */
    public function setLinkedOrderLineItems(?array $value): void {
        $this->linkedOrderLineItems = $value;
    }

    /**
     * Sets the listingMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the listingMarketplaceId property.
    */
    public function setListingMarketplaceId(?string $value): void {
        $this->listingMarketplaceId = $value;
    }

    /**
     * Sets the properties property value. This type contains information about the eBay programs under which a line item was listed and sold.
     * @param LineItemProperties|null $value Value to set for the properties property.
    */
    public function setProperties(?LineItemProperties $value): void {
        $this->properties = $value;
    }

    /**
     * Sets the purchaseMarketplaceId property value. The unique identifier of the eBay marketplace where the line item was listed. Often, the <strong>listingMarketplaceId</strong> and the <strong>purchaseMarketplaceId</strong> identifier are the same, but there are occasions when an item will surface on multiple eBay marketplaces. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the purchaseMarketplaceId property.
    */
    public function setPurchaseMarketplaceId(?string $value): void {
        $this->purchaseMarketplaceId = $value;
    }

    /**
     * Sets the quantity property value. The number of units of the line item in the order. These are represented as a group by a single <b>lineItemId</b>.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the refunds property value. This array is always returned, but is returned as an empty array unless the seller has submitted a partial or full refund to the buyer for the order. If a refund has occurred, the refund amount and refund date will be shown for each refund.
     * @param array<LineItemRefund>|null $value Value to set for the refunds property.
    */
    public function setRefunds(?array $value): void {
        $this->refunds = $value;
    }

    /**
     * Sets the sku property value. Seller-defined Stock-Keeping Unit (SKU). This inventory identifier must be unique within the seller's eBay inventory. SKUs are optional when listing in the legacy/Trading API system, but SKUs are required when listing items through the Inventory API model.
     * @param string|null $value Value to set for the sku property.
    */
    public function setSku(?string $value): void {
        $this->sku = $value;
    }

    /**
     * Sets the soldFormat property value. The eBay listing type of the line item. The most common listing types are <code>AUCTION</code> and <code>FIXED_PRICE</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:SoldFormatEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the soldFormat property.
    */
    public function setSoldFormat(?string $value): void {
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
     * Sets the title property value. The title of the listing.<br><br><span class="tablenote"><b>Note:</b> The Item ID value for the listing will be returned in this field instead of the actual title if this particular listing is on-hold due to an eBay policy violation.</span>
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the total property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
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
