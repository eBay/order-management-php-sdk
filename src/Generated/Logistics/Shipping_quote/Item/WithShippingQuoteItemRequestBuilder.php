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

namespace EBay\OrderManagement\Generated\Logistics\Shipping_quote\Item;

use EBay\OrderManagement\Generated\Logistics\Models\Error;
use EBay\OrderManagement\Generated\Logistics\Models\ShippingQuote;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /shipping_quote/{shippingQuoteId}
*/
class WithShippingQuoteItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithShippingQuoteItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipping_quote/{shippingQuoteId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the complete details of the shipping quote associated with the specified <strong>shippingQuoteId</strong> value.  <br><br>A "shipping quote" pertains to a single specific package and contains a set of shipping "rates" that quote the cost to ship the package by different shipping carriers and services. The quotes are based on the package's origin, destination, and size.  <br><br>Call <strong>createShippingQuote</strong> to create a <strong>shippingQuoteId</strong>.
     * @param WithShippingQuoteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ShippingQuote|null>
     * @throws Exception
    */
    public function get(?WithShippingQuoteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ShippingQuote::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves the complete details of the shipping quote associated with the specified <strong>shippingQuoteId</strong> value.  <br><br>A "shipping quote" pertains to a single specific package and contains a set of shipping "rates" that quote the cost to ship the package by different shipping carriers and services. The quotes are based on the package's origin, destination, and size.  <br><br>Call <strong>createShippingQuote</strong> to create a <strong>shippingQuoteId</strong>.
     * @param WithShippingQuoteItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithShippingQuoteItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithShippingQuoteItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithShippingQuoteItemRequestBuilder {
        return new WithShippingQuoteItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
