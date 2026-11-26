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

namespace EBay\OrderManagement\Generated\Fulfillment\Order\Item\Shipping_fulfillment\Create_additional;

use EBay\OrderManagement\Generated\Fulfillment\Models\ErrorResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\ShippingTrackingDetails;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /order/{order-id}/shipping_fulfillment/create_additional
*/
class Create_additionalRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_additionalRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/order/{order%2Did}/shipping_fulfillment/create_additional');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used by sellers to add an additional shipping fulfillment for an order shipped in multiple packages. Each call creates one additional shipping fulfillment for the specified order line items and associates that package with its own tracking number and shipping carrier. Use this method when an order is fulfilled across multiple packages and each package needs to be tracked separately, including when the same line item is shipped in more than one package.<p>Before using this method, determine which line items are included in the additional package. If the package has already shipped, provide the shipment date in the request. If no shipment date is provided, the current date and time are used.</p><p>After using <b>createAdditionalShippingFulfillment</b>, do not use <b>createShippingFulfillment</b> unless you intend to replace all previously entered fulfillment information.</p>
     * @param ShippingTrackingDetails $body Details of the additional shipping fulfillment to create for the order.
     * @param Create_additionalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(ShippingTrackingDetails $body, ?Create_additionalRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '403' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method is used by sellers to add an additional shipping fulfillment for an order shipped in multiple packages. Each call creates one additional shipping fulfillment for the specified order line items and associates that package with its own tracking number and shipping carrier. Use this method when an order is fulfilled across multiple packages and each package needs to be tracked separately, including when the same line item is shipped in more than one package.<p>Before using this method, determine which line items are included in the additional package. If the package has already shipped, provide the shipment date in the request. If no shipment date is provided, the current date and time are used.</p><p>After using <b>createAdditionalShippingFulfillment</b>, do not use <b>createShippingFulfillment</b> unless you intend to replace all previously entered fulfillment information.</p>
     * @param ShippingTrackingDetails $body Details of the additional shipping fulfillment to create for the order.
     * @param Create_additionalRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ShippingTrackingDetails $body, ?Create_additionalRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Create_additionalRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_additionalRequestBuilder {
        return new Create_additionalRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
