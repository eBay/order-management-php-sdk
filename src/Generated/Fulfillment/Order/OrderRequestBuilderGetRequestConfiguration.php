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
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><b>Note:</b> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
     * @param string|null $filter One or more comma-separated criteria for narrowing down the collection of orders returned by this call. These criteria correspond to specific fields in the response payload. Multiple filter criteria combine to further restrict the results. <br><br><span class="tablenote"><strong>Note:</strong> <b>getOrders</b> can return orders up to two years old. Do not set the <code>creationdate</code> filter to a date beyond two years in the past.</span><br><span class="tablenote"><strong>Note:</strong> If the <b>orderIds</b> parameter is included in the request, the <b>filter</b> parameter will be ignored.</span><br>The available criteria are as follows: <dl> <dt><code><b>creationdate</b></code></dt> <dd>The time period during which qualifying orders were created (the <b>orders.creationDate</b> field). In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>creationdate:[2016-02-21T08:25:43.511Z..]</code> identifies orders created on or after the given timestamp.</li> <li><code>creationdate:[2016-02-21T08:25:43.511Z..2016-04-21T08:25:43.511Z]</code> identifies orders created between the given timestamps, inclusive.</li> </ul> </dd> <dt><code><b>lastmodifieddate</b></code></dt> <dd>The time period during which qualifying orders were last modified (the <b>orders.modifiedDate</b> field).  In the URI, this is expressed as a starting timestamp, with or without an ending timestamp (in brackets). The timestamps are in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock.For example: <ul> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..]</code> identifies orders modified on or after the given timestamp.</li> <li><code>lastmodifieddate:[2016-05-15T08:25:43.511Z..2016-05-31T08:25:43.511Z]</code> identifies orders modified between the given timestamps, inclusive.</li> </ul> <span class="tablenote"><strong>Note:</strong> If <b>creationdate</b> and <b>lastmodifieddate</b> are both included, only <b>creationdate</b> is used.</span> <br><br></dd> <dt><code><b>orderfulfillmentstatus</b></code></dt> <dd>The degree to which qualifying orders have been shipped (the <b>orders.orderFulfillmentStatus</b> field). In the URI, this is expressed as one of the following value combinations: <ul> <li><code>orderfulfillmentstatus:{NOT_STARTED|IN_PROGRESS}</code> specifies orders for which no shipping fulfillments have been started, plus orders for which at least one shipping fulfillment has been started but not completed.</li> <li><code>orderfulfillmentstatus:{FULFILLED|IN_PROGRESS}</code> specifies orders for which all shipping fulfillments have been completed, plus orders for which at least one shipping fulfillment has been started but not completed.</li> </ul> <span class="tablenote"><strong>Note:</strong> The values <code>NOT_STARTED</code>, <code>IN_PROGRESS</code>, and <code>FULFILLED</code> can be used in various combinations, but only the combinations shown here are currently supported.</span> </dd> </dl> Here is an example of a <b>getOrders</b> call using all of these filters: <br><br> <code>GET https://api.ebay.com/sell/v1/order?<br>filter=<b>creationdate</b>:%5B2016-03-21T08:25:43.511Z..2016-04-21T08:25:43.511Z%5D,<br><b>lastmodifieddate</b>:%5B2016-05-15T08:25:43.511Z..%5D,<br><b>orderfulfillmentstatus</b>:%7BNOT_STARTED%7CIN_PROGRESS%7D</code> <br><br> <span class="tablenote"><strong>Note:</strong> This call requires that certain special characters in the URI query string be percent-encoded: <br> &nbsp;&nbsp;&nbsp;&nbsp;<code>[</code> = <code>%5B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>]</code> = <code>%5D</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>{</code> = <code>%7B</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>|</code> = <code>%7C</code> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<code>}</code> = <code>%7D</code> <br> This query filter example uses these codes.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/fulfillment/types/api:FilterField
     * @param string|null $limit The number of orders to return per page of the result set. Use this parameter in conjunction with the <b>offset</b> parameter to control the pagination of the output. <br><br>For example, if <b>offset</b> is set to <code>10</code> and <b>limit</b> is set to <code>10</code>, the call retrieves orders 11 thru 20 from the result set. <br><br> If a limit is not set, the <b>limit</b> defaults to 50 and returns up to 50 orders. If a requested limit is more than 200, the call fails and returns an error.<br ><br> <span class="tablenote"><strong>Note:</strong> This feature employs a zero-based list, where the first item in the list has an offset of <code>0</code>. If the <b>orderIds</b> parameter is included in the request, this parameter will be ignored.</span> <br><br> <b>Maximum:</b> <code>200</code> <br> <b>Default:</b> <code>50</code>
     * @param string|null $offset Specifies the number of orders to skip in the result set before returning the first order in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $orderIds A comma-separated list of the unique identifiers of the orders to retrieve (maximum 50). If one or more order ID values are specified through the <b>orderIds</b> query parameter, all other query parameters will be ignored.<br><br><span class="tablenote"><strong>Note:</strong> <b>getOrders</b> can return orders up to two years old. Do not provide the <b>orderId</b> for an order created more than two years in the past.</span>
     * @return OrderRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldGroups = null, ?string $filter = null, ?string $limit = null, ?string $offset = null, ?string $orderIds = null): OrderRequestBuilderGetQueryParameters {
        return new OrderRequestBuilderGetQueryParameters($fieldGroups, $filter, $limit, $offset, $orderIds);
    }

}
