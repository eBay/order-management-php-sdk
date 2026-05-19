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
 * This type contains the specifications for the collection of orders that match the search or filter criteria of a <b>getOrders</b> call. The collection is grouped into a result set, and based on the query parameters that are set (including the <strong>limit</strong> and <strong>offset</strong> parameters), the result set may included multiple pages, but only one page of the result set can be viewed at a time.
*/
class OrderSearchPagedCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $href The URI of the <b>getOrders</b> call request that produced the current page of the result set.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The maximum number of orders returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>50</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer orders than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of orders matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total orders) and the <strong>limit</strong> value was <code>50</code> (show 50 orders per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getOrders</strong> calls to view all orders matching the input criteria. </span><b>Default:</b> <code>50</code>
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The <b>getOrders</b> call URI to use if you wish to view the  next page of the result set. For example, the following URI returns records 41 thru 50 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=40 </code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.<br>
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
    */
    private ?int $offset = null;
    
    /**
     * @var array<Order>|null $orders This array contains one or more orders that are part of the current result set, that is controlled by the input criteria. The details of each order include information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status. <br><br>By default, orders are returned according to creation date (oldest to newest), but the order will vary according to any filter that is set in request.
    */
    private ?array $orders = null;
    
    /**
     * @var string|null $prev The <b>getOrders</b> call URI for the previous result set. For example, the following URI returns orders 21 thru 30 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=20</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of orders in the results set based on the current input criteria.<br><br><span class="tablenote"><strong>Note:</strong> If no orders are found, this field is returned with a value of <code>0</code>.</span>
    */
    private ?int $total = null;
    
    /**
     * @var array<Error>|null $warnings This array is returned if one or more errors or warnings occur with the call request.
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new OrderSearchPagedCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderSearchPagedCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderSearchPagedCollection {
        return new OrderSearchPagedCollection();
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
            'orders' => fn(ParseNode $n) => $o->setOrders($n->getCollectionOfObjectValues([Order::class, 'createFromDiscriminatorValue'])),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the href property value. The URI of the <b>getOrders</b> call request that produced the current page of the result set.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The maximum number of orders returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>50</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer orders than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of orders matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total orders) and the <strong>limit</strong> value was <code>50</code> (show 50 orders per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getOrders</strong> calls to view all orders matching the input criteria. </span><b>Default:</b> <code>50</code>
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The <b>getOrders</b> call URI to use if you wish to view the  next page of the result set. For example, the following URI returns records 41 thru 50 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=40 </code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.<br>
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the orders property value. This array contains one or more orders that are part of the current result set, that is controlled by the input criteria. The details of each order include information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status. <br><br>By default, orders are returned according to creation date (oldest to newest), but the order will vary according to any filter that is set in request.
     * @return array<Order>|null
    */
    public function getOrders(): ?array {
        return $this->orders;
    }

    /**
     * Gets the prev property value. The <b>getOrders</b> call URI for the previous result set. For example, the following URI returns orders 21 thru 30 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=20</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of orders in the results set based on the current input criteria.<br><br><span class="tablenote"><strong>Note:</strong> If no orders are found, this field is returned with a value of <code>0</code>.</span>
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Gets the warnings property value. This array is returned if one or more errors or warnings occur with the call request.
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
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
        $writer->writeCollectionOfObjectValues('orders', $this->getOrders());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the href property value. The URI of the <b>getOrders</b> call request that produced the current page of the result set.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The maximum number of orders returned per page of the result set. The <strong>limit</strong> value can be passed in as a query parameter, or if omitted, its value defaults to <code>50</code>. <br><br><span class="tablenote"><strong>Note:</strong> If this is the last or only page of the result set, the page may contain fewer orders than the <strong>limit</strong> value.  To determine the number of pages in a result set, divide the <b>total</b> value (total number of orders matching input criteria) by this <strong>limit</strong> value, and then round up to the next integer. For example, if the <b>total</b> value was <code>120</code> (120 total orders) and the <strong>limit</strong> value was <code>50</code> (show 50 orders per page), the total number of pages in the result set is three, so the seller would have to make three separate <strong>getOrders</strong> calls to view all orders matching the input criteria. </span><b>Default:</b> <code>50</code>
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The <b>getOrders</b> call URI to use if you wish to view the  next page of the result set. For example, the following URI returns records 41 thru 50 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=40 </code><br><br>This field is only returned if there is a next page of results to view based on the current input criteria.<br>
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p class="tablenote"><strong>Note: </strong>The items in a paginated result set use a zero-based list where the first item in the list has an offset of <code>0</code>.</p>
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the orders property value. This array contains one or more orders that are part of the current result set, that is controlled by the input criteria. The details of each order include information about the buyer, order history, shipping fulfillments, line items, costs, payments, and order fulfillment status. <br><br>By default, orders are returned according to creation date (oldest to newest), but the order will vary according to any filter that is set in request.
     * @param array<Order>|null $value Value to set for the orders property.
    */
    public function setOrders(?array $value): void {
        $this->orders = $value;
    }

    /**
     * Sets the prev property value. The <b>getOrders</b> call URI for the previous result set. For example, the following URI returns orders 21 thru 30 from the collection of orders: <br><br><code><i>path</i>/order?limit=10&offset=20</code><br><br>This field is only returned if there is a previous page of results to view based on the current input criteria.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of orders in the results set based on the current input criteria.<br><br><span class="tablenote"><strong>Note:</strong> If no orders are found, this field is returned with a value of <code>0</code>.</span>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

    /**
     * Sets the warnings property value. This array is returned if one or more errors or warnings occur with the call request.
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
