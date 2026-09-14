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

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Fetch_evidence_content;

use EBay\OrderManagement\Generated\Fulfillment\Models\ErrorResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /payment_dispute/{payment_dispute_id}/fetch_evidence_content
*/
class Fetch_evidence_contentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Fetch_evidence_contentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_dispute/{payment_dispute_id}/fetch_evidence_content?evidence_id={evidence_id}&file_id={file_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:<ul><li><strong>payment_dispute_id</strong>: the identifier of the payment dispute. The identifier of each payment dispute is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank">getPaymentDisputeSummaries</a> response.</li><li><strong>evidence_id</strong>: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li><li><strong>file_id</strong>: the identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li></ul><p>An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.</p>
     * @param Fetch_evidence_contentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?Fetch_evidence_contentRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:<ul><li><strong>payment_dispute_id</strong>: the identifier of the payment dispute. The identifier of each payment dispute is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank">getPaymentDisputeSummaries</a> response.</li><li><strong>evidence_id</strong>: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li><li><strong>file_id</strong>: the identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li></ul><p>An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.</p>
     * @param Fetch_evidence_contentRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Fetch_evidence_contentRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Fetch_evidence_contentRequestBuilder
    */
    public function withUrl(string $rawUrl): Fetch_evidence_contentRequestBuilder {
        return new Fetch_evidence_contentRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
