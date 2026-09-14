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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\InquiryDetailsResponse;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Close\CloseRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Confirm_refund\Confirm_refundRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Escalate\EscalateRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Issue_refund\Issue_refundRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Provide_refund_info\Provide_refund_infoRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Provide_shipment_info\Provide_shipment_infoRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Send_message\Send_messageRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry/{inquiryId}
*/
class WithInquiryItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The close property
    */
    public function close(): CloseRequestBuilder {
        return new CloseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The confirm_refund property
    */
    public function confirm_refund(): Confirm_refundRequestBuilder {
        return new Confirm_refundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The escalate property
    */
    public function escalate(): EscalateRequestBuilder {
        return new EscalateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The issue_refund property
    */
    public function issue_refund(): Issue_refundRequestBuilder {
        return new Issue_refundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provide_refund_info property
    */
    public function provide_refund_info(): Provide_refund_infoRequestBuilder {
        return new Provide_refund_infoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The provide_shipment_info property
    */
    public function provide_shipment_info(): Provide_shipment_infoRequestBuilder {
        return new Provide_shipment_infoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The send_message property
    */
    public function send_message(): Send_messageRequestBuilder {
        return new Send_messageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithInquiryItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry/{inquiryId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves details about the specified INR inquiry and a summary of the activity to date with respect to the inquiry. The response can also include provisional refund state and an estimated resolution date when the inquiry is in a provisional refund eligible flow. The summary includes any actions taken by the buyer, the seller, the Inquiry service, or customer support representatives.<p></p>
     * @param WithInquiryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<InquiryDetailsResponse|null>
     * @throws Exception
    */
    public function get(?WithInquiryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [InquiryDetailsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves details about the specified INR inquiry and a summary of the activity to date with respect to the inquiry. The response can also include provisional refund state and an estimated resolution date when the inquiry is in a provisional refund eligible flow. The summary includes any actions taken by the buyer, the seller, the Inquiry service, or customer support representatives.<p></p>
     * @param WithInquiryItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithInquiryItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithInquiryItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithInquiryItemRequestBuilder {
        return new WithInquiryItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
