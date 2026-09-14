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

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute_summary;

/**
 * This method is used retrieve one or more payment disputes filed against the seller. These payment disputes can be open or recently closed. The following filter types are available in the request payload to control the payment disputes that are returned:<ul><li>Dispute filed against a specific order (<strong>order_id</strong> parameter is used)</li><li>Dispute(s) filed by a specific buyer (<strong>buyer_username</strong> parameter is used)</li><li>Dispute(s) filed within a specific date range (<strong>open_date_from</strong> and/or <strong>open_date_to</strong> parameters are used)</li><li>Disputes in a specific state (<strong>payment_dispute_status</strong> parameter is used)</li></ul>More than one of these filter types can be used together. See the request payload request fields for more information about how each filter is used.<br><br>If none of the filters are used, all open and recently closed payment disputes are returned.<br><br>Pagination is also available. See the <strong>limit</strong> and <strong>offset</strong> fields for more information on how pagination is used for this method.
*/
class Payment_dispute_summaryRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("buyer_username")
     * @var string|null $buyerUsername This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific buyer. The string that is passed in to this query parameter is the eBay user ID of the buyer.
    */
    public ?string $buyerUsername = null;
    
    /**
     * @var string|null $limit The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.<br><br><strong>Min</strong>: 1<br><br> <strong>Max</strong>: 200<br><br><strong>Default</strong>: 200
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the <strong>offset</strong> value to <code>0</code> (default value), the first payment dispute in the result set appears at the top of the response. <br><br>Combine <strong>offset</strong> with the <strong>limit</strong> parameter to control the payment disputes returned in the response. For example, if you supply an <strong>offset</strong> value of <code>0</code> and a <strong>limit</strong> value of <code>10</code>, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an <strong>offset</strong> value of <code>10</code> and a <strong>limit</strong> value of <code>20</code>, the response will contain payment disputes 11-30 from the result set that matches the input criteria.<br><br><strong>Min</strong>: 0 <br><br><strong>Default</strong>: 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("open_date_from")
     * @var string|null $openDateFrom The <strong>open_date_from</strong> and/or <strong>open_date_to</strong> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <strong>open_date_from</strong> and/or <strong>open_date_to</strong> filters is 90 days. These date filters use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <strong>open_date_from</strong> field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a <strong>open_date_from</strong> field is used, but a <strong>open_date_to</strong> field is not used, the <strong>open_date_to</strong> value will default to 90 days after the date specified in the <strong>open_date_from</strong> field, or to the present time if less than 90 days in the past.<br><br>The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    public ?string $openDateFrom = null;
    
    /**
     * @QueryParameter("open_date_to")
     * @var string|null $openDateTo The <strong>open_date_from</strong> and/or <strong>open_date_to</strong> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <strong>open_date_from</strong> and/or <strong>open_date_to</strong> filters is 90 days. These date filters use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <strong>open_date_to</strong> field sets the ending date of the date range, and can be set up to 90 days from the date set in the <strong>open_date_from</strong> field. <br><br>The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    public ?string $openDateTo = null;
    
    /**
     * @QueryParameter("order_id")
     * @var string|null $orderId This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored.<br><br>Use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.
    */
    public ?string $orderId = null;
    
    /**
     * @QueryParameter("payment_dispute_status")
     * @var string|null $paymentDisputeStatus This filter is used if the seller wishes to only retrieve payment disputes in one or more specific states. To filter by more than one status value, a separate <strong>payment_dispute_status</strong> filter must be used for each value, as shown below:<br><br><i>https://apiz.ebay.com/sell/fulfillment/v1/payment_dispute_summary?payment_dispute_status=OPEN&payment_dispute_status=ACTION_NEEDED</i> <br><br>If no <strong>payment_dispute_status</strong> filter is used, payment disputes in all states are returned in the response.<br><br>See <a href ="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputestateenum" target="_blank">DisputeStateEnum</a> type for supported values.
    */
    public ?string $paymentDisputeStatus = null;
    
    /**
     * Instantiates a new Payment_dispute_summaryRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $buyer_username This filter is used if the seller wishes to retrieve one or more payment disputes opened by a specific buyer. The string that is passed in to this query parameter is the eBay user ID of the buyer.
     * @param string|null $limit The value passed in this query parameter sets the maximum number of payment disputes to return per page of data. The value passed in this field should be an integer from 1 to 200. If this query parameter is not set, up to 200 records will be returned on each page of results.<br><br><strong>Min</strong>: 1<br><br> <strong>Max</strong>: 200<br><br><strong>Default</strong>: 200
     * @param string|null $offset This field is used to specify the number of records to skip in the result set before returning the first payment dispute in the paginated response. A zero-based index is used, so if you set the <strong>offset</strong> value to <code>0</code> (default value), the first payment dispute in the result set appears at the top of the response. <br><br>Combine <strong>offset</strong> with the <strong>limit</strong> parameter to control the payment disputes returned in the response. For example, if you supply an <strong>offset</strong> value of <code>0</code> and a <strong>limit</strong> value of <code>10</code>, the response will contain the first 10 payment disputes from the result set that matches the input criteria. If you supply an <strong>offset</strong> value of <code>10</code> and a <strong>limit</strong> value of <code>20</code>, the response will contain payment disputes 11-30 from the result set that matches the input criteria.<br><br><strong>Min</strong>: 0 <br><br><strong>Default</strong>: 0
     * @param string|null $open_date_from The <strong>open_date_from</strong> and/or <strong>open_date_to</strong> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <strong>open_date_from</strong> and/or <strong>open_date_to</strong> filters is 90 days. These date filters use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <strong>open_date_from</strong> field sets the beginning date of the date range, and can be set as far back as 18 months from the present time. If a <strong>open_date_from</strong> field is used, but a <strong>open_date_to</strong> field is not used, the <strong>open_date_to</strong> value will default to 90 days after the date specified in the <strong>open_date_from</strong> field, or to the present time if less than 90 days in the past.<br><br>The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $open_date_to The <strong>open_date_from</strong> and/or <strong>open_date_to</strong> date filters are used if the seller wishes to retrieve payment disputes opened within a specific date range. A maximum date range that may be set with the <strong>open_date_from</strong> and/or <strong>open_date_to</strong> filters is 90 days. These date filters use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu.<br><br>The <strong>open_date_to</strong> field sets the ending date of the date range, and can be set up to 90 days from the date set in the <strong>open_date_from</strong> field. <br><br>The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $order_id This filter is used if the seller wishes to retrieve one or more payment disputes filed against a specific order. It is possible that there can be more than one dispute filed against an order if the order has multiple line items. If this filter is used, any other filters are ignored.<br><br>Use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> method to retrieve order IDs. Order ID values are also shown in My eBay/Seller Hub.
     * @param string|null $payment_dispute_status This filter is used if the seller wishes to only retrieve payment disputes in one or more specific states. To filter by more than one status value, a separate <strong>payment_dispute_status</strong> filter must be used for each value, as shown below:<br><br><i>https://apiz.ebay.com/sell/fulfillment/v1/payment_dispute_summary?payment_dispute_status=OPEN&payment_dispute_status=ACTION_NEEDED</i> <br><br>If no <strong>payment_dispute_status</strong> filter is used, payment disputes in all states are returned in the response.<br><br>See <a href ="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute.disputestateenum" target="_blank">DisputeStateEnum</a> type for supported values.
    */
    public function __construct(?string $buyer_username = null, ?string $limit = null, ?string $offset = null, ?string $open_date_from = null, ?string $open_date_to = null, ?string $order_id = null, ?string $payment_dispute_status = null) {
        $this->buyerUsername = $buyer_username;
        $this->limit = $limit;
        $this->offset = $offset;
        $this->openDateFrom = $open_date_from;
        $this->openDateTo = $open_date_to;
        $this->orderId = $order_id;
        $this->paymentDisputeStatus = $payment_dispute_status;
    }

}
