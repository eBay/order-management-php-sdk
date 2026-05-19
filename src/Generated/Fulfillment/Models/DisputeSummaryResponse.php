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
 * This type defines the base response payload of the <strong>getPaymentDisputeSummaries</strong> method. Each payment dispute that matches the input criteria is returned under the <strong>paymentDisputeSummaries</strong> array.
*/
class DisputeSummaryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI of the <strong>getPaymentDisputeSummaries</strong> call request that produced the current page of the result set.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit This value shows the maximum number of payment disputes that will appear on one page of the result set. The <strong>limit</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>200</code>. If the value in the <strong>total</strong> field exceeds this <strong>limit</strong> value, there are multiple pages in the current result set.<br><br><b>Min</b>: 1; <b>Max</b>: 200; <b>Default</b>: 200
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 11 thru 20 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=10</code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset This integer value indicates the number of payment disputes skipped before listing the first payment dispute from the result set. The <strong>offset</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>0</code> and the first payment dispute of the result set is shown at the top of the response.
    */
    private ?int $offset = null;
    
    /**
     * @var array<PaymentDisputeSummary>|null $paymentDisputeSummaries Each payment dispute that matches the input criteria is returned under this array. If no payment disputes are found, an empty array is returned.
    */
    private ?array $paymentDisputeSummaries = null;
    
    /**
     * @var string|null $prev The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the previous page of the result set. For example, the following URI returns records 1 thru 10 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=0</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total This integer value is the total number of payment disputes that matched the input criteria. If the total number of entries exceeds the value that was set for <strong>limit</strong> in the request payload, you will have to make multiple API calls to see all pages of the results set. This field is returned even if it is <code>0</code>.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new DisputeSummaryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DisputeSummaryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DisputeSummaryResponse {
        return new DisputeSummaryResponse();
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
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'paymentDisputeSummaries' => fn(ParseNode $n) => $o->setPaymentDisputeSummaries($n->getCollectionOfObjectValues([PaymentDisputeSummary::class, 'createFromDiscriminatorValue'])),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI of the <strong>getPaymentDisputeSummaries</strong> call request that produced the current page of the result set.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. This value shows the maximum number of payment disputes that will appear on one page of the result set. The <strong>limit</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>200</code>. If the value in the <strong>total</strong> field exceeds this <strong>limit</strong> value, there are multiple pages in the current result set.<br><br><b>Min</b>: 1; <b>Max</b>: 200; <b>Default</b>: 200
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 11 thru 20 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=10</code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. This integer value indicates the number of payment disputes skipped before listing the first payment dispute from the result set. The <strong>offset</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>0</code> and the first payment dispute of the result set is shown at the top of the response.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the paymentDisputeSummaries property value. Each payment dispute that matches the input criteria is returned under this array. If no payment disputes are found, an empty array is returned.
     * @return array<PaymentDisputeSummary>|null
    */
    public function getPaymentDisputeSummaries(): ?array {
        return $this->paymentDisputeSummaries;
    }

    /**
     * Gets the prev property value. The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the previous page of the result set. For example, the following URI returns records 1 thru 10 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=0</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. This integer value is the total number of payment disputes that matched the input criteria. If the total number of entries exceeds the value that was set for <strong>limit</strong> in the request payload, you will have to make multiple API calls to see all pages of the results set. This field is returned even if it is <code>0</code>.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeCollectionOfObjectValues('paymentDisputeSummaries', $this->getPaymentDisputeSummaries());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the href property value. The URI of the <strong>getPaymentDisputeSummaries</strong> call request that produced the current page of the result set.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. This value shows the maximum number of payment disputes that will appear on one page of the result set. The <strong>limit</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>200</code>. If the value in the <strong>total</strong> field exceeds this <strong>limit</strong> value, there are multiple pages in the current result set.<br><br><b>Min</b>: 1; <b>Max</b>: 200; <b>Default</b>: 200
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the next page of the result set. For example, the following URI returns records 11 thru 20 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=10</code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. This integer value indicates the number of payment disputes skipped before listing the first payment dispute from the result set. The <strong>offset</strong> value can be passed in as a query parameter in the request, or if it is not used, it defaults to <code>0</code> and the first payment dispute of the result set is shown at the top of the response.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the paymentDisputeSummaries property value. Each payment dispute that matches the input criteria is returned under this array. If no payment disputes are found, an empty array is returned.
     * @param array<PaymentDisputeSummary>|null $value Value to set for the paymentDisputeSummaries property.
    */
    public function setPaymentDisputeSummaries(?array $value): void {
        $this->paymentDisputeSummaries = $value;
    }

    /**
     * Sets the prev property value. The <strong>getPaymentDisputeSummaries</strong> call URI to use if you wish to view the previous page of the result set. For example, the following URI returns records 1 thru 10 from the collection of payment disputes:<br><br><code>path/payment_dispute_summary?limit=10&offset=0</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. This integer value is the total number of payment disputes that matched the input criteria. If the total number of entries exceeds the value that was set for <strong>limit</strong> in the request payload, you will have to make multiple API calls to see all pages of the results set. This field is returned even if it is <code>0</code>.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
