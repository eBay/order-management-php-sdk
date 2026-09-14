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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Issue_refund;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\IssueRefundRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/return/{returnId}/issue_refund
*/
class Issue_refundRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Issue_refundRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/return/{returnId}/issue_refund');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used on behalf of the seller to issue a refund to the buyer.<br/><span class="tablenote"><b>Important!</b> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including this method. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signature to be included in the HTTP payload.</span>
     * @param IssueRefundRequest $body The base request type for the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, which is used to issue a refund to the buyer for a returned item.
     * @param Issue_refundRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(IssueRefundRequest $body, ?Issue_refundRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method can be used on behalf of the seller to issue a refund to the buyer.<br/><span class="tablenote"><b>Important!</b> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including this method. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signature to be included in the HTTP payload.</span>
     * @param IssueRefundRequest $body The base request type for the <b>POST /post-order/v2/return/{returnId}/issue_refund</b> method, which is used to issue a refund to the buyer for a returned item.
     * @param Issue_refundRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IssueRefundRequest $body, ?Issue_refundRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Issue_refundRequestBuilder
    */
    public function withUrl(string $rawUrl): Issue_refundRequestBuilder {
        return new Issue_refundRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
