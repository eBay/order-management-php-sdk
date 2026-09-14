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

class ActivityEnum extends Enum {
    public const D_I_S_P_U_T_E__O_P_E_N_E_D = "DISPUTE_OPENED";
    public const A_D_D_I_T_I_O_N_A_L__E_V_I_D_E_N_C_E__R_E_Q_U_E_S_T = "ADDITIONAL_EVIDENCE_REQUEST";
    public const E_V_I_D_E_N_C_E__P_R_O_V_I_D_E_D = "EVIDENCE_PROVIDED";
    public const E_V_I_D_E_N_C_E__R_E_Q_U_E_S_T__O_V_E_R_D_U_E = "EVIDENCE_REQUEST_OVERDUE";
    public const D_E_F_E_N_C_E__E_X_E_C_U_T_E_D = "DEFENCE_EXECUTED";
    public const D_I_S_P_U_T_E__C_L_O_S_E_D = "DISPUTE_CLOSED";
    public const S_E_L_L_E_R__A_C_C_E_P_T = "SELLER_ACCEPT";
    public const S_E_L_L_E_R__A_C_C_E_P_T__W_I_T_H__R_E_T_U_R_N = "SELLER_ACCEPT_WITH_RETURN";
    public const S_E_L_L_E_R__C_O_N_T_E_S_T = "SELLER_CONTEST";
    public const D_I_S_P_U_T_E__U_P_D_A_T_E_D = "DISPUTE_UPDATED";
    public const S_E_L_L_E_R__R_E_S_P_O_N_S_E__O_V_E_R_D_U_E = "SELLER_RESPONSE_OVERDUE";
    public const D_I_S_P_U_T_E__R_E_O_P_E_N_E_D = "DISPUTE_REOPENED";
    public const D_I_S_P_U_T_E__R_E_V_E_R_S_E_D = "DISPUTE_REVERSED";
    public const A_P_P_E_A_L__D_E_N_I_E_D = "APPEAL_DENIED";
    public const A_P_P_E_A_L__G_R_A_N_T_E_D = "APPEAL_GRANTED";
}
