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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Close;

use EBay\OrderManagement\Generated\PostOrderApi\Models\BuyerCloseInquiryRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry/{inquiryId}/close
*/
class CloseRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CloseRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry/{inquiryId}/close');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 16, 2026. </span></span>This method can be used on behalf of the buyer to close an Item Not Received (INR) inquiry. The inquiry ID is passed in as a path parameter to identify the inquiry to close, and there are two optional request payload fields to provide more information about why the inquiry is being closed.
     * @param BuyerCloseInquiryRequest $body The base request type for the <b>POST /post-order/v2/inquiry/{inquiryId}/close</b> method, which is used to close an INR inquiry.
     * @param CloseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ClosePostResponse|null>
     * @throws Exception
    */
    public function post(BuyerCloseInquiryRequest $body, ?CloseRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ClosePostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 16, 2026. </span></span>This method can be used on behalf of the buyer to close an Item Not Received (INR) inquiry. The inquiry ID is passed in as a path parameter to identify the inquiry to close, and there are two optional request payload fields to provide more information about why the inquiry is being closed.
     * @param BuyerCloseInquiryRequest $body The base request type for the <b>POST /post-order/v2/inquiry/{inquiryId}/close</b> method, which is used to close an INR inquiry.
     * @param CloseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BuyerCloseInquiryRequest $body, ?CloseRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CloseRequestBuilder
    */
    public function withUrl(string $rawUrl): CloseRequestBuilder {
        return new CloseRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
