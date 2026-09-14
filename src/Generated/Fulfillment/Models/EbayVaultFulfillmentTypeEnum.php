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

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Enum;

class EbayVaultFulfillmentTypeEnum extends Enum {
    public const S_E_L_L_E_R__T_O__V_A_U_L_T = "SELLER_TO_VAULT";
    public const V_A_U_L_T__T_O__V_A_U_L_T = "VAULT_TO_VAULT";
    public const V_A_U_L_T__T_O__B_U_Y_E_R = "VAULT_TO_BUYER";
}
