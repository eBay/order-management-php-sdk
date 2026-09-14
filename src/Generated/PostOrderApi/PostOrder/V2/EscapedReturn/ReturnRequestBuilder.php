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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn;

use EBay\OrderManagement\Generated\PostOrderApi\Models\CreateReturnRequest;
use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\WithReturnItemRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Preference\PreferenceRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Search\SearchRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/return
*/
class ReturnRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The preference property
    */
    public function preference(): PreferenceRequestBuilder {
        return new PreferenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/PostOrderApi.postOrder.v2.return.item collection
     * @param string $returnId The unique eBay-assigned ID of the return request. This field is required to identify the return request that the user wishes to retrieve. The return ID value is passed in as part of the call URI.
     * @return WithReturnItemRequestBuilder
    */
    public function byReturnId(string $returnId): WithReturnItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['returnId'] = $returnId;
        return new WithReturnItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReturnRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/return{?fieldgroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to create a return request on behalf of the buyer. If you are converting a return request draft into an actual return request, you must include the <b>draftId</b> field in the request. Whether you are creating a return request directly, or converting a return request draft into a return request, you must include values for the <b>itemId</b>, <b>transactionId</b>, <b>reason</b>, <b>returnQuantity</b>, and <b>type</b> fields.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the <b>fieldgroups</b> query parameter is set to <code>FULL</code>, the response may also include provisional refund information under <b>detail.detail.refundInfo.provisionalRefund</b>, since the full response uses the same return detail type returned by the <b>Get Return</b> call.</span></p><br>
     * @param CreateReturnRequest $body The base request type of the <b>POST /post-order/v2/return</b> method, which allows you to create a return request from scratch or to convert a return request draft into a return request.
     * @param ReturnRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(CreateReturnRequest $body, ?ReturnRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method is used to create a return request on behalf of the buyer. If you are converting a return request draft into an actual return request, you must include the <b>draftId</b> field in the request. Whether you are creating a return request directly, or converting a return request draft into a return request, you must include values for the <b>itemId</b>, <b>transactionId</b>, <b>reason</b>, <b>returnQuantity</b>, and <b>type</b> fields.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the <b>fieldgroups</b> query parameter is set to <code>FULL</code>, the response may also include provisional refund information under <b>detail.detail.refundInfo.provisionalRefund</b>, since the full response uses the same return detail type returned by the <b>Get Return</b> call.</span></p><br>
     * @param CreateReturnRequest $body The base request type of the <b>POST /post-order/v2/return</b> method, which allows you to create a return request from scratch or to convert a return request draft into a return request.
     * @param ReturnRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateReturnRequest $body, ?ReturnRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReturnRequestBuilder
    */
    public function withUrl(string $rawUrl): ReturnRequestBuilder {
        return new ReturnRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
