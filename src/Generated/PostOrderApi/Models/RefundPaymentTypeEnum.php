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

class RefundPaymentTypeEnum extends Enum {
    public const I_N_S_T_A_N_T__R_E_F_U_N_D = "INSTANT_REFUND";
    public const E_C_H_E_C_K = "ECHECK";
    public const P_A_Y_O_U_T = "PAYOUT";
    public const I_N_T_E_R_M_E_D_I_A_T_E_D__R_E_F_U_N_D = "INTERMEDIATED_REFUND";
    public const O_T_H_E_R = "OTHER";
}
