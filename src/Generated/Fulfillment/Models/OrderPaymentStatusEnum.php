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

class OrderPaymentStatusEnum extends Enum {
    public const F_A_I_L_E_D = "FAILED";
    public const F_U_L_L_Y__R_E_F_U_N_D_E_D = "FULLY_REFUNDED";
    public const P_A_I_D = "PAID";
    public const P_A_R_T_I_A_L_L_Y__R_E_F_U_N_D_E_D = "PARTIALLY_REFUNDED";
    public const P_E_N_D_I_N_G = "PENDING";
}
