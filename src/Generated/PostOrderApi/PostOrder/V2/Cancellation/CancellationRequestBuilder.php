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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Check_eligibility\Check_eligibilityRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item\WithCancelItemRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Search\SearchRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/cancellation
*/
class CancellationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The check_eligibility property
    */
    public function check_eligibility(): Check_eligibilityRequestBuilder {
        return new Check_eligibilityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The search property
    */
    public function search(): SearchRequestBuilder {
        return new SearchRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/PostOrderApi.postOrder.v2.cancellation.item collection
     * @param string $cancelId Input the unique identifier for the cancellation request you wish to retrieve. The cancellation ID value is passed in as part of the call URI.
     * @return WithCancelItemRequestBuilder
    */
    public function byCancelId(string $cancelId): WithCancelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cancelId'] = $cancelId;
        return new WithCancelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CancellationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/cancellation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method initiates an order cancellation on behalf of a seller and, if needed, you can also create an order cancellation on behalf of a buyer.<span class="tablenote"><b>Important!</b> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including this method. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signature to be included in the HTTP payload. </span>  <p>The buyer use-case for this method provides a way for you to programmatically test your cancellation flows in the Sandbox, as buyers in a production environment normally request order cancellations via the eBay web flows.</p>  <p class="tablenote"><b>Tip:</b> Call <b>POST /post-order/v2/cancellation/check_eligibility</b> before calling this method to ensure the order being considered is eligible to be cancelled.</p>  <p>Orders are eligible for cancellation based on various criteria, such as the cancellation cutoff period for the eBay marketplace on which the order was placed. As an example, the cutoff for <code>EBAY_US</code> is 1 hour after purchase, after which the order becomes ineligible for cancellation. If the order is not eligible for cancellation, you can notify the buyer or seller so they don't proceed with a cancellation request.</p>  <p>When a buyer cancels an order after purchase, it is up to the seller to either reject or approve it the request by calling <b>POST /post-order/v2/cancellation/{cancelId}/reject</b> or <b>POST /post-order/v2/cancellation/{cancelId}/approve</b> methods, respectively.<p>   <p>Sellers can call <b>POST /post-order/v2/cancellation</b> to directly cancel the order.</p> <p>Sellers may cancel an order if they run out of stock on an item and are unable to fulfill the order for up to 30 days after the sale. While the <b>POST /post-order/v2/cancellation/check_eligibility</b> method can be used to check for order cancellation eligibility, the <b>POST /post-order/v2/cancellation</b> method also returns eligibility information in the response. If the order's cancellation eligibility has changed, examine the <b>failureReason</b> field for why the cancellation failed.</p>  <p class="tablenote"><b>Note:</b> Sellers may cancel an order up to 30 days after the sale. However, if a seller has run out of stock on an item and cannot fulfill the order, a cancellation can result in a defect on the seller's account. Also, note there is no negative effect on the seller's account if the seller is cancelling the order at the request of the buyer.</p>   <p class="tablenote"><b>Note:</b> Currently, an entire eligible order can be cancelled, but not individual order line items. For the order to be eligible for cancellation, all of its order line items must be eligible.</p>  
     * @param StreamInterface $body Binary request body
     * @param CancellationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(StreamInterface $body, ?CancellationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * This method initiates an order cancellation on behalf of a seller and, if needed, you can also create an order cancellation on behalf of a buyer.<span class="tablenote"><b>Important!</b> Due to EU &amp; UK Payments regulatory requirements, an additional security verification via Digital Signatures is required for certain API calls that are made on behalf of EU/UK sellers, including this method. Please refer to <a href="/develop/guides/digital-signatures-for-apis" target="_blank">Digital Signatures for APIs</a> to learn more on the impacted APIs and the process to create signature to be included in the HTTP payload. </span>  <p>The buyer use-case for this method provides a way for you to programmatically test your cancellation flows in the Sandbox, as buyers in a production environment normally request order cancellations via the eBay web flows.</p>  <p class="tablenote"><b>Tip:</b> Call <b>POST /post-order/v2/cancellation/check_eligibility</b> before calling this method to ensure the order being considered is eligible to be cancelled.</p>  <p>Orders are eligible for cancellation based on various criteria, such as the cancellation cutoff period for the eBay marketplace on which the order was placed. As an example, the cutoff for <code>EBAY_US</code> is 1 hour after purchase, after which the order becomes ineligible for cancellation. If the order is not eligible for cancellation, you can notify the buyer or seller so they don't proceed with a cancellation request.</p>  <p>When a buyer cancels an order after purchase, it is up to the seller to either reject or approve it the request by calling <b>POST /post-order/v2/cancellation/{cancelId}/reject</b> or <b>POST /post-order/v2/cancellation/{cancelId}/approve</b> methods, respectively.<p>   <p>Sellers can call <b>POST /post-order/v2/cancellation</b> to directly cancel the order.</p> <p>Sellers may cancel an order if they run out of stock on an item and are unable to fulfill the order for up to 30 days after the sale. While the <b>POST /post-order/v2/cancellation/check_eligibility</b> method can be used to check for order cancellation eligibility, the <b>POST /post-order/v2/cancellation</b> method also returns eligibility information in the response. If the order's cancellation eligibility has changed, examine the <b>failureReason</b> field for why the cancellation failed.</p>  <p class="tablenote"><b>Note:</b> Sellers may cancel an order up to 30 days after the sale. However, if a seller has run out of stock on an item and cannot fulfill the order, a cancellation can result in a defect on the seller's account. Also, note there is no negative effect on the seller's account if the seller is cancelling the order at the request of the buyer.</p>   <p class="tablenote"><b>Note:</b> Currently, an entire eligible order can be cancelled, but not individual order line items. For the order to be eligible for cancellation, all of its order line items must be eligible.</p>  
     * @param StreamInterface $body Binary request body
     * @param CancellationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StreamInterface $body, ?CancellationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        $requestInfo->setStreamContent($body, "application/xml");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CancellationRequestBuilder
    */
    public function withUrl(string $rawUrl): CancellationRequestBuilder {
        return new CancellationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
