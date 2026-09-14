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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item;

use EBay\OrderManagement\Generated\PostOrderApi\Models\Error;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Add_shipping_label\Add_shipping_labelRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Decide\DecideRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Escalate\EscalateRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\File\FileRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Files\FilesRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Issue_refund\Issue_refundRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Mark_as_received\Mark_as_receivedRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Send_message\Send_messageRequestBuilder;
use EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Tracking\TrackingRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /post-order/v2/return/{returnId}
*/
class WithReturnItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The add_shipping_label property
    */
    public function add_shipping_label(): Add_shipping_labelRequestBuilder {
        return new Add_shipping_labelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The decide property
    */
    public function decide(): DecideRequestBuilder {
        return new DecideRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The escalate property
    */
    public function escalate(): EscalateRequestBuilder {
        return new EscalateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The file property
    */
    public function file(): FileRequestBuilder {
        return new FileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The files property
    */
    public function files(): FilesRequestBuilder {
        return new FilesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The issue_refund property
    */
    public function issue_refund(): Issue_refundRequestBuilder {
        return new Issue_refundRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The mark_as_received property
    */
    public function mark_as_received(): Mark_as_receivedRequestBuilder {
        return new Mark_as_receivedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The send_message property
    */
    public function send_message(): Send_messageRequestBuilder {
        return new Send_messageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tracking property
    */
    public function tracking(): TrackingRequestBuilder {
        return new TrackingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithReturnItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/post-order/v2/return/{returnId}{?fieldgroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Use this method to retrieve information on a specific return request. The user can retrieve either the full details or a summary of the return. When applicable, the full response may also include provisional refund state under <b>detail.refundInfo.provisionalRefund</b> to indicate whether a provisional refund was provided before return creation and whether that refund was later reversed.<br>
     * @param WithReturnItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?WithReturnItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Use this method to retrieve information on a specific return request. The user can retrieve either the full details or a summary of the return. When applicable, the full response may also include provisional refund state under <b>detail.refundInfo.provisionalRefund</b> to indicate whether a provisional refund was provided before return creation and whether that refund was later reversed.<br>
     * @param WithReturnItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithReturnItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/xml, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithReturnItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithReturnItemRequestBuilder {
        return new WithReturnItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
