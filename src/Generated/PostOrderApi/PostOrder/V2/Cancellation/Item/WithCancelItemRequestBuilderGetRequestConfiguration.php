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

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithCancelItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithCancelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithCancelItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithCancelItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithCancelItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithCancelItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithCancelItemRequestBuilderGetQueryParameters.
     * @param string|null $fieldgroups The value set in this query parameter controls the level of detail that is returned in the response. One of the values defined in the <a href="/devzone/post-order/types/GetCancelFieldGroup.html">GetCancelFieldGroup</a> type definition must be used in this query parameter. <br/><br/> <b>Default:</b> <code>FULL</code>. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/post-order/post-order/types/can:GetCancelFieldGroup
     * @return WithCancelItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldgroups = null): WithCancelItemRequestBuilderGetQueryParameters {
        return new WithCancelItemRequestBuilderGetQueryParameters($fieldgroups);
    }

}
