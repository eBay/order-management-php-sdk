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

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide a summary of information on each case that is returned in the <b>GET /post-order/v2/casemanagement/search</b> response.
*/
class CaseSummaryType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $buyer The eBay user ID of the buyer involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
    */
    private ?string $buyer = null;
    
    /**
     * @var int|null $caseId The unique identifier of the case.
    */
    private ?int $caseId = null;
    
    /**
     * @var string|null $caseStatusEnum This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
    */
    private ?string $caseStatusEnum = null;
    
    /**
     * @var Amount|null $claimAmount This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $claimAmount = null;
    
    /**
     * @var DateTime|null $creationDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $creationDate = null;
    
    /**
     * @var int|null $itemId The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
    */
    private ?int $itemId = null;
    
    /**
     * @var DateTime|null $lastModifiedDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $lastModifiedDate = null;
    
    /**
     * @var DateTime|null $respondByDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $respondByDate = null;
    
    /**
     * @var string|null $seller The eBay user ID of the seller involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
    */
    private ?string $seller = null;
    
    /**
     * @var int|null $transactionId The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
    */
    private ?int $transactionId = null;
    
    /**
     * Instantiates a new CaseSummaryType and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseSummaryType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseSummaryType {
        return new CaseSummaryType();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the buyer property value. The eBay user ID of the buyer involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
     * @return string|null
    */
    public function getBuyer(): ?string {
        return $this->buyer;
    }

    /**
     * Gets the caseId property value. The unique identifier of the case.
     * @return int|null
    */
    public function getCaseId(): ?int {
        return $this->caseId;
    }

    /**
     * Gets the caseStatusEnum property value. This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
     * @return string|null
    */
    public function getCaseStatusEnum(): ?string {
        return $this->caseStatusEnum;
    }

    /**
     * Gets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getClaimAmount(): ?Amount {
        return $this->claimAmount;
    }

    /**
     * Gets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getCreationDate(): ?DateTime {
        return $this->creationDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'buyer' => fn(ParseNode $n) => $o->setBuyer($n->getStringValue()),
            'caseId' => fn(ParseNode $n) => $o->setCaseId($n->getIntegerValue()),
            'caseStatusEnum' => fn(ParseNode $n) => $o->setCaseStatusEnum($n->getStringValue()),
            'claimAmount' => fn(ParseNode $n) => $o->setClaimAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getDateTimeValue()),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getIntegerValue()),
            'lastModifiedDate' => fn(ParseNode $n) => $o->setLastModifiedDate($n->getDateTimeValue()),
            'respondByDate' => fn(ParseNode $n) => $o->setRespondByDate($n->getDateTimeValue()),
            'seller' => fn(ParseNode $n) => $o->setSeller($n->getStringValue()),
            'transactionId' => fn(ParseNode $n) => $o->setTransactionId($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
     * @return int|null
    */
    public function getItemId(): ?int {
        return $this->itemId;
    }

    /**
     * Gets the lastModifiedDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getLastModifiedDate(): ?DateTime {
        return $this->lastModifiedDate;
    }

    /**
     * Gets the respondByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getRespondByDate(): ?DateTime {
        return $this->respondByDate;
    }

    /**
     * Gets the seller property value. The eBay user ID of the seller involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
     * @return string|null
    */
    public function getSeller(): ?string {
        return $this->seller;
    }

    /**
     * Gets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
     * @return int|null
    */
    public function getTransactionId(): ?int {
        return $this->transactionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('buyer', $this->getBuyer());
        $writer->writeIntegerValue('caseId', $this->getCaseId());
        $writer->writeStringValue('caseStatusEnum', $this->getCaseStatusEnum());
        $writer->writeObjectValue('claimAmount', $this->getClaimAmount());
        $writer->writeDateTimeValue('creationDate', $this->getCreationDate());
        $writer->writeIntegerValue('itemId', $this->getItemId());
        $writer->writeDateTimeValue('lastModifiedDate', $this->getLastModifiedDate());
        $writer->writeDateTimeValue('respondByDate', $this->getRespondByDate());
        $writer->writeStringValue('seller', $this->getSeller());
        $writer->writeIntegerValue('transactionId', $this->getTransactionId());
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
     * Sets the buyer property value. The eBay user ID of the buyer involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
     * @param string|null $value Value to set for the buyer property.
    */
    public function setBuyer(?string $value): void {
        $this->buyer = $value;
    }

    /**
     * Sets the caseId property value. The unique identifier of the case.
     * @param int|null $value Value to set for the caseId property.
    */
    public function setCaseId(?int $value): void {
        $this->caseId = $value;
    }

    /**
     * Sets the caseStatusEnum property value. This enumeration value indicates the current status of the case.<br/><br/>The list of enumeration values that may be returned in this field are defined in the <a href="/devzone/post-order/types/CaseStatusEnum.html">CaseStatusEnum</a> type definition.
     * @param string|null $value Value to set for the caseStatusEnum property.
    */
    public function setCaseStatusEnum(?string $value): void {
        $this->caseStatusEnum = $value;
    }

    /**
     * Sets the claimAmount property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the claimAmount property.
    */
    public function setClaimAmount(?Amount $value): void {
        $this->claimAmount = $value;
    }

    /**
     * Sets the creationDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?DateTime $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the itemId property value. The unique identifier of the eBay listing where the line item was purchased. This field is used in conjunction with the <b>transactionId</b> field to identify a line item that is associated with the case.
     * @param int|null $value Value to set for the itemId property.
    */
    public function setItemId(?int $value): void {
        $this->itemId = $value;
    }

    /**
     * Sets the lastModifiedDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the lastModifiedDate property.
    */
    public function setLastModifiedDate(?DateTime $value): void {
        $this->lastModifiedDate = $value;
    }

    /**
     * Sets the respondByDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the respondByDate property.
    */
    public function setRespondByDate(?DateTime $value): void {
        $this->respondByDate = $value;
    }

    /**
     * Sets the seller property value. The eBay user ID of the seller involved in the case.<br><br><span class="tablenote"><b>Note:</b> Effective September 26, 2025, select developers will no longer receive username data for U.S. users through this field. Instead, an immutable user ID will be returned in its place. For more information, please refer to <a href="/api-docs/static/data-handling-update.html">Data Handling Compliance</a>. </span>
     * @param string|null $value Value to set for the seller property.
    */
    public function setSeller(?string $value): void {
        $this->seller = $value;
    }

    /**
     * Sets the transactionId property value. The unique identifier of the purchase transaction. This value is created right when the buyer is committed to buying the item, whether that  buyer uses a 'Buy it Now' capability, is the winning bidder of an auction, or the buyer's Best Offer is accepted by the seller. This field is used in conjunction with the <b>itemId</b> field to identify the line item that is associated with the case.
     * @param int|null $value Value to set for the transactionId property.
    */
    public function setTransactionId(?int $value): void {
        $this->transactionId = $value;
    }

}
