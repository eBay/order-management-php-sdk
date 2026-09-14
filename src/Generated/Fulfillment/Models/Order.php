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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains the details of an order, including information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status.
*/
class Order implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Buyer|null $buyer This container consists of information about the order's buyer. At this time, only the buyer's eBay user ID is returned, but it's possible that more buyer information can be added to this container in the future.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
    */
    private ?Buyer $buyer = null;
    
    /**
     * @var string|null $buyerCheckoutNotes This field contains any comments that the buyer left for the seller about the order during the checkout process. This field is only returned if a buyer left comments at checkout time. 
    */
    private ?string $buyerCheckoutNotes = null;
    
    /**
     * @var CancelStatus|null $cancelStatus This container consists of order cancellation information if a cancel request has been made. This container is always returned, and if no cancel request has been made, the <strong>cancelState</strong> field is returned with a value of <code>NONE_REQUESTED</code>, and an empty <strong>cancelRequests</strong> array is also returned.
    */
    private ?CancelStatus $cancelStatus = null;
    
    /**
     * @var string|null $creationDate The date and time that the order was created. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $creationDate = null;
    
    /**
     * @var bool|null $ebayCollectAndRemitTax This field is only returned if <code>true</code> and indicates that eBay will collect tax (US state-mandated sales tax, Federal and Provincial Sales Tax in Canada, 'Goods and Services' tax in Canada, Australia, and New Zealand, and VAT collected for UK and EU countries,) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. If this field is returned, the seller should search for one or more <strong>ebayCollectAndRemitTaxes</strong> containers at the line item level to get more information about the type of tax and the amount.
    */
    private ?bool $ebayCollectAndRemitTax = null;
    
    /**
     * @var array<string>|null $fulfillmentHrefs This array contains a list of one or more <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-getshippingfulfillment" target="_blank">getShippingFulfillment</a> call URIs that can be used to retrieve shipping fulfillments that have been set up for the order.
    */
    private ?array $fulfillmentHrefs = null;
    
    /**
     * @var array<FulfillmentStartInstruction>|null $fulfillmentStartInstructions This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.<br><br><span class="tablenote"><strong>Note:</strong> Although this container is presented as an array, it currently returns only one set of fulfillment specifications. Additional array members will be supported in future functionality.</span>
    */
    private ?array $fulfillmentStartInstructions = null;
    
    /**
     * @var string|null $lastModifiedDate The date and time that the order was last modified. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $lastModifiedDate = null;
    
    /**
     * @var array<LineItem>|null $lineItems This array contains the details for all line items that comprise the order.
    */
    private ?array $lineItems = null;
    
    /**
     * @var OrderFulfillmentStatus|null $orderFulfillmentStatus The degree to which fulfillment of the order is complete. See the <strong>OrderFulfillmentStatus</strong> type definition for more information about each possible fulfillment state.
    */
    private ?OrderFulfillmentStatus $orderFulfillmentStatus = null;
    
    /**
     * @var string|null $orderId The unique identifier of the order. This field is always returned.
    */
    private ?string $orderId = null;
    
    /**
     * @var OrderPaymentStatusEnum|null $orderPaymentStatus The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the <strong>OrderPaymentStatusEnum</strong> type definition for more information about each possible payment/refund state.
    */
    private ?OrderPaymentStatusEnum $orderPaymentStatus = null;
    
    /**
     * @var PaymentSummary|null $paymentSummary This container consists of detailed payment information for the order, including buyer payment for the order, refund information (if applicable), and seller payment holds (if applicable).
    */
    private ?PaymentSummary $paymentSummary = null;
    
    /**
     * @var PricingSummary|null $pricingSummary This container consists of a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
    */
    private ?PricingSummary $pricingSummary = null;
    
    /**
     * @var Program|null $program This container is returned for orders that are eligible for eBay's Authenticity Guarantee service. The seller ships Authenticity Guarantee service items to the authentication partner instead of the buyer. The authenticator address is found in the <code>fulfillmentStartInstructions.shippingStep.shipTo</code> container. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
    */
    private ?Program $program = null;
    
    /**
     * @var string|null $salesRecordReference An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record pages in Seller Hub. A <strong>salesRecordReference</strong> number is only generated and returned at the order level, and not at the order line item level.<br><br> In cases where the seller does not have a Selling Manager or Selling Manager Pro subscription nor access to Seller Hub, this field may not be returned.
    */
    private ?string $salesRecordReference = null;
    
    /**
     * @var string|null $sellerId The unique eBay user ID of the seller who sold the order.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
    */
    private ?string $sellerId = null;
    
    /**
     * @var Amount|null $totalFeeBasisAmount This is the cumulative base amount used to calculate the final value fees for each order. The final value fees are deducted from the seller payout associated with the order. Final value fees are calculated as a percentage of order cost (item cost + shipping cost) and the percentage rate can vary by eBay category. 
    */
    private ?Amount $totalFeeBasisAmount = null;
    
    /**
     * @var Amount|null $totalMarketplaceFee This is the cumulative fees accrued for the order and deducted from the seller payout.
    */
    private ?Amount $totalMarketplaceFee = null;
    
    /**
     * Instantiates a new Order and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Order
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Order {
        return new Order();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyer property value. This container consists of information about the order's buyer. At this time, only the buyer's eBay user ID is returned, but it's possible that more buyer information can be added to this container in the future.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @return Buyer|null
    */
    public function getBuyer(): ?Buyer {
        return $this->buyer;
    }

    /**
     * Gets the buyerCheckoutNotes property value. This field contains any comments that the buyer left for the seller about the order during the checkout process. This field is only returned if a buyer left comments at checkout time. 
     * @return string|null
    */
    public function getBuyerCheckoutNotes(): ?string {
        return $this->buyerCheckoutNotes;
    }

    /**
     * Gets the cancelStatus property value. This container consists of order cancellation information if a cancel request has been made. This container is always returned, and if no cancel request has been made, the <strong>cancelState</strong> field is returned with a value of <code>NONE_REQUESTED</code>, and an empty <strong>cancelRequests</strong> array is also returned.
     * @return CancelStatus|null
    */
    public function getCancelStatus(): ?CancelStatus {
        return $this->cancelStatus;
    }

    /**
     * Gets the creationDate property value. The date and time that the order was created. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the ebayCollectAndRemitTax property value. This field is only returned if <code>true</code> and indicates that eBay will collect tax (US state-mandated sales tax, Federal and Provincial Sales Tax in Canada, 'Goods and Services' tax in Canada, Australia, and New Zealand, and VAT collected for UK and EU countries,) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. If this field is returned, the seller should search for one or more <strong>ebayCollectAndRemitTaxes</strong> containers at the line item level to get more information about the type of tax and the amount.
     * @return bool|null
    */
    public function getEbayCollectAndRemitTax(): ?bool {
        return $this->ebayCollectAndRemitTax;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getObjectValue([Buyer::class, 'createFromDiscriminatorValue'])),
            'buyerCheckoutNotes' => fn(ParseNode $n) => $o->setBuyerCheckoutNotes($n->getStringValue()),
            'cancelStatus' => fn(ParseNode $n) => $o->setCancelStatus($n->getObjectValue([CancelStatus::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'ebayCollectAndRemitTax' => fn(ParseNode $n) => $o->setEbayCollectAndRemitTax($n->getBooleanValue()),
            'fulfillmentHrefs' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFulfillmentHrefs($val);
            },
            'fulfillmentStartInstructions' => fn(ParseNode $n) => $o->setFulfillmentStartInstructions($n->getCollectionOfObjectValues([FulfillmentStartInstruction::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDate' => fn(ParseNode $n) => $o->setLastModifiedDate($n->getStringValue()),
            'lineItems' => fn(ParseNode $n) => $o->setLineItems($n->getCollectionOfObjectValues([LineItem::class, 'createFromDiscriminatorValue'])),
            'orderFulfillmentStatus' => fn(ParseNode $n) => $o->setOrderFulfillmentStatus($n->getEnumValue(OrderFulfillmentStatus::class)),
            'orderId' => fn(ParseNode $n) => $o->setOrderId($n->getStringValue()),
            'orderPaymentStatus' => fn(ParseNode $n) => $o->setOrderPaymentStatus($n->getEnumValue(OrderPaymentStatusEnum::class)),
            'paymentSummary' => fn(ParseNode $n) => $o->setPaymentSummary($n->getObjectValue([PaymentSummary::class, 'createFromDiscriminatorValue'])),
            'pricingSummary' => fn(ParseNode $n) => $o->setPricingSummary($n->getObjectValue([PricingSummary::class, 'createFromDiscriminatorValue'])),
            'program' => fn(ParseNode $n) => $o->setProgram($n->getObjectValue([Program::class, 'createFromDiscriminatorValue'])),
            'salesRecordReference' => fn(ParseNode $n) => $o->setSalesRecordReference($n->getStringValue()),
            'sellerId' => fn(ParseNode $n) => $o->setSellerId($n->getStringValue()),
            'totalFeeBasisAmount' => fn(ParseNode $n) => $o->setTotalFeeBasisAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalMarketplaceFee' => fn(ParseNode $n) => $o->setTotalMarketplaceFee($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fulfillmentHrefs property value. This array contains a list of one or more <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-getshippingfulfillment" target="_blank">getShippingFulfillment</a> call URIs that can be used to retrieve shipping fulfillments that have been set up for the order.
     * @return array<string>|null
    */
    public function getFulfillmentHrefs(): ?array {
        return $this->fulfillmentHrefs;
    }

    /**
     * Gets the fulfillmentStartInstructions property value. This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.<br><br><span class="tablenote"><strong>Note:</strong> Although this container is presented as an array, it currently returns only one set of fulfillment specifications. Additional array members will be supported in future functionality.</span>
     * @return array<FulfillmentStartInstruction>|null
    */
    public function getFulfillmentStartInstructions(): ?array {
        return $this->fulfillmentStartInstructions;
    }

    /**
     * Gets the lastModifiedDate property value. The date and time that the order was last modified. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getLastModifiedDate(): ?string {
        return $this->lastModifiedDate;
    }

    /**
     * Gets the lineItems property value. This array contains the details for all line items that comprise the order.
     * @return array<LineItem>|null
    */
    public function getLineItems(): ?array {
        return $this->lineItems;
    }

    /**
     * Gets the orderFulfillmentStatus property value. The degree to which fulfillment of the order is complete. See the <strong>OrderFulfillmentStatus</strong> type definition for more information about each possible fulfillment state.
     * @return OrderFulfillmentStatus|null
    */
    public function getOrderFulfillmentStatus(): ?OrderFulfillmentStatus {
        return $this->orderFulfillmentStatus;
    }

    /**
     * Gets the orderId property value. The unique identifier of the order. This field is always returned.
     * @return string|null
    */
    public function getOrderId(): ?string {
        return $this->orderId;
    }

    /**
     * Gets the orderPaymentStatus property value. The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the <strong>OrderPaymentStatusEnum</strong> type definition for more information about each possible payment/refund state.
     * @return OrderPaymentStatusEnum|null
    */
    public function getOrderPaymentStatus(): ?OrderPaymentStatusEnum {
        return $this->orderPaymentStatus;
    }

    /**
     * Gets the paymentSummary property value. This container consists of detailed payment information for the order, including buyer payment for the order, refund information (if applicable), and seller payment holds (if applicable).
     * @return PaymentSummary|null
    */
    public function getPaymentSummary(): ?PaymentSummary {
        return $this->paymentSummary;
    }

    /**
     * Gets the pricingSummary property value. This container consists of a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
     * @return PricingSummary|null
    */
    public function getPricingSummary(): ?PricingSummary {
        return $this->pricingSummary;
    }

    /**
     * Gets the program property value. This container is returned for orders that are eligible for eBay's Authenticity Guarantee service. The seller ships Authenticity Guarantee service items to the authentication partner instead of the buyer. The authenticator address is found in the <code>fulfillmentStartInstructions.shippingStep.shipTo</code> container. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
     * @return Program|null
    */
    public function getProgram(): ?Program {
        return $this->program;
    }

    /**
     * Gets the salesRecordReference property value. An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record pages in Seller Hub. A <strong>salesRecordReference</strong> number is only generated and returned at the order level, and not at the order line item level.<br><br> In cases where the seller does not have a Selling Manager or Selling Manager Pro subscription nor access to Seller Hub, this field may not be returned.
     * @return string|null
    */
    public function getSalesRecordReference(): ?string {
        return $this->salesRecordReference;
    }

    /**
     * Gets the sellerId property value. The unique eBay user ID of the seller who sold the order.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @return string|null
    */
    public function getSellerId(): ?string {
        return $this->sellerId;
    }

    /**
     * Gets the totalFeeBasisAmount property value. This is the cumulative base amount used to calculate the final value fees for each order. The final value fees are deducted from the seller payout associated with the order. Final value fees are calculated as a percentage of order cost (item cost + shipping cost) and the percentage rate can vary by eBay category. 
     * @return Amount|null
    */
    public function getTotalFeeBasisAmount(): ?Amount {
        return $this->totalFeeBasisAmount;
    }

    /**
     * Gets the totalMarketplaceFee property value. This is the cumulative fees accrued for the order and deducted from the seller payout.
     * @return Amount|null
    */
    public function getTotalMarketplaceFee(): ?Amount {
        return $this->totalMarketplaceFee;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('buyer', $this->getBuyer());
        $writer->writeStringValue('buyerCheckoutNotes', $this->getBuyerCheckoutNotes());
        $writer->writeObjectValue('cancelStatus', $this->getCancelStatus());
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeBooleanValue('ebayCollectAndRemitTax', $this->getEbayCollectAndRemitTax());
        $writer->writeCollectionOfPrimitiveValues('fulfillmentHrefs', $this->getFulfillmentHrefs());
        $writer->writeCollectionOfObjectValues('fulfillmentStartInstructions', $this->getFulfillmentStartInstructions());
        $writer->writeStringValue('lastModifiedDate', $this->getLastModifiedDate());
        $writer->writeCollectionOfObjectValues('lineItems', $this->getLineItems());
        $writer->writeEnumValue('orderFulfillmentStatus', $this->getOrderFulfillmentStatus());
        $writer->writeStringValue('orderId', $this->getOrderId());
        $writer->writeEnumValue('orderPaymentStatus', $this->getOrderPaymentStatus());
        $writer->writeObjectValue('paymentSummary', $this->getPaymentSummary());
        $writer->writeObjectValue('pricingSummary', $this->getPricingSummary());
        $writer->writeObjectValue('program', $this->getProgram());
        $writer->writeStringValue('salesRecordReference', $this->getSalesRecordReference());
        $writer->writeStringValue('sellerId', $this->getSellerId());
        $writer->writeObjectValue('totalFeeBasisAmount', $this->getTotalFeeBasisAmount());
        $writer->writeObjectValue('totalMarketplaceFee', $this->getTotalMarketplaceFee());
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
     * Sets the buyer property value. This container consists of information about the order's buyer. At this time, only the buyer's eBay user ID is returned, but it's possible that more buyer information can be added to this container in the future.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @param Buyer|null $value Value to set for the buyer property.
    */
    public function setBuyer(?Buyer $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the buyerCheckoutNotes property value. This field contains any comments that the buyer left for the seller about the order during the checkout process. This field is only returned if a buyer left comments at checkout time. 
     * @param string|null $value Value to set for the buyerCheckoutNotes property.
    */
    public function setBuyerCheckoutNotes(?string $value): void {
        $this->buyerCheckoutNotes = $value;
    }

    /**
     * Sets the cancelStatus property value. This container consists of order cancellation information if a cancel request has been made. This container is always returned, and if no cancel request has been made, the <strong>cancelState</strong> field is returned with a value of <code>NONE_REQUESTED</code>, and an empty <strong>cancelRequests</strong> array is also returned.
     * @param CancelStatus|null $value Value to set for the cancelStatus property.
    */
    public function setCancelStatus(?CancelStatus $value): void {
        $this->cancelStatus = $value;
    }

    /**
     * Sets the creationDate property value. The date and time that the order was created. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the ebayCollectAndRemitTax property value. This field is only returned if <code>true</code> and indicates that eBay will collect tax (US state-mandated sales tax, Federal and Provincial Sales Tax in Canada, 'Goods and Services' tax in Canada, Australia, and New Zealand, and VAT collected for UK and EU countries,) for at least one line item in the order, and remit the tax to the taxing authority of the buyer's residence. If this field is returned, the seller should search for one or more <strong>ebayCollectAndRemitTaxes</strong> containers at the line item level to get more information about the type of tax and the amount.
     * @param bool|null $value Value to set for the ebayCollectAndRemitTax property.
    */
    public function setEbayCollectAndRemitTax(?bool $value): void {
        $this->ebayCollectAndRemitTax = $value;
    }

    /**
     * Sets the fulfillmentHrefs property value. This array contains a list of one or more <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-getshippingfulfillment" target="_blank">getShippingFulfillment</a> call URIs that can be used to retrieve shipping fulfillments that have been set up for the order.
     * @param array<string>|null $value Value to set for the fulfillmentHrefs property.
    */
    public function setFulfillmentHrefs(?array $value): void {
        $this->fulfillmentHrefs = $value;
    }

    /**
     * Sets the fulfillmentStartInstructions property value. This container consists of a set of specifications for fulfilling the order, including the type of fulfillment, shipping carrier and service, shipping address, and estimated delivery window. These instructions are derived from the buyer's and seller's eBay account preferences, the listing parameters, and the buyer's checkout selections. The seller can use them as a starting point for packaging, addressing, and shipping the order.<br><br><span class="tablenote"><strong>Note:</strong> Although this container is presented as an array, it currently returns only one set of fulfillment specifications. Additional array members will be supported in future functionality.</span>
     * @param array<FulfillmentStartInstruction>|null $value Value to set for the fulfillmentStartInstructions property.
    */
    public function setFulfillmentStartInstructions(?array $value): void {
        $this->fulfillmentStartInstructions = $value;
    }

    /**
     * Sets the lastModifiedDate property value. The date and time that the order was last modified. This timestamp is in <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock. <br><br><strong>Format:</strong> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><strong>Example:</strong> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the lastModifiedDate property.
    */
    public function setLastModifiedDate(?string $value): void {
        $this->lastModifiedDate = $value;
    }

    /**
     * Sets the lineItems property value. This array contains the details for all line items that comprise the order.
     * @param array<LineItem>|null $value Value to set for the lineItems property.
    */
    public function setLineItems(?array $value): void {
        $this->lineItems = $value;
    }

    /**
     * Sets the orderFulfillmentStatus property value. The degree to which fulfillment of the order is complete. See the <strong>OrderFulfillmentStatus</strong> type definition for more information about each possible fulfillment state.
     * @param OrderFulfillmentStatus|null $value Value to set for the orderFulfillmentStatus property.
    */
    public function setOrderFulfillmentStatus(?OrderFulfillmentStatus $value): void {
        $this->orderFulfillmentStatus = $value;
    }

    /**
     * Sets the orderId property value. The unique identifier of the order. This field is always returned.
     * @param string|null $value Value to set for the orderId property.
    */
    public function setOrderId(?string $value): void {
        $this->orderId = $value;
    }

    /**
     * Sets the orderPaymentStatus property value. The enumeration value returned in this field indicates the current payment status of an order, or in case of a refund request, the current status of the refund. See the <strong>OrderPaymentStatusEnum</strong> type definition for more information about each possible payment/refund state.
     * @param OrderPaymentStatusEnum|null $value Value to set for the orderPaymentStatus property.
    */
    public function setOrderPaymentStatus(?OrderPaymentStatusEnum $value): void {
        $this->orderPaymentStatus = $value;
    }

    /**
     * Sets the paymentSummary property value. This container consists of detailed payment information for the order, including buyer payment for the order, refund information (if applicable), and seller payment holds (if applicable).
     * @param PaymentSummary|null $value Value to set for the paymentSummary property.
    */
    public function setPaymentSummary(?PaymentSummary $value): void {
        $this->paymentSummary = $value;
    }

    /**
     * Sets the pricingSummary property value. This container consists of a summary of cumulative costs and charges for all line items of an order, including item price, price adjustments, sales taxes, delivery costs, and order discounts.
     * @param PricingSummary|null $value Value to set for the pricingSummary property.
    */
    public function setPricingSummary(?PricingSummary $value): void {
        $this->pricingSummary = $value;
    }

    /**
     * Sets the program property value. This container is returned for orders that are eligible for eBay's Authenticity Guarantee service. The seller ships Authenticity Guarantee service items to the authentication partner instead of the buyer. The authenticator address is found in the <code>fulfillmentStartInstructions.shippingStep.shipTo</code> container. If the item is successfully authenticated, the authenticator will ship the item to the buyer.
     * @param Program|null $value Value to set for the program property.
    */
    public function setProgram(?Program $value): void {
        $this->program = $value;
    }

    /**
     * Sets the salesRecordReference property value. An eBay-generated identifier that is used to identify and manage orders through the Selling Manager and Selling Manager Pro tools. This order identifier can also be found on the Orders grid page and in the Sales Record pages in Seller Hub. A <strong>salesRecordReference</strong> number is only generated and returned at the order level, and not at the order line item level.<br><br> In cases where the seller does not have a Selling Manager or Selling Manager Pro subscription nor access to Seller Hub, this field may not be returned.
     * @param string|null $value Value to set for the salesRecordReference property.
    */
    public function setSalesRecordReference(?string $value): void {
        $this->salesRecordReference = $value;
    }

    /**
     * Sets the sellerId property value. The unique eBay user ID of the seller who sold the order.<br><br><span class="tablenote"><strong>Note:</strong> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html" target="_blank">Data Handling Compliance</a>. </span>
     * @param string|null $value Value to set for the sellerId property.
    */
    public function setSellerId(?string $value): void {
        $this->sellerId = $value;
    }

    /**
     * Sets the totalFeeBasisAmount property value. This is the cumulative base amount used to calculate the final value fees for each order. The final value fees are deducted from the seller payout associated with the order. Final value fees are calculated as a percentage of order cost (item cost + shipping cost) and the percentage rate can vary by eBay category. 
     * @param Amount|null $value Value to set for the totalFeeBasisAmount property.
    */
    public function setTotalFeeBasisAmount(?Amount $value): void {
        $this->totalFeeBasisAmount = $value;
    }

    /**
     * Sets the totalMarketplaceFee property value. This is the cumulative fees accrued for the order and deducted from the seller payout.
     * @param Amount|null $value Value to set for the totalMarketplaceFee property.
    */
    public function setTotalMarketplaceFee(?Amount $value): void {
        $this->totalMarketplaceFee = $value;
    }

}
