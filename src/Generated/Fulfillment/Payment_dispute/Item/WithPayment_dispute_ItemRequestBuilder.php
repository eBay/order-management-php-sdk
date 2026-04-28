<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item;

use EBay\OrderManagement\Generated\Fulfillment\Models\PaymentDispute;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Accept\AcceptRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Activity\ActivityRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Add_evidence\Add_evidenceRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Contest\ContestRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Fetch_evidence_content\Fetch_evidence_contentRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Update_evidence\Update_evidenceRequestBuilder;
use EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Upload_evidence_file\Upload_evidence_fileRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /payment_dispute/{payment_dispute_id}
*/
class WithPayment_dispute_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The accept property
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The activity property
    */
    public function activity(): ActivityRequestBuilder {
        return new ActivityRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The add_evidence property
    */
    public function add_evidence(): Add_evidenceRequestBuilder {
        return new Add_evidenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The contest property
    */
    public function contest(): ContestRequestBuilder {
        return new ContestRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The fetch_evidence_content property
    */
    public function fetch_evidence_content(): Fetch_evidence_contentRequestBuilder {
        return new Fetch_evidence_contentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_evidence property
    */
    public function update_evidence(): Update_evidenceRequestBuilder {
        return new Update_evidenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upload_evidence_file property
    */
    public function upload_evidence_file(): Upload_evidence_fileRequestBuilder {
        return new Upload_evidence_fileRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithPayment_dispute_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/payment_dispute/{payment_dispute_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI.<br><br>Below is a summary of the information that is retrieved:<ul><li>Current status of payment dispute</li><li>Amount of the payment dispute</li><li>Reason the payment dispute was opened</li><li>Order and line items associated with the payment dispute</li><li>Seller response options if an action is currently required on the payment dispute</li><li>Details on the results of the payment dispute if it has been closed</li><li>Details on any evidence that was provided by the seller to fight the payment dispute</li></ul>
     * @param WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PaymentDispute|null>
     * @throws Exception
    */
    public function get(?WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PaymentDispute::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves detailed information on a specific payment dispute. The payment dispute identifier is passed in as path parameter at the end of the call URI.<br><br>Below is a summary of the information that is retrieved:<ul><li>Current status of payment dispute</li><li>Amount of the payment dispute</li><li>Reason the payment dispute was opened</li><li>Order and line items associated with the payment dispute</li><li>Seller response options if an action is currently required on the payment dispute</li><li>Details on the results of the payment dispute if it has been closed</li><li>Details on any evidence that was provided by the seller to fight the payment dispute</li></ul>
     * @param WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithPayment_dispute_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithPayment_dispute_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithPayment_dispute_ItemRequestBuilder {
        return new WithPayment_dispute_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
