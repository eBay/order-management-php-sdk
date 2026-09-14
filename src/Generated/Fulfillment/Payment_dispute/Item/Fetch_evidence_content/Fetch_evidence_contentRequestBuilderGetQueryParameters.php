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

/**
 * This call retrieves a specific evidence file for a payment dispute. The following three identifying parameters are needed in the call URI:<ul><li><strong>payment_dispute_id</strong>: the identifier of the payment dispute. The identifier of each payment dispute is returned in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdisputesummaries" target="_blank">getPaymentDisputeSummaries</a> response.</li><li><strong>evidence_id</strong>: the identifier of the evidential file set. The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li><li><strong>file_id</strong>: the identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter. The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank">getPaymentDispute</a> response.</li></ul><p>An actual binary file is returned if the call is successful. An error will occur if any of three identifiers are invalid.</p>
*/
class Fetch_evidence_contentRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("evidence_id")
     * @var string|null $evidenceId This query parameter is used to specify the unique identifier of the evidential file set.<br><br>The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
    */
    public ?string $evidenceId = null;
    
    /**
     * @QueryParameter("file_id")
     * @var string|null $fileId This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter.<br><br>The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
    */
    public ?string $fileId = null;
    
    /**
     * Instantiates a new Fetch_evidence_contentRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $evidence_id This query parameter is used to specify the unique identifier of the evidential file set.<br><br>The identifier of an evidential file set for a payment dispute is returned under the <strong>evidence</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
     * @param string|null $file_id This query parameter is used to specify the unique identifier of an evidential file. This file must belong to the evidential file set identified through the <strong>evidence_id</strong> query parameter.<br><br>The identifier of each evidential file is returned under the <strong>evidence.files</strong> array in the <a href="/develop/api/sell/fulfillment_api#sell-fulfillment_api-payment_dispute-getpaymentdispute" target="_blank ">getPaymentDispute</a> response.
    */
    public function __construct(?string $evidence_id = null, ?string $file_id = null) {
        $this->evidenceId = $evidence_id;
        $this->fileId = $file_id;
    }

}
