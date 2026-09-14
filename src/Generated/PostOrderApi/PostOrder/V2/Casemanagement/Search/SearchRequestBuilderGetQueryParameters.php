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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Search;

/**
 * This method is used to search for return requests and Item Not Received inquiries that have been escalated to eBay cases by the buyer. <br/><br/>There are multiple filters available for this method, including the following:<ul><li>Searching by item ID</li><li>Searching by order ID (or item ID/transaction ID)</li><li>Searching by return ID</li><li>Searching by case status</li><li>Searching by case creation date</li></ul>Pagination is also available for this method that allows the user to control how many and which cases are returned in the results set.
*/
class SearchRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("case_creation_date_range_from")
     * @var string|null $caseCreationDateRangeFrom The <b>case_creation_date_range_from</b> and <b>case_creation_date_range_to</b> query parameters are used if the user wants to retrieve cases that were created during a specific time range. The starting date range is input into the <b>case_creation_date_range_from</b> query parameter. The <b>case_creation_date_range_from</b> date must be older than the <b>case_creation_date_range_to</b> date, and it cannot be set back more than 18 months in the past. If the <b>case_creation_date_range_from</b> query parameter is used, but the <b>case_creation_date_range_to</b> query parameter is not used, the method will look for all cases created at or after this date/time, going forward 90 days from this date. The ISO-8601 date format should be used for this query parameter. Here's a sample of that format: <code>2015-05-15T03:52:39.000Z</code>.
    */
    public ?string $caseCreationDateRangeFrom = null;
    
    /**
     * @QueryParameter("case_creation_date_range_to")
     * @var string|null $caseCreationDateRangeTo The <b>case_creation_date_range_from</b> and <b>case_creation_date_range_to</b> query parameters are used if the user wants to retrieve cases that were created during a specific time range. The ending date range is input into the <b>case_creation_date_range_to</b> query parameter. The <b>case_creation_date_range_to</b> date must be more recent than the <b>case_creation_date_range_from</b> date. If the <b>case_creation_date_range_from</b> query parameter is used, but the <b>case_creation_date_range_to</b> query parameter is not used, the method will look for all cases created at or after the <b>case_creation_date_range_from</b> value, going forward 90 days from this date. The ISO-8601 date format should be used for this query parameter. Here's a sample of that format: <code>2015-05-15T03:52:39.000Z</code>.
    */
    public ?string $caseCreationDateRangeTo = null;
    
    /**
     * @QueryParameter("case_status_filter")
     * @var string|null $caseStatusFilter This query parameter is used if the user wants to search for cases in a specific state. One of the enumeration values defined in the <a href="/devzone/post-order/types/CaseStatusFilter.html">CaseStatusFilter</a> type definition must be used in this query parameter. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/res:CaseStatusFilter
    */
    public ?string $caseStatusFilter = null;
    
    /**
     * @var string|null $fieldgroups In the future, the <b>fieldgroups</b> query parameter may be used in the request to control the amount of detail that is returned in the response, but for now, the scope of the response will be the same even if this query parameter is used and set to <code>DEFAULT</code>, which is the only supported value. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/res:CaseSearchFieldGroupEnum
    */
    public ?string $fieldgroups = null;
    
    /**
     * @QueryParameter("item_id")
     * @var string|null $itemId The unique eBay-assigned ID of a listing. If this parameter is used, eBay will search for any cases filed against this listing. <br/><br/>This parameter is conditionally required if the <b>transaction_id</b> query parameter is used, as both Item ID and Transaction ID values are needed to identify a line item.
    */
    public ?string $itemId = null;
    
    /**
     * @var string|null $limit This parameter specifies the maximum number of cases to display per page of data. If this query parameter is not used, its value defaults to 25 (cases per page). <br/><br/><b>Min value</b>: 1<br/><b>Max value</b>: 200<br/><b>Default value</b>: 25
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset This parameter specifies the number of entries to skip in the result set before returning the first item in the paginated response. A 0-based index is used, so page '1' of results is returned if <code>0</code> is set in this field or if this query parameter is omitted. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results in the <b>paginationOutput</b> container of your initial call).<br/><br/>Combine <b>offset</b> with the <b>limit</b> query parameter to control how many and which items are returned in the response.<br/><br/><b>Min value</b>: 0<br/><b>Default value</b>: 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("order_id")
     * @var string|null $orderId The unique ID of an order. An <b>order_id</b> value is provided as a query parameter if the user wants to see if a case was filed against one or more order line items in the order specified in this field.  <br/><br/><span class="tablenote"> <b>Note:</b> The order ID value changes as an order goes from the unpaid to the paid state.</span>
    */
    public ?string $orderId = null;
    
    /**
     * @QueryParameter("return_id")
     * @var string|null $returnId The unique identifier of a return request. A <b>return_id</b> value is provided as a query parameter if the user wants to see if a particular return request has been escalated to a case.
    */
    public ?string $returnId = null;
    
    /**
     * @var string|null $sort This query parameter is used if you want to control whether cases are retrieved in descending order (most recent cases returned at top of the response) or ascending order (oldest cases returned at top of the response). If this query parameter is used, either <code>Descending</code> or <code>Ascending</code> must be used as the value.<br/><br/><code>Descending</code> is the default value, so this query parameter is more useful if you want to sort cases in ascending order.<br/><br/><b>Default</b>: Descending 
    */
    public ?string $sort = null;
    
    /**
     * @QueryParameter("transaction_id")
     * @var string|null $transactionId The unique eBay-assigned ID of the line item purchase. If this parameter is used, the <b>item_id</b> query parameter must also be used, as both Item ID and Transaction ID values are needed to identify a line item. If you use <b>transaction_id</b> without also supplying an <b>item_id</b> value, this parameter is ignored.
    */
    public ?string $transactionId = null;
    
    /**
     * Instantiates a new SearchRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $case_creation_date_range_from The <b>case_creation_date_range_from</b> and <b>case_creation_date_range_to</b> query parameters are used if the user wants to retrieve cases that were created during a specific time range. The starting date range is input into the <b>case_creation_date_range_from</b> query parameter. The <b>case_creation_date_range_from</b> date must be older than the <b>case_creation_date_range_to</b> date, and it cannot be set back more than 18 months in the past. If the <b>case_creation_date_range_from</b> query parameter is used, but the <b>case_creation_date_range_to</b> query parameter is not used, the method will look for all cases created at or after this date/time, going forward 90 days from this date. The ISO-8601 date format should be used for this query parameter. Here's a sample of that format: <code>2015-05-15T03:52:39.000Z</code>.
     * @param string|null $case_creation_date_range_to The <b>case_creation_date_range_from</b> and <b>case_creation_date_range_to</b> query parameters are used if the user wants to retrieve cases that were created during a specific time range. The ending date range is input into the <b>case_creation_date_range_to</b> query parameter. The <b>case_creation_date_range_to</b> date must be more recent than the <b>case_creation_date_range_from</b> date. If the <b>case_creation_date_range_from</b> query parameter is used, but the <b>case_creation_date_range_to</b> query parameter is not used, the method will look for all cases created at or after the <b>case_creation_date_range_from</b> value, going forward 90 days from this date. The ISO-8601 date format should be used for this query parameter. Here's a sample of that format: <code>2015-05-15T03:52:39.000Z</code>.
     * @param string|null $case_status_filter This query parameter is used if the user wants to search for cases in a specific state. One of the enumeration values defined in the <a href="/devzone/post-order/types/CaseStatusFilter.html">CaseStatusFilter</a> type definition must be used in this query parameter. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/res:CaseStatusFilter
     * @param string|null $fieldgroups In the future, the <b>fieldgroups</b> query parameter may be used in the request to control the amount of detail that is returned in the response, but for now, the scope of the response will be the same even if this query parameter is used and set to <code>DEFAULT</code>, which is the only supported value. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/res:CaseSearchFieldGroupEnum
     * @param string|null $item_id The unique eBay-assigned ID of a listing. If this parameter is used, eBay will search for any cases filed against this listing. <br/><br/>This parameter is conditionally required if the <b>transaction_id</b> query parameter is used, as both Item ID and Transaction ID values are needed to identify a line item.
     * @param string|null $limit This parameter specifies the maximum number of cases to display per page of data. If this query parameter is not used, its value defaults to 25 (cases per page). <br/><br/><b>Min value</b>: 1<br/><b>Max value</b>: 200<br/><b>Default value</b>: 25
     * @param string|null $offset This parameter specifies the number of entries to skip in the result set before returning the first item in the paginated response. A 0-based index is used, so page '1' of results is returned if <code>0</code> is set in this field or if this query parameter is omitted. Specify a positive value equal to or lower than the number of pages available (which you determine by examining the results in the <b>paginationOutput</b> container of your initial call).<br/><br/>Combine <b>offset</b> with the <b>limit</b> query parameter to control how many and which items are returned in the response.<br/><br/><b>Min value</b>: 0<br/><b>Default value</b>: 0
     * @param string|null $order_id The unique ID of an order. An <b>order_id</b> value is provided as a query parameter if the user wants to see if a case was filed against one or more order line items in the order specified in this field.  <br/><br/><span class="tablenote"> <b>Note:</b> The order ID value changes as an order goes from the unpaid to the paid state.</span>
     * @param string|null $return_id The unique identifier of a return request. A <b>return_id</b> value is provided as a query parameter if the user wants to see if a particular return request has been escalated to a case.
     * @param string|null $sort This query parameter is used if you want to control whether cases are retrieved in descending order (most recent cases returned at top of the response) or ascending order (oldest cases returned at top of the response). If this query parameter is used, either <code>Descending</code> or <code>Ascending</code> must be used as the value.<br/><br/><code>Descending</code> is the default value, so this query parameter is more useful if you want to sort cases in ascending order.<br/><br/><b>Default</b>: Descending 
     * @param string|null $transaction_id The unique eBay-assigned ID of the line item purchase. If this parameter is used, the <b>item_id</b> query parameter must also be used, as both Item ID and Transaction ID values are needed to identify a line item. If you use <b>transaction_id</b> without also supplying an <b>item_id</b> value, this parameter is ignored.
    */
    public function __construct(?string $case_creation_date_range_from = null, ?string $case_creation_date_range_to = null, ?string $case_status_filter = null, ?string $fieldgroups = null, ?string $item_id = null, ?string $limit = null, ?string $offset = null, ?string $order_id = null, ?string $return_id = null, ?string $sort = null, ?string $transaction_id = null) {
        $this->caseCreationDateRangeFrom = $case_creation_date_range_from;
        $this->caseCreationDateRangeTo = $case_creation_date_range_to;
        $this->caseStatusFilter = $case_status_filter;
        $this->fieldgroups = $fieldgroups;
        $this->itemId = $item_id;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->orderId = $order_id;
        $this->returnId = $return_id;
        $this->sort = $sort;
        $this->transactionId = $transaction_id;
    }

}
