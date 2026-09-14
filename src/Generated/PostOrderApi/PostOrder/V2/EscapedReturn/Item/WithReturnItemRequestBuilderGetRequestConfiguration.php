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

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithReturnItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithReturnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithReturnItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithReturnItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithReturnItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithReturnItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithReturnItemRequestBuilderGetQueryParameters.
     * @param string|null $fieldgroups The <b>fieldgroups</b> query parameter is used to control whether the response has full details on the return request, or just a summarized set of information. One of the values defined in the <a href="types/GetReturnFieldGroupEnum.html">GetReturnFieldGroupEnum</a> type definition must be used here. If this query parameter is not included in the request, its value defaults to <code>FULL</code>, which means that only the <b>detail</b> container will get returned for the return request, and not the <b>summary</b> container.
     * @return WithReturnItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldgroups = null): WithReturnItemRequestBuilderGetQueryParameters {
        return new WithReturnItemRequestBuilderGetQueryParameters($fieldgroups);
    }

}
