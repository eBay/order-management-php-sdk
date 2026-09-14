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
 * This type contains information about the type and amount of tax that eBay will collect and remit to the state, province, country, or other taxing authority in the buyer's location, as required by that taxing authority.<br><br>'Collect and Remit' tax includes:<ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, and New Zealand</li><li>VAT collected for the UK and EU countries</li></ul>
*/
class EbayCollectAndRemitTax implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount The monetary amount of the 'Collect and Remit' tax. This currently includes the following:<br><ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul><br><span class="tablenote"><strong>Note:</strong> If the corresponding <strong>taxType</strong> is <code>STATE_SALES_TAX</code>, <code>PROVINCE_SALES_TAX</code>, <code>GST</code>, <code>VAT</code>, or <code>SST</code> and the <strong>lineItems.taxes</strong> container also appears for this line item with the same tax amount, the order is subject to 'eBay Collect and Remit' tax. For orders that are subject to 'eBay Collect and Remit' tax, the tax amount in this field will be included in the <strong>lineItems.total</strong>, <strong>paymentSummary.payments.amount</strong>, <strong>paymentSummary.totalDueSeller</strong>, and <strong>pricingSummary.total</strong> fields.</span>
    */
    private ?Amount $amount = null;
    
    /**
     * @var CollectionMethodEnum|null $collectionMethod This field indicates the collection method used to collect the 'Collect and Remit' tax for the order. This field is always returned for orders subject to 'Collect and Remit' tax, and its value is always <code>NET</code>.<br><br><span class="tablenote"><strong>Note:</strong> Although the <strong>collectionMethod</strong> field is returned for all orders subject to 'Collect and Remit' tax, the <strong>collectionMethod</strong> field and the <strong>CollectionMethodEnum</strong> type are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.</span>
    */
    private ?CollectionMethodEnum $collectionMethod = null;
    
    /**
     * @var EbayTaxReference|null $ebayReference This container field describes the line-item level VAT tax details.<br>
    */
    private ?EbayTaxReference $ebayReference = null;
    
    /**
     * @var TaxTypeEnum|null $taxType The type of tax and fees that eBay will collect and remit to the taxing or fee authority. See the <strong>TaxTypeEnum</strong> type definition for more information about each tax or fee type.
    */
    private ?TaxTypeEnum $taxType = null;
    
    /**
     * Instantiates a new EbayCollectAndRemitTax and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EbayCollectAndRemitTax
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EbayCollectAndRemitTax {
        return new EbayCollectAndRemitTax();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The monetary amount of the 'Collect and Remit' tax. This currently includes the following:<br><ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul><br><span class="tablenote"><strong>Note:</strong> If the corresponding <strong>taxType</strong> is <code>STATE_SALES_TAX</code>, <code>PROVINCE_SALES_TAX</code>, <code>GST</code>, <code>VAT</code>, or <code>SST</code> and the <strong>lineItems.taxes</strong> container also appears for this line item with the same tax amount, the order is subject to 'eBay Collect and Remit' tax. For orders that are subject to 'eBay Collect and Remit' tax, the tax amount in this field will be included in the <strong>lineItems.total</strong>, <strong>paymentSummary.payments.amount</strong>, <strong>paymentSummary.totalDueSeller</strong>, and <strong>pricingSummary.total</strong> fields.</span>
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the collectionMethod property value. This field indicates the collection method used to collect the 'Collect and Remit' tax for the order. This field is always returned for orders subject to 'Collect and Remit' tax, and its value is always <code>NET</code>.<br><br><span class="tablenote"><strong>Note:</strong> Although the <strong>collectionMethod</strong> field is returned for all orders subject to 'Collect and Remit' tax, the <strong>collectionMethod</strong> field and the <strong>CollectionMethodEnum</strong> type are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.</span>
     * @return CollectionMethodEnum|null
    */
    public function getCollectionMethod(): ?CollectionMethodEnum {
        return $this->collectionMethod;
    }

    /**
     * Gets the ebayReference property value. This container field describes the line-item level VAT tax details.<br>
     * @return EbayTaxReference|null
    */
    public function getEbayReference(): ?EbayTaxReference {
        return $this->ebayReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'collectionMethod' => fn(ParseNode $n) => $o->setCollectionMethod($n->getEnumValue(CollectionMethodEnum::class)),
            'ebayReference' => fn(ParseNode $n) => $o->setEbayReference($n->getObjectValue([EbayTaxReference::class, 'createFromDiscriminatorValue'])),
            'taxType' => fn(ParseNode $n) => $o->setTaxType($n->getEnumValue(TaxTypeEnum::class)),
        ];
    }

    /**
     * Gets the taxType property value. The type of tax and fees that eBay will collect and remit to the taxing or fee authority. See the <strong>TaxTypeEnum</strong> type definition for more information about each tax or fee type.
     * @return TaxTypeEnum|null
    */
    public function getTaxType(): ?TaxTypeEnum {
        return $this->taxType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeEnumValue('collectionMethod', $this->getCollectionMethod());
        $writer->writeObjectValue('ebayReference', $this->getEbayReference());
        $writer->writeEnumValue('taxType', $this->getTaxType());
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
     * Sets the amount property value. The monetary amount of the 'Collect and Remit' tax. This currently includes the following:<br><ul><li>US state-mandated sales tax</li><li>Federal and Provincial Sales Tax in Canada</li><li>'Goods and Services' tax in Canada, Australia, New Zealand, and Jersey</li><li>VAT collected for the UK, EU countries, Kazakhstan, and Belarus</li><li>Sales & Service Tax (SST) in Malaysia</li></ul><br><span class="tablenote"><strong>Note:</strong> If the corresponding <strong>taxType</strong> is <code>STATE_SALES_TAX</code>, <code>PROVINCE_SALES_TAX</code>, <code>GST</code>, <code>VAT</code>, or <code>SST</code> and the <strong>lineItems.taxes</strong> container also appears for this line item with the same tax amount, the order is subject to 'eBay Collect and Remit' tax. For orders that are subject to 'eBay Collect and Remit' tax, the tax amount in this field will be included in the <strong>lineItems.total</strong>, <strong>paymentSummary.payments.amount</strong>, <strong>paymentSummary.totalDueSeller</strong>, and <strong>pricingSummary.total</strong> fields.</span>
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the collectionMethod property value. This field indicates the collection method used to collect the 'Collect and Remit' tax for the order. This field is always returned for orders subject to 'Collect and Remit' tax, and its value is always <code>NET</code>.<br><br><span class="tablenote"><strong>Note:</strong> Although the <strong>collectionMethod</strong> field is returned for all orders subject to 'Collect and Remit' tax, the <strong>collectionMethod</strong> field and the <strong>CollectionMethodEnum</strong> type are not currently of any practical use, although this field may have use in the future. If and when the logic of this field is changed, this note will be updated and a note will also be added to the Release Notes.</span>
     * @param CollectionMethodEnum|null $value Value to set for the collectionMethod property.
    */
    public function setCollectionMethod(?CollectionMethodEnum $value): void {
        $this->collectionMethod = $value;
    }

    /**
     * Sets the ebayReference property value. This container field describes the line-item level VAT tax details.<br>
     * @param EbayTaxReference|null $value Value to set for the ebayReference property.
    */
    public function setEbayReference(?EbayTaxReference $value): void {
        $this->ebayReference = $value;
    }

    /**
     * Sets the taxType property value. The type of tax and fees that eBay will collect and remit to the taxing or fee authority. See the <strong>TaxTypeEnum</strong> type definition for more information about each tax or fee type.
     * @param TaxTypeEnum|null $value Value to set for the taxType property.
    */
    public function setTaxType(?TaxTypeEnum $value): void {
        $this->taxType = $value;
    }

}
