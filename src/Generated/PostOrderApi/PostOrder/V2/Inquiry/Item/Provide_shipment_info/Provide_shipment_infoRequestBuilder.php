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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Inquiry\Item\Provide_shipment_info;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ShipmentInfoRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /post-order/v2/inquiry/{inquiryId}/provide_shipment_info
*/
class Provide_shipment_infoRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Provide_shipment_infoRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/inquiry/{inquiryId}/provide_shipment_info');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to provide shipment tracking and other information about the shipment of an order line item that had an INR inquiry filed against it.<br>
     * @param ShipmentInfoRequest $body Base request type for the <b>POST /post-order/v2/inquiry/{inquiryId}/provide_shipment_info</b> method, which is used to provide shipment information about an order line item that is on its way to the buyer.
     * @param Provide_shipment_infoRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Provide_shipment_infoPostResponse|null>
     * @throws Exception
    */
    public function post(ShipmentInfoRequest $body, ?Provide_shipment_infoRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Provide_shipment_infoPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method can be used to provide shipment tracking and other information about the shipment of an order line item that had an INR inquiry filed against it.<br>
     * @param ShipmentInfoRequest $body Base request type for the <b>POST /post-order/v2/inquiry/{inquiryId}/provide_shipment_info</b> method, which is used to provide shipment information about an order line item that is on its way to the buyer.
     * @param Provide_shipment_infoRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ShipmentInfoRequest $body, ?Provide_shipment_infoRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Provide_shipment_infoRequestBuilder
    */
    public function withUrl(string $rawUrl): Provide_shipment_infoRequestBuilder {
        return new Provide_shipment_infoRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
