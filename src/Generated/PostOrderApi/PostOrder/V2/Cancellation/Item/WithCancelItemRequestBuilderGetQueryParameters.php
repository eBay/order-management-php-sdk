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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\Cancellation\Item;

/**
 * This method retrieves the details of a specific cancellation request.  <br/><br/>The response from this method depends on the value set for the <b>fieldgroups</b> query parameter. If the value of <b>fieldgroups</b> is set to <code>SUMMARY</code>, the response payload is identical to the payload retrieved in the <b>GET /post-order/v2/cancellation/search</b> method. If you set the value of <b>fieldgroups</b> to <code>FULL</code>, the response includes a history of each cancellation request and the list of each line item in the order.<br>
*/
class WithCancelItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $fieldgroups The value set in this query parameter controls the level of detail that is returned in the response. One of the values defined in the <a href="/devzone/post-order/types/GetCancelFieldGroup.html">GetCancelFieldGroup</a> type definition must be used in this query parameter. <br/><br/> <b>Default:</b> <code>FULL</code>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/can:GetCancelFieldGroup
    */
    public ?string $fieldgroups = null;
    
    /**
     * Instantiates a new WithCancelItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $fieldgroups The value set in this query parameter controls the level of detail that is returned in the response. One of the values defined in the <a href="/devzone/post-order/types/GetCancelFieldGroup.html">GetCancelFieldGroup</a> type definition must be used in this query parameter. <br/><br/> <b>Default:</b> <code>FULL</code>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/can:GetCancelFieldGroup
    */
    public function __construct(?string $fieldgroups = null) {
        $this->fieldgroups = $fieldgroups;
    }

}
