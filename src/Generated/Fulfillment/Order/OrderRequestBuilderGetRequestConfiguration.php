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

namespace EBay\OrderManagement\Generated\Fulfillment\Order;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrderRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrderRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrderRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrderRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrderRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrderRequestBuilderGetQueryParameters.
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
     * @param string|null $filter One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. <br><br><span class="tablenote"><strong>Note:</strong> <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> can return orders up to two years old. Do not set the <code>creationdate</code> filter to a date beyond two years in the past.</span><br><span class="tablenote"><strong>Note:</strong> If the <strong>orderIds</strong> parameter is included in the request, the <strong>filter</strong> parameter will be ignored.</span><br>The available criteria are as follows: <dl> <dt><code><strong>creationdate</strong></code></dt> <dd>The time period during which qualifying orders were created (the <strong>orders.creationDate</strong> field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>creationdate:[2016-02-21T08:25:43.511Z..]</code> identifies orders created on or after the given timestamp.</li> <li><code>creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]</code> identifies orders created between the given timestamps, inclusive.</li> </ul> </dd> <dt><code><strong>lastmodifieddate</strong></code></dt> <dd>The time period during which qualifying orders were last modified (the <strong>orders.modifiedDate</strong> field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..]</code> identifies orders modified on or after the given timestamp.</li> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]</code> identifies orders modified between the given timestamps, inclusive.</li> </ul> <span class="tablenote"><strong>Note:</strong> If <strong>creationdate</strong> and <strong>lastmodifieddate</strong> are both included, only <strong>creationdate</strong> is used.</span> <br></dd> <dt><code><strong>orderfulfillmentstatus</strong></code></dt> <dd>The degree to which qualifying orders have been shipped (the <strong>orders.orderFulfillmentStatus</strong> field). In the URI, this is expressed as one of the following value combinations: <ul> <li><code>orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}</code> specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.</li> <li><code>orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}</code> specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.</li> </ul> <span class="tablenote"><strong>Note:</strong> The values <code>NOT_STARTED</code>, <code>IN_PROGRESS</code>, and <code>FULFILLED</code> can be used in various combinations, but only the combinations shown here are currently supported.</span> </dd> </dl> Here is an example of a <strong>getOrders</strong> call using all of these filters: <br> <pre>GET https://api.ebay.com/sell/v1/order?<br>filter=<strong>creationdate</strong>:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,<br><strong>lastmodifieddate</strong>:%5B2016-05-15T08:25:43.511Z..%5D,<br><strong>orderfulfillmentstatus</strong>:%7BNOT_STARTED%7CIN_PROGRESS%7D</pre> <span class="tablenote"><strong>Note:</strong> This call requires that certain special characters in the URI query string be percent-encoded: <br> &nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br> This query filter example uses these codes.</span>
     * @param string|null $limit The number of orders to return per page of the result set. Use this parameter in conjunction with the <strong>offset</strong> parameter to control the pagination of the output. <br><br>For example, if <strong>offset</strong> is set to <code>10</code> and <strong>limit</strong> is set to <code>10</code>, the call retrieves orders 11 through 20 from the result set. <br><br> If a limit is not set, the <strong>limit</strong> defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.<br ><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>. If the <strong>orderIds</strong> parameter is included in the request, this parameter will be ignored.</span> <br> <strong>Maximum:</strong> <code>200</code> <br> <strong>Default:</strong> <code>50</code>
     * @param string|null $offset Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  <p>Combine <strong>offset</strong> with the <strong>limit</strong> query parameter to control the items returned in the response. For example, if you supply an <strong>offset</strong> of <code>0</code> and a <strong>limit</strong> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <strong>offset</strong> is <code>10</code> and <strong>limit</strong> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><strong>Default:</strong> 0</p>
     * @param string|null $orderIds A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the <strong>orderIds</strong> query parameter, all other query parameters will be ignored.<br><br><span class="tablenote"><strong>Note:</strong> <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> can return orders up to two years old. Do not provide the <strong>orderId</strong> for an order created more than two years in the past.</span>
     * @return OrderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldGroups = null, ?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $orderIds = null): OrderRequestBuilderGetQueryParameters {
        return new OrderRequestBuilderGetQueryParameters($fieldGroups, $filter, $limit, $offset, $orderIds);
    }

}
