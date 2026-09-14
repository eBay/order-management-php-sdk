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

namespace EBay\OrderManagement\Generated\Logistics\Shipment\Create_from_shipping_quote;

use EBay\OrderManagement\Generated\Logistics\Models\CreateShipmentFromQuoteRequest;
use EBay\OrderManagement\Generated\Logistics\Models\Error;
use EBay\OrderManagement\Generated\Logistics\Models\Shipment;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /shipment/create_from_shipping_quote
*/
class Create_from_shipping_quoteRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_from_shipping_quoteRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipment/create_from_shipping_quote');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method creates a shipment based on the <strong>shippingQuoteId</strong> and <strong>rateId</strong> values supplied in the request. The rate identified by the <strong>rateId</strong> value specifies the carrier and service for the package shipment, and the rate ID must be contained in the shipping quote identified by the <strong>shippingQuoteId</strong> value. Call <strong>createShippingQuote</strong> to retrieve a set of live shipping rates.<br><br><span class="tablenote"><strong>Note:</strong> The Logistics API only supports USPS shipping rates and labels.</span><br/>When you create a shipment, eBay generates a shipping label that you can download and use to ship your package.<br/><br/>In a <strong>createFromShippingQuote</strong> request, sellers can include a list of shipping options they want to add to the base service quoted in the selected rate. The list of available shipping options is specific to each quoted rate and if available, the options are listed in the rate container of the shipping quote.<br/><br/>In addition to a configurable return-to location and other details about the shipment, the response to this method includes:<ul><li>The shipping carrier and service to be used for the package shipment</li><li>A list of selected shipping options, if any</li><li>The shipment tracking number</li><li>The total shipping cost (the sum cost of the base shipping service and any added options)</li></ul>When you create a shipment, your billing agreement account is charged the sum of the <strong>baseShippingCost</strong> and the total cost of any additional shipping options you might have selected. Use the URL returned in <strong>labelDownloadUrl</strong> field, or call <strong>downloadLabelFile</strong> with the <strong>shipmentId</strong> value from the response, to download a shipping label for your package.<br/><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Sellers must set up their payment method before they can use this method to create a shipment and the associated shipping label.</p></div><h5 id="ba">Set up a billing agreement</h5>Prior to using this method to create a shipment, sellers must first set up their billing agreement. Failure to do so will return <code>Error 90030 Payment could not be completed.</code><br/><br/>The preferred method for sellers to set up their billing agreement is to go to <a href="https://www.ebay.com/ship/bulk/payments " target="_blank">Set up billing agreement</a> and follow the on-screen directions.<br/><br/>Alternatively, sellers can do the following:<ul><li>Go to https://www.ebay.com/ship/single/{order_id}, where {order_id} is that of the order for which the label is being printed.</li><li>When prompted, select <strong>PayPal</strong>.</li><li>Verify that <strong>Save PayPal for future purchases</strong> is selected.</li><li>Click <strong>Set up Payments</strong> which will open PayPal in a pop-up window.</li><li>Log in using <i>PayPal credentials</i>, and then follow the on-screen prompts to set up the billing agreement.</li><li>Once the agreement has been set up, sellers can leave this page as there is no need to actually print a label.</li></ul>
     * @param CreateShipmentFromQuoteRequest $body The create shipment from quote request.
     * @param Create_from_shipping_quoteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Shipment|null>
     * @throws Exception
    */
    public function post(CreateShipmentFromQuoteRequest $body, ?Create_from_shipping_quoteRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Shipment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method creates a shipment based on the <strong>shippingQuoteId</strong> and <strong>rateId</strong> values supplied in the request. The rate identified by the <strong>rateId</strong> value specifies the carrier and service for the package shipment, and the rate ID must be contained in the shipping quote identified by the <strong>shippingQuoteId</strong> value. Call <strong>createShippingQuote</strong> to retrieve a set of live shipping rates.<br><br><span class="tablenote"><strong>Note:</strong> The Logistics API only supports USPS shipping rates and labels.</span><br/>When you create a shipment, eBay generates a shipping label that you can download and use to ship your package.<br/><br/>In a <strong>createFromShippingQuote</strong> request, sellers can include a list of shipping options they want to add to the base service quoted in the selected rate. The list of available shipping options is specific to each quoted rate and if available, the options are listed in the rate container of the shipping quote.<br/><br/>In addition to a configurable return-to location and other details about the shipment, the response to this method includes:<ul><li>The shipping carrier and service to be used for the package shipment</li><li>A list of selected shipping options, if any</li><li>The shipment tracking number</li><li>The total shipping cost (the sum cost of the base shipping service and any added options)</li></ul>When you create a shipment, your billing agreement account is charged the sum of the <strong>baseShippingCost</strong> and the total cost of any additional shipping options you might have selected. Use the URL returned in <strong>labelDownloadUrl</strong> field, or call <strong>downloadLabelFile</strong> with the <strong>shipmentId</strong> value from the response, to download a shipping label for your package.<br/><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><strong><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></strong></span></span> Sellers must set up their payment method before they can use this method to create a shipment and the associated shipping label.</p></div><h5 id="ba">Set up a billing agreement</h5>Prior to using this method to create a shipment, sellers must first set up their billing agreement. Failure to do so will return <code>Error 90030 Payment could not be completed.</code><br/><br/>The preferred method for sellers to set up their billing agreement is to go to <a href="https://www.ebay.com/ship/bulk/payments " target="_blank">Set up billing agreement</a> and follow the on-screen directions.<br/><br/>Alternatively, sellers can do the following:<ul><li>Go to https://www.ebay.com/ship/single/{order_id}, where {order_id} is that of the order for which the label is being printed.</li><li>When prompted, select <strong>PayPal</strong>.</li><li>Verify that <strong>Save PayPal for future purchases</strong> is selected.</li><li>Click <strong>Set up Payments</strong> which will open PayPal in a pop-up window.</li><li>Log in using <i>PayPal credentials</i>, and then follow the on-screen prompts to set up the billing agreement.</li><li>Once the agreement has been set up, sellers can leave this page as there is no need to actually print a label.</li></ul>
     * @param CreateShipmentFromQuoteRequest $body The create shipment from quote request.
     * @param Create_from_shipping_quoteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateShipmentFromQuoteRequest $body, ?Create_from_shipping_quoteRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Create_from_shipping_quoteRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_from_shipping_quoteRequestBuilder {
        return new Create_from_shipping_quoteRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
