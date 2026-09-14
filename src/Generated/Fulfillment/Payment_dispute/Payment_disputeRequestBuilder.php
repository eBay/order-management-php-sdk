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

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute;

use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\WithPayment_dispute_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /payment_dispute
*/
class Payment_disputeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/OrderManagement/Generated/Fulfillment.payment_dispute.item collection
     * @param string $payment_dispute_id This parameter is used to specify the unique identifier of the payment dispute being retrieved.<br><br> Use the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank ">getPaymentDisputeSummaries</a> method to retrieve payment dispute IDs.
     * @return WithPayment_dispute_ItemRequestBuilder
    */
    public function byPayment_dispute_id(string $payment_dispute_id): WithPayment_dispute_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['payment_dispute_id'] = $payment_dispute_id;
        return new WithPayment_dispute_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Payment_disputeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_dispute');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
