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

namespace EBay\OrderManagement\Generated\Fulfillment\Order\Item;

/**
 * Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> call's <strong>orders.orderId</strong> field when you search for orders by creation date, modification date, or fulfillment status. Include the optional <strong>fieldGroups</strong> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <strong>Order</strong> object contains information you can use to create and process fulfillments, including the following: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing, and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees and, optionally, a breakdown of each </li></ul>
*/
class OrderItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
    */
    public ?string $fieldGroups = null;
    
    /**
     * Instantiates a new OrderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
    */
    public function __construct(?string $fieldGroups = null) {
        $this->fieldGroups = $fieldGroups;
    }

}
