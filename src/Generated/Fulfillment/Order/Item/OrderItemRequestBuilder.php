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

use EBay\OrderManagement\Generated\Fulfillment\Models\Order;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Issue_refund\Issue_refundRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Shipping_fulfillmentRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /order/{order-id}
*/
class OrderItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The issue_refund property
    */
    public function issue_refund(): Issue_refundRequestBuilder {
        return new Issue_refundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The shipping_fulfillment property
    */
    public function shipping_fulfillment(): Shipping_fulfillmentRequestBuilder {
        return new Shipping_fulfillmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OrderItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/order/{order%2Did}{?fieldGroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> call's <strong>orders.orderId</strong> field when you search for orders by creation date, modification date, or fulfillment status. Include the optional <strong>fieldGroups</strong> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <strong>Order</strong> object contains information you can use to create and process fulfillments, including the following: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing, and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees and, optionally, a breakdown of each </li></ul>
     * @param OrderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Order|null>
     * @throws Exception
    */
    public function get(?OrderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Order::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> call's <strong>orders.orderId</strong> field when you search for orders by creation date, modification date, or fulfillment status. Include the optional <strong>fieldGroups</strong> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <strong>Order</strong> object contains information you can use to create and process fulfillments, including the following: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing, and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees and, optionally, a breakdown of each </li></ul>
     * @param OrderItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrderItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return OrderItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OrderItemRequestBuilder {
        return new OrderItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
