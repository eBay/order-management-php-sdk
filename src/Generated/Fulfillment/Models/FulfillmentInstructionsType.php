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

class FulfillmentInstructionsType extends Enum {
    public const D_I_G_I_T_A_L = "DIGITAL";
    public const P_R_E_P_A_R_E__F_O_R__P_I_C_K_U_P = "PREPARE_FOR_PICKUP";
    public const S_E_L_L_E_R__D_E_F_I_N_E_D = "SELLER_DEFINED";
    public const S_H_I_P__T_O = "SHIP_TO";
    public const F_U_L_F_I_L_L_E_D__B_Y__E_B_A_Y = "FULFILLED_BY_EBAY";
}
