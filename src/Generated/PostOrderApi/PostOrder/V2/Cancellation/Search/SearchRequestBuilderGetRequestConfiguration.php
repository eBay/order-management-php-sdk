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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Search;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SearchRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SearchRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SearchRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SearchRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SearchRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SearchRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SearchRequestBuilderGetQueryParameters.
     * @param string|null $cancel_id The unigue identifier of a specific cancellation request. If this query parameter is used, any other query parameters that are included are ignored since the request will only return this specific cancellation request (if it is found).
     * @param string|null $creation_date_range_from Use the <b>creation_date_range_from</b> and <b>creation_date_range_to</b> query parameters to retrieve cancellation requests that were created during a specific time range.  <br/><br/>Set <b>creation_date_range_from</b> to the beginning of the time range and set <b>creation_date_range_to</b> to a date that's after the start date. Do not set the start date more than 18 months in the past.  <br/><br/>If you set <b>creation_date_range_from</b> but do not set  <b>creation_date_range_to</b>, the service searches through all cancellation requests created at or after the specified time, and searches forward 90 days from there. <br/><br/>This parameter takes an ISO 8601-formatted date. For example: <br/><code>2015-05-15T03:00:00.000Z</code>.
     * @param string|null $creation_date_range_to Use <b>creation_date_range_to</b> in conjunction with the <b>creation_date_range_from</b> query parameter. See <b>creation_date_range_to</b> for details on how to set this parameter. <br/><br/>This parameter takes an ISO 8601-formatted date.
     * @param string|null $item_id The unique eBay-assigned ID of a listing. If this parameter is used, eBay will search for any cancellation requests filed against this listing. <br/><br/>This parameter is conditionally required if the <b>transaction_id</b> query parameter is used, as both Item ID and Transaction ID values are needed to identify a line item.
     * @param string|null $legacy_order_id The unique eBay-assigned ID of an order.  If this parameter is used, eBay will search for any cancellation requests filed against this order ID. <p class="tablenote"><b>Note:</b> Note that order ID values change as an order goes from the unpaid to the paid state, and order IDs in both states are supported with this parameter.
     * @param string|null $limit This parameter specifies the maximum number of order cancellations to return per page of data. If this query parameter is not used, its value defaults to 10 (order cancellations per page)<p><b>Default: </b>10 <br/><b>Maximum:</b> 500 <br/><b>Minimum:</b> 1</p>
     * @param string|null $offset This parameter specifies the number of entries to skip in the result set before returning the first item in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control how many and which items are returned in the response. For example, if you supply an <b>offset</b> value of <code>0</code> and a <b>limit</b> value of <code>10</code>, the first page of the response will contain the first 10 items from the results set. If the <b>offset</b> value is <code>10</code> and the <b>limit</b> value is <code>20</code>, the first page of the response will contain items 11-30 from the results set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $role Use this query parameter to filter the order cancellation results based on who inititated the order cancellation request. The supported values are <code>BUYER</code> and <code>SELLER</code>, and both value are case-sensitive (e.g. all CAPS are required).  <br/><br/><b>Default:</b> <code>SELLER</code> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/zbase:UserRoleFilterEnum
     * @param string|null $sort This query parameter allows a user to sort cancellation requests in the response by <b>CANCEL_ID</b> or by <b>CANCEL_REQUEST_DATE</b>, in ascending or descending order. One of these two enumeration values must be used as the <b>sort</b> value, and will be preceding by either a <code>+</code> (plus sign) to sort in ascending order, or a <code>-</code> (minus sign) to sort in descending order. <br/><br/>So, to sort in ascending order according to cancellation ID, the following syntax would be used: <code>sort=+CANCEL_ID</code>. To sort in descending order according to cancellation request date, <code>sort=-CANCEL_REQUEST_DATE</code> would be used. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/can:CancelSortField
     * @param string|null $transaction_id The unique eBay-assigned ID of the line item purchase. If this parameter is used, the <b>item_id</b> query parameter must also be used, as both Item ID and Transaction ID values are needed to identify a line item. If you use <b>transaction_id</b> without also supplying an <b>item_id</b> value, this parameter is ignored.
     * @return SearchRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $cancel_id = null, ?string $creation_date_range_from = null, ?string $creation_date_range_to = null, ?string $item_id = null, ?string $legacy_order_id = null, ?string $limit = null, ?string $offset = null, ?string $role = null, ?string $sort = null, ?string $transaction_id = null): SearchRequestBuilderGetQueryParameters {
        return new SearchRequestBuilderGetQueryParameters($cancel_id, $creation_date_range_from, $creation_date_range_to, $item_id, $legacy_order_id, $limit, $offset, $role, $sort, $transaction_id);
    }

}
