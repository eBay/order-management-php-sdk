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

namespace EBay\OrderManagement\Generated\PostOrderApi\PostOrder\V2\EscapedReturn\Item\Tracking;

/**
 * This method can be used to retrieve all shipment tracking activity on a specific return request. The information returned includes the date, location, and scan type for each time the shipping package was scanned.<br>
*/
class TrackingRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("carrier_used")
     * @var string|null $carrierUsed The shipping carrier used to to ship the package is passed in through this query parameter.
    */
    public ?string $carrierUsed = null;
    
    /**
     * @QueryParameter("tracking_number")
     * @var string|null $trackingNumber The tracking number of the package is passed in through this query parameter.
    */
    public ?string $trackingNumber = null;
    
    /**
     * Instantiates a new TrackingRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $carrier_used The shipping carrier used to to ship the package is passed in through this query parameter.
     * @param string|null $tracking_number The tracking number of the package is passed in through this query parameter.
    */
    public function __construct(?string $carrier_used = null, ?string $tracking_number = null) {
        $this->carrierUsed = $carrier_used;
        $this->trackingNumber = $tracking_number;
    }

}
