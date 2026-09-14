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

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Upload_evidence_file;

use EBay\OrderManagement\Generated\Fulfillment\Models\ErrorResponse;
use EBay\OrderManagement\Generated\Fulfillment\Models\UploadEvidenceFilePaymentDisputeResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payment_dispute/{payment_dispute_id}/upload_evidence_file
*/
class Upload_evidence_fileRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Upload_evidence_fileRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_dispute/{payment_dispute_id}/upload_evidence_file');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method is used to upload an evidence file for a contested payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>uploadEvidenceFile</strong> only uploads an encrypted, binary image file (using <strong>multipart/form-data</strong> HTTP request header), and does not have a JSON-based request payload.<br><br>Use 'file' as the name of the key that you use to upload the image file. The upload will not be successful if a different key name is used.<br><br>The three image formats supported at this time are <strong>.JPEG</strong>, <strong>.JPG</strong>, and <strong>.PNG</strong>.</span><br>After the file is successfully uploaded, the seller will need to grab the <strong>fileId</strong> value in the response payload to add this file to a new evidence set using the <strong>addEvidence</strong> method, or to add this file to an existing evidence set using the <strong>updateEvidence</strong> method.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> This method only supports file upload. If <code>PROOF_OF_DELIVERY</code> is requested when contesting a payment dispute, do <strong>not</strong> upload shipment tracking information for proof of order delivery using this method. Instead, use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-createshippingfulfillment" target="_blank ">createShippingFulfillment</a> to provide tracking information evidence for a dispute. </p></div>
     * @param Upload_evidence_fileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UploadEvidenceFilePaymentDisputeResponse|null>
     * @throws Exception
    */
    public function post(?Upload_evidence_fileRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UploadEvidenceFilePaymentDisputeResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method is used to upload an evidence file for a contested payment dispute. The unique identifier of the payment dispute is passed in as a path parameter, and unique identifiers for payment disputes can be retrieved with the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method.<br><br><span class="tablenote"><strong>Note:</strong> The <strong>uploadEvidenceFile</strong> only uploads an encrypted, binary image file (using <strong>multipart/form-data</strong> HTTP request header), and does not have a JSON-based request payload.<br><br>Use 'file' as the name of the key that you use to upload the image file. The upload will not be successful if a different key name is used.<br><br>The three image formats supported at this time are <strong>.JPEG</strong>, <strong>.JPG</strong>, and <strong>.PNG</strong>.</span><br>After the file is successfully uploaded, the seller will need to grab the <strong>fileId</strong> value in the response payload to add this file to a new evidence set using the <strong>addEvidence</strong> method, or to add this file to an existing evidence set using the <strong>updateEvidence</strong> method.<br><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> This method only supports file upload. If <code>PROOF_OF_DELIVERY</code> is requested when contesting a payment dispute, do <strong>not</strong> upload shipment tracking information for proof of order delivery using this method. Instead, use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-shipping_fulfillment-createshippingfulfillment" target="_blank ">createShippingFulfillment</a> to provide tracking information evidence for a dispute. </p></div>
     * @param Upload_evidence_fileRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?Upload_evidence_fileRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return Upload_evidence_fileRequestBuilder
    */
    public function withUrl(string $rawUrl): Upload_evidence_fileRequestBuilder {
        return new Upload_evidence_fileRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
