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

class PaymentMethodTypeEnum extends Enum {
    public const C_R_E_D_I_T__C_A_R_D = "CREDIT_CARD";
    public const P_A_Y_P_A_L = "PAYPAL";
    public const C_A_S_H_I_E_R__C_H_E_C_K = "CASHIER_CHECK";
    public const P_E_R_S_O_N_A_L__C_H_E_C_K = "PERSONAL_CHECK";
    public const C_A_S_H__O_N__P_I_C_K_U_P = "CASH_ON_PICKUP";
    public const E_F_T = "EFT";
    public const E_B_A_Y = "EBAY";
    public const E_S_C_R_O_W = "ESCROW";
}
