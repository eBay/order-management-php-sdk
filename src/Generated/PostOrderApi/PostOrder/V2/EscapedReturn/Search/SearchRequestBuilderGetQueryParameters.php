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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Search;

/**
 * Use this method to retrieve the details on one or more  return requests, or a summary of return requests per user. This method supports several filters, supplied as query parameters, that allow you to restrict results by date, return status, return type, or by listing. If you use more than one filter type in the request, Boolean AND logic is applied to the results set. Boolean OR logic is used for conditions within a filter.<br>
*/
class SearchRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("creation_date_range_from")
     * @var string|null $creationDateRangeFrom Specify the <b>creation_date_range_from</b> and <b>creation_date_range_to</b> query parameters if you want to retrieve return requests that were created during a specific period of time.  <br/><br/>Specify the starting date for your date range using the <b>creation_date_range_from</b> parameter. The date specified must be older than the <b>creation_date_range_to</b> timestamp and it cannot be set to more than 18 months in the past. If you specify a <b>creation_date_range_from</b> value, but do not specify a <b>creation_date_range_to</b> value, the method returns all return requests created at or after the specified timestamp and goes forward for the following 90 days. Use an ISO-8601 date format to specify the timestamp. For example: <code>2021-05-15T03:52:39.000Z</code>.
    */
    public ?string $creationDateRangeFrom = null;
    
    /**
     * @QueryParameter("creation_date_range_to")
     * @var string|null $creationDateRangeTo Specify the <b>creation_date_range_from</b> and <b>creation_date_range_to</b> query parameters if you want to retrieve return requests that were created during a specific period of time.  <br/><br/>Specify the ending date for your date range using the <b>creation_date_range_to</b> parameter. The date specified must be more recent than the <b>creation_date_range_from</b>. If you specify a <b>creation_date_range_to</b> value, but do not specify a <b>creation_date_range_from</b>, the method returns all return requests created at or before the specified timestamp, goes backwards for the preceding 90 days. Use an ISO-8601 date format to specify the timestamp. For example: <code>2021-07-15T03:52:39.000Z</code>.
    */
    public ?string $creationDateRangeTo = null;
    
    /**
     * @QueryParameter("item_id")
     * @var string|null $itemId The unique eBay-assigned ID of a listing. If this parameter is used, eBay will search for any return requests filed against this listing. <br/><br/>This parameter is conditionally required if the <b>transaction_id</b> query parameter is used, as both Item ID and Transaction ID values are needed to identify a line item.
    */
    public ?string $itemId = null;
    
    /**
     * @var string|null $limit This parameter specifies the maximum number of return requests to display per page of data. If this query parameter is not used, its value defaults to 25 (return requests per page). <br/><br/><b>Min value</b>: 1<br/><b>Max value</b>: 200<br/><b>Default value</b>: 25
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset This parameter specifies the number of entries to skip in the result set before returning the first item in the paginated response. A 0-based index is used, so page '1' of results is returned if <code>0</code> is set in this field or if this query parameter is omitted. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results in the <b>paginationOutput</b> container of your initial call).<br/><br/>Combine <b>offset</b> with the <b>limit</b> query parameter to control how many and which items are returned in the response.<br/><br/><b>Min value</b>: 0<br/><b>Default value</b>: 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("order_id")
     * @var string|null $orderId The unique ID of an order. An <b>order_id</b> value is provided as a query parameter if the user wants to see if a return request was filed against one or more order line items in the order specified in this field.  <br/><br/><span class="tablenote"> <b>Note:</b> The order ID value changes as an order goes from the unpaid to the paid state.</span>
    */
    public ?string $orderId = null;
    
    /**
     * @QueryParameter("return_id")
     * @var string|null $returnId The unigue identifier of a specific return request. If this query parameter is used, any other query parameters that are included are ignored since the request will only return this specific return request (if it is found).
    */
    public ?string $returnId = null;
    
    /**
     * @QueryParameter("return_state")
     * @var string|null $returnState This query parameter is used if the user wants to search for return requests in a specific return state classification, such as all open requests, or return requests where the seller's response is currently due. One of the enumeration values defined in the <a href="/devzone/post-order/types/ReturnCountFilterEnum.html">ReturnCountFilterEnum</a> type definition must be used in this query parameter.
    */
    public ?string $returnState = null;
    
    /**
     * @var string|null $role Use this query parameter to get return actions that were initiated by either the buyer or the seller. The supported values are <code>BUYER</code> and <code>SELLER</code>, and both value are case-sensitive (e.g. all CAPS are required).
    */
    public ?string $role = null;
    
    /**
     * @var string|null $sort This query parameter allows a user to sort cancellation requests in the response by <code>ACTUAL_AMOUNT</code>, <code>BUYER_LOGIN_NAME</code>, <code>ESTIMATED_AMOUNT</code>, <code>FILING_DATE</code>, <code>REASON</code>, <code>REFUND_DUE_DATE</code>, <code>RETURN_ID</code>, or <code>STATUS</code> in ascending or descending order. One of these enumeration values must be used as the <b>sort</b> value, and will be preceding by either a <code>+</code> (plus sign) to sort in ascending order, or a <code>-</code> (minus sign) to sort in descending order. <br/><br/>So, to sort in ascending order according to the actual refund amount, the following syntax would be used: <code>sort=+ACTUAL_AMOUNT</code>. To sort in descending order according to return creation date, <code>sort=-FILING_DATE</code> would be used. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/ret:ReturnSortField
    */
    public ?string $sort = null;
    
    /**
     * @var string|null $states This query parameter is used if the user wants to search for return requests in a specific state in the return process. One of the enumeration values defined in the <a href="/devzone/post-order/types/ReturnStateEnum.html">ReturnStateEnum</a> type definition must be used in this query parameter. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/ret:ReturnStateEnum
    */
    public ?string $states = null;
    
    /**
     * @QueryParameter("transaction_id")
     * @var string|null $transactionId The unique eBay-assigned ID of the line item purchase. If this parameter is used, the <b>item_id</b> query parameter must also be used, as both Item ID and Transaction ID values are needed to identify a line item. If you use <b>transaction_id</b> without also supplying an <b>item_id</b> value, this parameter is ignored.
    */
    public ?string $transactionId = null;
    
    /**
     * Instantiates a new SearchRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $creation_date_range_from Specify the <b>creation_date_range_from</b> and <b>creation_date_range_to</b> query parameters if you want to retrieve return requests that were created during a specific period of time.  <br/><br/>Specify the starting date for your date range using the <b>creation_date_range_from</b> parameter. The date specified must be older than the <b>creation_date_range_to</b> timestamp and it cannot be set to more than 18 months in the past. If you specify a <b>creation_date_range_from</b> value, but do not specify a <b>creation_date_range_to</b> value, the method returns all return requests created at or after the specified timestamp and goes forward for the following 90 days. Use an ISO-8601 date format to specify the timestamp. For example: <code>2021-05-15T03:52:39.000Z</code>.
     * @param string|null $creation_date_range_to Specify the <b>creation_date_range_from</b> and <b>creation_date_range_to</b> query parameters if you want to retrieve return requests that were created during a specific period of time.  <br/><br/>Specify the ending date for your date range using the <b>creation_date_range_to</b> parameter. The date specified must be more recent than the <b>creation_date_range_from</b>. If you specify a <b>creation_date_range_to</b> value, but do not specify a <b>creation_date_range_from</b>, the method returns all return requests created at or before the specified timestamp, goes backwards for the preceding 90 days. Use an ISO-8601 date format to specify the timestamp. For example: <code>2021-07-15T03:52:39.000Z</code>.
     * @param string|null $item_id The unique eBay-assigned ID of a listing. If this parameter is used, eBay will search for any return requests filed against this listing. <br/><br/>This parameter is conditionally required if the <b>transaction_id</b> query parameter is used, as both Item ID and Transaction ID values are needed to identify a line item.
     * @param string|null $limit This parameter specifies the maximum number of return requests to display per page of data. If this query parameter is not used, its value defaults to 25 (return requests per page). <br/><br/><b>Min value</b>: 1<br/><b>Max value</b>: 200<br/><b>Default value</b>: 25
     * @param string|null $offset This parameter specifies the number of entries to skip in the result set before returning the first item in the paginated response. A 0-based index is used, so page '1' of results is returned if <code>0</code> is set in this field or if this query parameter is omitted. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results in the <b>paginationOutput</b> container of your initial call).<br/><br/>Combine <b>offset</b> with the <b>limit</b> query parameter to control how many and which items are returned in the response.<br/><br/><b>Min value</b>: 0<br/><b>Default value</b>: 0
     * @param string|null $order_id The unique ID of an order. An <b>order_id</b> value is provided as a query parameter if the user wants to see if a return request was filed against one or more order line items in the order specified in this field.  <br/><br/><span class="tablenote"> <b>Note:</b> The order ID value changes as an order goes from the unpaid to the paid state.</span>
     * @param string|null $return_id The unigue identifier of a specific return request. If this query parameter is used, any other query parameters that are included are ignored since the request will only return this specific return request (if it is found).
     * @param string|null $return_state This query parameter is used if the user wants to search for return requests in a specific return state classification, such as all open requests, or return requests where the seller's response is currently due. One of the enumeration values defined in the <a href="/devzone/post-order/types/ReturnCountFilterEnum.html">ReturnCountFilterEnum</a> type definition must be used in this query parameter.
     * @param string|null $role Use this query parameter to get return actions that were initiated by either the buyer or the seller. The supported values are <code>BUYER</code> and <code>SELLER</code>, and both value are case-sensitive (e.g. all CAPS are required).
     * @param string|null $sort This query parameter allows a user to sort cancellation requests in the response by <code>ACTUAL_AMOUNT</code>, <code>BUYER_LOGIN_NAME</code>, <code>ESTIMATED_AMOUNT</code>, <code>FILING_DATE</code>, <code>REASON</code>, <code>REFUND_DUE_DATE</code>, <code>RETURN_ID</code>, or <code>STATUS</code> in ascending or descending order. One of these enumeration values must be used as the <b>sort</b> value, and will be preceding by either a <code>+</code> (plus sign) to sort in ascending order, or a <code>-</code> (minus sign) to sort in descending order. <br/><br/>So, to sort in ascending order according to the actual refund amount, the following syntax would be used: <code>sort=+ACTUAL_AMOUNT</code>. To sort in descending order according to return creation date, <code>sort=-FILING_DATE</code> would be used. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/ret:ReturnSortField
     * @param string|null $states This query parameter is used if the user wants to search for return requests in a specific state in the return process. One of the enumeration values defined in the <a href="/devzone/post-order/types/ReturnStateEnum.html">ReturnStateEnum</a> type definition must be used in this query parameter. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/ret:ReturnStateEnum
     * @param string|null $transaction_id The unique eBay-assigned ID of the line item purchase. If this parameter is used, the <b>item_id</b> query parameter must also be used, as both Item ID and Transaction ID values are needed to identify a line item. If you use <b>transaction_id</b> without also supplying an <b>item_id</b> value, this parameter is ignored.
    */
    public function __construct(?string $creation_date_range_from = null, ?string $creation_date_range_to = null, ?string $item_id = null, ?string $limit = null, ?string $offset = null, ?string $order_id = null, ?string $return_id = null, ?string $return_state = null, ?string $role = null, ?string $sort = null, ?string $states = null, ?string $transaction_id = null) {
        $this->creationDateRangeFrom = $creation_date_range_from;
        $this->creationDateRangeTo = $creation_date_range_to;
        $this->itemId = $item_id;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->orderId = $order_id;
        $this->returnId = $return_id;
        $this->returnState = $return_state;
        $this->role = $role;
        $this->sort = $sort;
        $this->states = $states;
        $this->transactionId = $transaction_id;
    }

}
