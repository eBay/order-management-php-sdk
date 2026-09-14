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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item;

use EBay\OrderManagement\Generated\PostOrderApi\Models\CaseDetailsResponse;
use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Appeal\AppealRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Close\CloseRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Issue_refund\Issue_refundRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_return_address\Provide_return_addressRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_shipment_info\Provide_shipment_infoRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/casemanagement/{caseId}
*/
class WithCaseItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The appeal property
    */
    public function appeal(): AppealRequestBuilder {
        return new AppealRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The close property
    */
    public function close(): CloseRequestBuilder {
        return new CloseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The issue_refund property
    */
    public function issue_refund(): Issue_refundRequestBuilder {
        return new Issue_refundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provide_return_address property
    */
    public function provide_return_address(): Provide_return_addressRequestBuilder {
        return new Provide_return_addressRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provide_shipment_info property
    */
    public function provide_shipment_info(): Provide_shipment_infoRequestBuilder {
        return new Provide_shipment_infoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCaseItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/casemanagement/{caseId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used on behalf of buyers and sellers to retrieve detailed information on a case, including case history and (if applicable) refund information, appeal information, and shipment tracking information. <br/><br/>The case is identified by the <code>caseId</code> value that is passed in as part of the call URI. You must be involved in the case in order to retrieve the case details.<br>
     * @param WithCaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CaseDetailsResponse|null>
     * @throws Exception
    */
    public function get(?WithCaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CaseDetailsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method can be used on behalf of buyers and sellers to retrieve detailed information on a case, including case history and (if applicable) refund information, appeal information, and shipment tracking information. <br/><br/>The case is identified by the <code>caseId</code> value that is passed in as part of the call URI. You must be involved in the case in order to retrieve the case details.<br>
     * @param WithCaseItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCaseItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithCaseItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCaseItemRequestBuilder {
        return new WithCaseItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
