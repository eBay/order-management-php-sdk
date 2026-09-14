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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn;

/**
 * This method is used to create a return request on behalf of the buyer. If you are converting a return request draft into an actual return request, you must include the <b>draftId</b> field in the request. Whether you are creating a return request directly, or converting a return request draft into a return request, you must include values for the <b>itemId</b>, <b>transactionId</b>, <b>reason</b>, <b>returnQuantity</b>, and <b>type</b> fields.<p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>If the <b>fieldgroups</b> query parameter is set to <code>FULL</code>, the response may also include provisional refund information under <b>detail.detail.refundInfo.provisionalRefund</b>, since the full response uses the same return detail type returned by the <b>Get Return</b> call.</span></p><br>
*/
class ReturnRequestBuilderPostQueryParameters 
{
    /**
     * @var string|null $fieldgroups The <b>fieldgroups</b> query parameter is used to control the detail level that is returned in the response. One of the values defined in the <a href="types/GetReturnFieldGroupEnum.html">GetReturnFieldGroupEnum</a> type definition must be used here. If this query parameter is not included in the request, its value defaults to <code>NONE</code>, which means that only the <b>returnId</b> value for the newly-created return request will be in the response.
    */
    public ?string $fieldgroups = null;
    
    /**
     * Instantiates a new ReturnRequestBuilderPostQueryParameters and sets the default values.
     * @param string|null $fieldgroups The <b>fieldgroups</b> query parameter is used to control the detail level that is returned in the response. One of the values defined in the <a href="types/GetReturnFieldGroupEnum.html">GetReturnFieldGroupEnum</a> type definition must be used here. If this query parameter is not included in the request, its value defaults to <code>NONE</code>, which means that only the <b>returnId</b> value for the newly-created return request will be in the response.
    */
    public function __construct(?string $fieldgroups = null) {
        $this->fieldgroups = $fieldgroups;
    }

}
