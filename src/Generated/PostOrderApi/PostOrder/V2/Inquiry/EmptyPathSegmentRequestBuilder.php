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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry;

use EBay\OrderManagement\Generated\PostOrderApi\Models\CreateInquiryRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry/
*/
class EmptyPathSegmentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EmptyPathSegmentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry/');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 16, 2026. </span></span>This method is used to create an Item Not Received (INR) inquiry for the specified order line item on behalf of the buyer.  <br><br>If the inquiry is successfully created, an HTTP status code of <code>201</code> is returned, and the Location response header will contain the call URI that can be used to retrieve the newly-created inquiry. 
     * @param CreateInquiryRequest $body The base request type of the <b>POST /post-order/v2/inquiry</b> method, which is used to create an Item Not Received (INR) inquiry on behalf of the buyer.
     * @param EmptyPathSegmentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(CreateInquiryRequest $body, ?EmptyPathSegmentRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 16, 2026. </span></span>This method is used to create an Item Not Received (INR) inquiry for the specified order line item on behalf of the buyer.  <br><br>If the inquiry is successfully created, an HTTP status code of <code>201</code> is returned, and the Location response header will contain the call URI that can be used to retrieve the newly-created inquiry. 
     * @param CreateInquiryRequest $body The base request type of the <b>POST /post-order/v2/inquiry</b> method, which is used to create an Item Not Received (INR) inquiry on behalf of the buyer.
     * @param EmptyPathSegmentRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateInquiryRequest $body, ?EmptyPathSegmentRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EmptyPathSegmentRequestBuilder
    */
    public function withUrl(string $rawUrl): EmptyPathSegmentRequestBuilder {
        return new EmptyPathSegmentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
