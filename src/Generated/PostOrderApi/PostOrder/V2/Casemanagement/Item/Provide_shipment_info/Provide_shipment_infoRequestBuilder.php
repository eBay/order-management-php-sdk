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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Casemanagement\Item\Provide_shipment_info;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\Models\ProvideShipmentInfoRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/casemanagement/{caseId}/provide_shipment_info
*/
class Provide_shipment_infoRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Provide_shipment_infoRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/casemanagement/{caseId}/provide_shipment_info');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 2, 2026. </span><p>This method is used to provide shipment tracking information for an item that is involved in case.<br></p>
     * @param ProvideShipmentInfoRequest $body The base request type of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_shipment_info</b> method, which is used to provide return shipment tracking information.
     * @param Provide_shipment_infoRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function post(ProvideShipmentInfoRequest $body, ?Provide_shipment_infoRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * <span class="tablenote"><span style="color:#004680"><strong>Note: </strong>This call has been deprecated and will be decommissioned on March 2, 2026. </span><p>This method is used to provide shipment tracking information for an item that is involved in case.<br></p>
     * @param ProvideShipmentInfoRequest $body The base request type of the <b>POST /post-order/v2/casemanagement/{caseId}/provide_shipment_info</b> method, which is used to provide return shipment tracking information.
     * @param Provide_shipment_infoRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvideShipmentInfoRequest $body, ?Provide_shipment_infoRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
