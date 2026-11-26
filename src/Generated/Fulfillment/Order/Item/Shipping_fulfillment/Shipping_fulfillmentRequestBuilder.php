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

use EBay\OrderManagement\Generated\Fulfillment\Models\ErrorResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentDetails;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingFulfillmentPagedCollection;
use EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Create_additional\Create_additionalRequestBuilder;
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
     * The create_additional property
    */
    public function create_additional(): Create_additionalRequestBuilder {
        return new Create_additionalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/Fulfillment.order.item.shipping_fulfillment.item collection
     * @param string $fulfillmentId This path parameter is used to specify the unique identifier of the shipping fulfillment being retrieved.<br><br>Use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-getshippingfulfillments" target="_blank">getShippingFulfillments</a> method to retrieve fulfillment IDs.
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
     * Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <strong>orderId</strong>. This value is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> call's <strong>members.orderId</strong> field when you search for orders by creation date or shipment status.
     * @param Shipping_fulfillmentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ShippingFulfillmentPagedCollection|null>
     * @throws Exception
    */
    public function get(?Shipping_fulfillmentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ShippingFulfillmentPagedCollection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method is used by sellers to create a shipping fulfillment for an order.<p>When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is shipping fulfillment. For each package, execute this call once to generate the shipping fulfillment associated with that package.</p><p>Use this method when an order is shipped in a single package, or to create multiple packages for the same order, as long as each package contains different line items from that order. Each call creates one shipping fulfillment for the specified order line items and associates that package with its tracking information.</p><p>Before using this method, determine which line items are included in the package. If the package has already shipped, you should provide the date of shipment in the request. If no shipment date is provided, the current date and time is used.</p><p>If the same line item under an order must be shipped across multiple packages, use the <b>createAdditionalShippingFulfillment</b> method for the additional package shipments. That method is intended primarily to support that use case.</p><p>This method can also be used to provide proof of delivery for contested payment disputes. To do so, create a shipping fulfillment and provide shipment tracking information for all line items involved in the dispute. eBay will then pick up this information for the dispute directly.</p>
     * @param ShippingFulfillmentDetails $body fulfillment payload
     * @param Shipping_fulfillmentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Shipping_fulfillmentPostResponse|null>
     * @throws Exception
    */
    public function post(ShippingFulfillmentDetails $body, ?Shipping_fulfillmentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Shipping_fulfillmentPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Use this call to retrieve the contents of all fulfillments currently defined for a specified order based on the order's unique identifier, <strong>orderId</strong>. This value is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-order-getorders" target="_blank">getOrders</a> call's <strong>members.orderId</strong> field when you search for orders by creation date or shipment status.
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
     * This method is used by sellers to create a shipping fulfillment for an order.<p>When you group an order's line items into one or more packages, each package requires a corresponding plan for handling, addressing, and shipping; this is shipping fulfillment. For each package, execute this call once to generate the shipping fulfillment associated with that package.</p><p>Use this method when an order is shipped in a single package, or to create multiple packages for the same order, as long as each package contains different line items from that order. Each call creates one shipping fulfillment for the specified order line items and associates that package with its tracking information.</p><p>Before using this method, determine which line items are included in the package. If the package has already shipped, you should provide the date of shipment in the request. If no shipment date is provided, the current date and time is used.</p><p>If the same line item under an order must be shipped across multiple packages, use the <b>createAdditionalShippingFulfillment</b> method for the additional package shipments. That method is intended primarily to support that use case.</p><p>This method can also be used to provide proof of delivery for contested payment disputes. To do so, create a shipping fulfillment and provide shipment tracking information for all line items involved in the dispute. eBay will then pick up this information for the dispute directly.</p>
     * @param ShippingFulfillmentDetails $body fulfillment payload
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
