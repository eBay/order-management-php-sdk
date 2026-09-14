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

class DisputeReasonEnum extends Enum {
    public const T_R_A_N_S_A_C_T_I_O_N__I_S_S_U_E = "TRANSACTION_ISSUE";
    public const F_R_A_U_D = "FRAUD";
    public const I_T_E_M__N_O_T__R_E_C_E_I_V_E_D = "ITEM_NOT_RECEIVED";
    public const S_I_G_N_I_F_I_C_A_N_T_L_Y__N_O_T__A_S__D_E_S_C_R_I_B_E_D = "SIGNIFICANTLY_NOT_AS_DESCRIBED";
    public const C_R_E_D_I_T__N_O_T__P_R_O_C_E_S_S_E_D = "CREDIT_NOT_PROCESSED";
    public const C_O_U_N_T_E_R_F_E_I_T = "COUNTERFEIT";
    public const D_U_P_L_I_C_A_T_E__A_M_O_U_N_T = "DUPLICATE_AMOUNT";
    public const I_N_C_O_R_R_E_C_T__A_M_O_U_N_T = "INCORRECT_AMOUNT";
    public const C_A_N_C_E_L_L_A_T_I_O_N = "CANCELLATION";
    public const R_E_T_U_R_N__R_E_F_U_N_D__N_O_T__P_R_O_C_E_S_S_E_D = "RETURN_REFUND_NOT_PROCESSED";
    public const A_U_T_H_O_R_I_Z_A_T_I_O_N__F_A_I_L_E_D = "AUTHORIZATION_FAILED";
}
