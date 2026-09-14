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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Check_eligibility;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/cancellation/check_eligibility
*/
class Check_eligibilityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Check_eligibilityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/cancellation/check_eligibility');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to check if a specified order is eligible to be cancelled.  <br/><br/>The response contains information on cancellation eligibility at the order and order line-item levels.  <p class="tablenote"><b>Note:</b> Currently, only an entire order can be cancelled; the cancellation of individual line items in the order is not supported.</p>  <p>For an order to be eligible for cancellation, all of the line items in the order must be eligible for cancellation.</p>
     * @param StreamInterface $body Binary request body
     * @param Check_eligibilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(StreamInterface $body, ?Check_eligibilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method is used to check if a specified order is eligible to be cancelled.  <br/><br/>The response contains information on cancellation eligibility at the order and order line-item levels.  <p class="tablenote"><b>Note:</b> Currently, only an entire order can be cancelled; the cancellation of individual line items in the order is not supported.</p>  <p>For an order to be eligible for cancellation, all of the line items in the order must be eligible for cancellation.</p>
     * @param StreamInterface $body Binary request body
     * @param Check_eligibilityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StreamInterface $body, ?Check_eligibilityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        $requestInfo->setStreamContent($body, "application/xml");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Check_eligibilityRequestBuilder
    */
    public function withUrl(string $rawUrl): Check_eligibilityRequestBuilder {
        return new Check_eligibilityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
