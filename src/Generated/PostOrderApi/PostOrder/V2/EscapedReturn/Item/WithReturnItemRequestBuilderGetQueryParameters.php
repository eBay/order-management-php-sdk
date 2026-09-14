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

/**
 * Use this method to retrieve information on a specific return request. The user can retrieve either the full details or a summary of the return. When applicable, the full response may also include provisional refund state under <b>detail.refundInfo.provisionalRefund</b> to indicate whether a provisional refund was provided before return creation and whether that refund was later reversed.<br>
*/
class WithReturnItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $fieldgroups The <b>fieldgroups</b> query parameter is used to control whether the response has full details on the return request, or just a summarized set of information. One of the values defined in the <a href="types/GetReturnFieldGroupEnum.html">GetReturnFieldGroupEnum</a> type definition must be used here. If this query parameter is not included in the request, its value defaults to <code>FULL</code>, which means that only the <b>detail</b> container will get returned for the return request, and not the <b>summary</b> container.
    */
    public ?string $fieldgroups = null;
    
    /**
     * Instantiates a new WithReturnItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $fieldgroups The <b>fieldgroups</b> query parameter is used to control whether the response has full details on the return request, or just a summarized set of information. One of the values defined in the <a href="types/GetReturnFieldGroupEnum.html">GetReturnFieldGroupEnum</a> type definition must be used here. If this query parameter is not included in the request, its value defaults to <code>FULL</code>, which means that only the <b>detail</b> container will get returned for the return request, and not the <b>summary</b> container.
    */
    public function __construct(?string $fieldgroups = null) {
        $this->fieldgroups = $fieldgroups;
    }

}
