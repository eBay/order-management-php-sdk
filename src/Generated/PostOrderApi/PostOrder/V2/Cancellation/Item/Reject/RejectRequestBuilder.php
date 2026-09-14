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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Reject;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/cancellation/{cancelId}/reject
*/
class RejectRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new RejectRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/cancellation/{cancelId}/reject');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used on behalf of a seller to reject a buyer's order cancellation request.  <br/><br/>A seller often rejects cancellation requests if one or more line items in the order have already been shipped to the buyer (which makes the order ineligible to be cancelled). <br/><br/>If the seller has shipped all or part of the order, it is good practice to pass <b>shipmentDate</b> and <b>trackingNumber</b> in the request payload.  <p class="tablenote"><b>Important!</b> The <b>shipmentDate</b> and <b>trackingNumber</b> fields are optional in the request payload. If you do <i>not</i> include either of these fields, you must submit a payload consisting of just the opening and closing braces (<code>{ }</code>).</p>
     * @param StreamInterface $body Binary request body
     * @param RejectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(StreamInterface $body, ?RejectRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method is used on behalf of a seller to reject a buyer's order cancellation request.  <br/><br/>A seller often rejects cancellation requests if one or more line items in the order have already been shipped to the buyer (which makes the order ineligible to be cancelled). <br/><br/>If the seller has shipped all or part of the order, it is good practice to pass <b>shipmentDate</b> and <b>trackingNumber</b> in the request payload.  <p class="tablenote"><b>Important!</b> The <b>shipmentDate</b> and <b>trackingNumber</b> fields are optional in the request payload. If you do <i>not</i> include either of these fields, you must submit a payload consisting of just the opening and closing braces (<code>{ }</code>).</p>
     * @param StreamInterface $body Binary request body
     * @param RejectRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StreamInterface $body, ?RejectRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RejectRequestBuilder
    */
    public function withUrl(string $rawUrl): RejectRequestBuilder {
        return new RejectRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
