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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Add_shipping_label;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ProvideLabelRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/return/{returnId}/add_shipping_label
*/
class Add_shipping_labelRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Add_shipping_labelRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/return/{returnId}/add_shipping_label');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The primary function of this seller-facing method is to create a return shipping label for the buyer. However, this method can also be used on behalf of the seller to provide more information to the buyer about the shipping label. For example, the seller may want to use this method to inform the buyer that an eBay or seller-provided shipping label is already available for use.<br/><br/>The seller may need to first call <b>POST /post-order/v2/return/{returnId}/initiate_shipping_label</b> method before using this method.<br>
     * @param ProvideLabelRequest $body The base request type of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
     * @param Add_shipping_labelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(ProvideLabelRequest $body, ?Add_shipping_labelRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * The primary function of this seller-facing method is to create a return shipping label for the buyer. However, this method can also be used on behalf of the seller to provide more information to the buyer about the shipping label. For example, the seller may want to use this method to inform the buyer that an eBay or seller-provided shipping label is already available for use.<br/><br/>The seller may need to first call <b>POST /post-order/v2/return/{returnId}/initiate_shipping_label</b> method before using this method.<br>
     * @param ProvideLabelRequest $body The base request type of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
     * @param Add_shipping_labelRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvideLabelRequest $body, ?Add_shipping_labelRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Add_shipping_labelRequestBuilder
    */
    public function withUrl(string $rawUrl): Add_shipping_labelRequestBuilder {
        return new Add_shipping_labelRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
