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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2;

use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\CancellationRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\CasemanagementRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\ReturnRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\InquiryRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /post-order/v2
*/
class V2RequestBuilder extends BaseRequestBuilder 
{
    /**
     * The cancellation property
    */
    public function cancellation(): CancellationRequestBuilder {
        return new CancellationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The casemanagement property
    */
    public function casemanagement(): CasemanagementRequestBuilder {
        return new CasemanagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The return property
    */
    public function escapedReturn(): ReturnRequestBuilder {
        return new ReturnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The inquiry property
    */
    public function inquiry(): InquiryRequestBuilder {
        return new InquiryRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new V2RequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
