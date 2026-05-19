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

namespace EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment;

use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentDetails;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentPagedCollection;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Item\WithFulfillmentItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /order/{order-id}/shipping_fulfillment
*/
class Shipping_fulfillmentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OrderManagement/Generated/Fulfillment.order.item.shipping_fulfillment.item collection
     * @param string $fulfillmentId This path parameter is used to specify the unique identifier of the shipping fulfillment being retrieved.<br><br>Use the <a href="/api-docs/sell/fulfillment/resources/order/shipping_fulfillment/methods/getShippingFulfillments" target="_blank ">getShippingFulfillments</a> method to retrieved fulfillment IDs.
     * @return WithFulfillmentItemRequestBuilder
    */
    public function byFulfillmentId(string $fulfillmentId): WithFulfillmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fulfillmentId'] = $fulfillmentId;
        return new WithFulfillmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Shipping_fulfillmentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/order/{order%2Did}/shipping_fulfillment');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <b>orderId</b>. This value is returned in the <b>getOrders</b> call's <b>members.orderId</b> field when you search for orders by creation date or shipment status.
     * @param Shipping_fulfillmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ShippingFulfillmentPagedCollection|null>
     * @throws Exception
    */
    public function get(?Shipping_fulfillmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ShippingFulfillmentPagedCollection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a <i>shipping fulfillment</i>. For each package, execute this call once to generate a shipping fulfillment associated with that package. <br><br> <span class="tablenote"><strong>Note:</strong> A single line item in an order can consist of multiple units of a purchased item, and one unit can consist of multiple parts or components. Although these components might be provided by the manufacturer in separate packaging, the seller must include all components of a given line item in the same package.</span> <br><br>Before using this call for a given package, you must determine which line items are in the package. If the package has been shipped, you should provide the date of shipment in the request. If not provided, it will default to the current date and time.
     * @param ShippingFulfillmentDetails $body This type contains the details for creating a fulfillment for an order.
     * @param Shipping_fulfillmentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Shipping_fulfillmentPostResponse|null>
     * @throws Exception
    */
    public function post(ShippingFulfillmentDetails $body, ?Shipping_fulfillmentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Shipping_fulfillmentPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <b>orderId</b>. This value is returned in the <b>getOrders</b> call's <b>members.orderId</b> field when you search for orders by creation date or shipment status.
     * @param Shipping_fulfillmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Shipping_fulfillmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is a <i>shipping fulfillment</i>. For each package, execute this call once to generate a shipping fulfillment associated with that package. <br><br> <span class="tablenote"><strong>Note:</strong> A single line item in an order can consist of multiple units of a purchased item, and one unit can consist of multiple parts or components. Although these components might be provided by the manufacturer in separate packaging, the seller must include all components of a given line item in the same package.</span> <br><br>Before using this call for a given package, you must determine which line items are in the package. If the package has been shipped, you should provide the date of shipment in the request. If not provided, it will default to the current date and time.
     * @param ShippingFulfillmentDetails $body This type contains the details for creating a fulfillment for an order.
     * @param Shipping_fulfillmentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ShippingFulfillmentDetails $body, ?Shipping_fulfillmentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Shipping_fulfillmentRequestBuilder
    */
    public function withUrl(string $rawUrl): Shipping_fulfillmentRequestBuilder {
        return new Shipping_fulfillmentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
