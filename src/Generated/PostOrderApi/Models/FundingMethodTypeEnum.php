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

class FundingMethodTypeEnum extends Enum {
    public const C_R_E_D_I_T__C_A_R_D = "CREDIT_CARD";
    public const D_I_R_E_C_T__D_E_B_I_T = "DIRECT_DEBIT";
    public const P_A_Y__U_P_O_N__I_N_V_O_I_C_E = "PAY_UPON_INVOICE";
    public const A_V_A_I_L_A_B_L_E__F_U_N_D_S = "AVAILABLE_FUNDS";
}
