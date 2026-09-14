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

namespace EBay\OrderManagement\Generated\PostOrderApi\Models;

use Microsoft\Kiota\Abstractions\Enum;

class DecisionEnum extends Enum {
    public const P_R_O_V_I_D_E__R_M_A = "PROVIDE_RMA";
    public const A_P_P_R_O_V_E = "APPROVE";
    public const A_P_P_R_O_V_E__W_I_T_H_O_U_T__E_B_A_Y__L_A_B_E_L = "APPROVE_WITHOUT_EBAY_LABEL";
    public const D_E_C_L_I_N_E = "DECLINE";
    public const O_F_F_E_R__R_E_T_U_R_N = "OFFER_RETURN";
    public const O_F_F_E_R__R_E_T_U_R_N__W_I_T_H_O_U_T__L_A_B_E_L = "OFFER_RETURN_WITHOUT_LABEL";
    public const O_F_F_E_R__P_A_R_T_I_A_L__R_E_F_U_N_D = "OFFER_PARTIAL_REFUND";
    public const A_C_C_E_P_T__P_A_R_T_I_A_L__R_E_F_U_N_D = "ACCEPT_PARTIAL_REFUND";
    public const D_E_C_L_I_N_E__P_A_R_T_I_A_L__R_E_F_U_N_D = "DECLINE_PARTIAL_REFUND";
    public const O_F_F_E_R__R_E_P_L_A_C_E_M_E_N_T = "OFFER_REPLACEMENT";
    public const A_C_C_E_P_T__R_E_P_L_A_C_E_M_E_N_T__O_F_F_E_R = "ACCEPT_REPLACEMENT_OFFER";
    public const D_E_C_L_I_N_E__R_E_P_L_A_C_E_M_E_N_T__O_F_F_E_R = "DECLINE_REPLACEMENT_OFFER";
    public const U_N_K_N_O_W_N = "UNKNOWN";
}
