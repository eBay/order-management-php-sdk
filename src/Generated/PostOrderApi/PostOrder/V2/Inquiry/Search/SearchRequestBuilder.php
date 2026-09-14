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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Search;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\InquirySearchResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry/search
*/
class SearchRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SearchRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry/search{?fieldgroups*,inquiry_creation_date_range_from*,inquiry_creation_date_range_to*,inquiry_status*,item_id*,limit*,offset*,order_id*,sort*,transaction_id*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to search for INR inquiries using multiple filter types.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Inquiries that have been escalated to cases are excluded from <b>searchInquiries</b> results. Use <a href="/devzone/post-order/post-order_v2_casemanagement-caseId__get.html">getCase</a> to locate the escalated case and the other <b>Post-Order Case Management Calls</b> to manage escalated items. The <a href="/devzone/post-order/post-order_v2_inquiry-inquiryId__get.html">getInquiry</a> endpoint may still return the original inquiry for historical context.</span></p><br>
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InquirySearchResponse|null>
     * @throws Exception
    */
    public function get(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InquirySearchResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method is used to search for INR inquiries using multiple filter types.<br><p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Inquiries that have been escalated to cases are excluded from <b>searchInquiries</b> results. Use <a href="/devzone/post-order/post-order_v2_casemanagement-caseId__get.html">getCase</a> to locate the escalated case and the other <b>Post-Order Case Management Calls</b> to manage escalated items. The <a href="/devzone/post-order/post-order_v2_inquiry-inquiryId__get.html">getInquiry</a> endpoint may still return the original inquiry for historical context.</span></p><br>
     * @param SearchRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SearchRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SearchRequestBuilder
    */
    public function withUrl(string $rawUrl): SearchRequestBuilder {
        return new SearchRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
