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

use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\WithInquiryItemRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Search\SearchRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry
*/
class InquiryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The EmptyPathSegment property
    */
    public function emptyPathSegment(): EmptyPathSegmentRequestBuilder {
        return new EmptyPathSegmentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/PostOrderApi.postOrder.v2.inquiry.item collection
     * @param string $inquiryId The unique ID of the inquiry for which details and history are to be retrieved. The inquiry ID value is passed in as part of the call URI.
     * @return WithInquiryItemRequestBuilder
    */
    public function byInquiryId(string $inquiryId): WithInquiryItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['inquiryId'] = $inquiryId;
        return new WithInquiryItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new InquiryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
