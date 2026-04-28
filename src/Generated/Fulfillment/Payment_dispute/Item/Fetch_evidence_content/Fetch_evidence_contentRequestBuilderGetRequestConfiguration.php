<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Payment_dispute\Item\Fetch_evidence_content;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Fetch_evidence_contentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Fetch_evidence_contentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Fetch_evidence_contentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Fetch_evidence_contentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Fetch_evidence_contentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Fetch_evidence_contentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Fetch_evidence_contentRequestBuilderGetQueryParameters.
     * @param string|null $evidence_id This query parameter is used to specify the unique identifier of the evidential file set.<br><br>The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @param string|null $file_id This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter.<br><br>The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/api-docs/sell/fulfillment/resources/payment_dispute/methods/getPaymentDispute" target="_blank ">getPaymentDispute</a> response.
     * @return Fetch_evidence_contentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $evidence_id = null, ?string $file_id = null): Fetch_evidence_contentRequestBuilderGetQueryParameters {
        return new Fetch_evidence_contentRequestBuilderGetQueryParameters($evidence_id, $file_id);
    }

}
