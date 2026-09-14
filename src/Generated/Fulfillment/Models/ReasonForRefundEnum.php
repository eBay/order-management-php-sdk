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

class ReasonForRefundEnum extends Enum {
    public const B_U_Y_E_R__C_A_N_C_E_L = "BUYER_CANCEL";
    public const S_E_L_L_E_R__C_A_N_C_E_L = "SELLER_CANCEL";
    public const I_T_E_M__N_O_T__R_E_C_E_I_V_E_D = "ITEM_NOT_RECEIVED";
    public const B_U_Y_E_R__R_E_T_U_R_N = "BUYER_RETURN";
    public const I_T_E_M__N_O_T__A_S__D_E_S_C_R_I_B_E_D = "ITEM_NOT_AS_DESCRIBED";
    public const O_T_H_E_R__A_D_J_U_S_T_M_E_N_T = "OTHER_ADJUSTMENT";
    public const S_H_I_P_P_I_N_G__D_I_S_C_O_U_N_T = "SHIPPING_DISCOUNT";
}
