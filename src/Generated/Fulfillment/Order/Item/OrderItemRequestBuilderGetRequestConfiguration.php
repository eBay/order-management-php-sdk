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

namespace EBay\OrderManagement\Generated\Fulfillment\Order\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrderItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrderItemRequestBuilderGetQueryParameters.
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><strong>Note:</strong> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
     * @return OrderItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $fieldGroups = null): OrderItemRequestBuilderGetQueryParameters {
        return new OrderItemRequestBuilderGetQueryParameters($fieldGroups);
    }

}
