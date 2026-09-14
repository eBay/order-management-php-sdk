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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement;

use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\WithCaseItemRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Search\SearchRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /post-order/v2/casemanagement
*/
class CasemanagementRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/PostOrderApi.postOrder.v2.casemanagement.item collection
     * @param string $caseId The unique identifier of a case. This URI parameter is required in order to identify the case to retrieve. The case ID value is passed in as part of the call URI. The buyer or seller must be involved in the case in order to retrieve details on the specified case.
     * @return WithCaseItemRequestBuilder
    */
    public function byCaseId(string $caseId): WithCaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['caseId'] = $caseId;
        return new WithCaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CasemanagementRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/casemanagement');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
