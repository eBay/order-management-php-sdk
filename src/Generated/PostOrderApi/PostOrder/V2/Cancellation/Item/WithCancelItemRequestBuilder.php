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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Approve\ApproveRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Confirm\ConfirmRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\Reject\RejectRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/cancellation/{cancelId}
*/
class WithCancelItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The approve property
    */
    public function approve(): ApproveRequestBuilder {
        return new ApproveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The confirm property
    */
    public function confirm(): ConfirmRequestBuilder {
        return new ConfirmRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The reject property
    */
    public function reject(): RejectRequestBuilder {
        return new RejectRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCancelItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/cancellation/{cancelId}{?fieldgroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the details of a specific cancellation request.  <br/><br/>The response from this method depends on the value set for the <b>fieldgroups</b> query parameter. If the value of <b>fieldgroups</b> is set to <code>SUMMARY</code>, the response payload is identical to the payload retrieved in the <b>GET /post-order/v2/cancellation/search</b> method. If you set the value of <b>fieldgroups</b> to <code>FULL</code>, the response includes a history of each cancellation request and the list of each line item in the order.<br>
     * @param WithCancelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?WithCancelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method retrieves the details of a specific cancellation request.  <br/><br/>The response from this method depends on the value set for the <b>fieldgroups</b> query parameter. If the value of <b>fieldgroups</b> is set to <code>SUMMARY</code>, the response payload is identical to the payload retrieved in the <b>GET /post-order/v2/cancellation/search</b> method. If you set the value of <b>fieldgroups</b> to <code>FULL</code>, the response includes a history of each cancellation request and the list of each line item in the order.<br>
     * @param WithCancelItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCancelItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithCancelItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCancelItemRequestBuilder {
        return new WithCancelItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
