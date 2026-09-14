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

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Accept;

use EBay\OrderManagement\Generated\Fulfillment\Models\AcceptPaymentDisputeRequest;
use EBay\OrderManagement\Generated\Fulfillment\Models\ErrorResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payment_dispute/{payment_dispute_id}/accept
*/
class AcceptRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AcceptRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_dispute/{payment_dispute_id}/accept');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used if the seller wishes to accept a payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on theste fields.
     * @param AcceptPaymentDisputeRequest $body This type is used by base request of the <strong>acceptPaymentDispute</strong> method.
     * @param AcceptRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(AcceptPaymentDisputeRequest $body, ?AcceptRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method is used if the seller wishes to accept a payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method.<br><br>The <strong>revision</strong> field in the request payload is required, and the <strong>returnAddress</strong> field should be supplied if the seller is expecting the buyer to return the item. See the Request Payload section for more information on theste fields.
     * @param AcceptPaymentDisputeRequest $body This type is used by base request of the <strong>acceptPaymentDispute</strong> method.
     * @param AcceptRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AcceptPaymentDisputeRequest $body, ?AcceptRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AcceptRequestBuilder
    */
    public function withUrl(string $rawUrl): AcceptRequestBuilder {
        return new AcceptRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
