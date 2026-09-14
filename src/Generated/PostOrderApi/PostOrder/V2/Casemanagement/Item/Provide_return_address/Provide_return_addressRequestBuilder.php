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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_return_address;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ReturnAddressRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/casemanagement/{caseId}/provide_return_address
*/
class Provide_return_addressRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Provide_return_addressRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/casemanagement/{caseId}/provide_return_address');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 2, 2026. </span><p>This method can be used on behalf of sellers to provide the correct return address to the buyer. If applicable, and requested by the buyer, the seller can also provide the Return Merchandise Authorization (RMA) number to the buyer through the request payload.<br></p>
     * @param ReturnAddressRequest $body This type is used by the request payload of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> method, and the payload is used to provide the seller's return address and Return Merchandise Authorization (RMA) number (if applicable) to the seller.
     * @param Provide_return_addressRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Provide_return_addressPostResponse|null>
     * @throws Exception
    */
    public function post(ReturnAddressRequest $body, ?Provide_return_addressRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Provide_return_addressPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 2, 2026. </span><p>This method can be used on behalf of sellers to provide the correct return address to the buyer. If applicable, and requested by the buyer, the seller can also provide the Return Merchandise Authorization (RMA) number to the buyer through the request payload.<br></p>
     * @param ReturnAddressRequest $body This type is used by the request payload of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_return_address</b> method, and the payload is used to provide the seller's return address and Return Merchandise Authorization (RMA) number (if applicable) to the seller.
     * @param Provide_return_addressRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ReturnAddressRequest $body, ?Provide_return_addressRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Provide_return_addressRequestBuilder
    */
    public function withUrl(string $rawUrl): Provide_return_addressRequestBuilder {
        return new Provide_return_addressRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
