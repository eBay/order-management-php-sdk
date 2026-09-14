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

class LabelActionEnum extends Enum {
    public const N_O__L_A_B_E_L = "NO_LABEL";
    public const U_P_L_O_A_D__L_A_B_E_L = "UPLOAD_LABEL";
    public const M_A_R_K__A_S__S_E_N_T = "MARK_AS_SENT";
    public const E_B_A_Y__L_A_B_E_L = "EBAY_LABEL";
    public const P_U_R_C_H_A_S_E__L_A_B_E_L = "PURCHASE_LABEL";
    public const A_U__L_A_B_E_L = "AU_LABEL";
    public const U_N_K_N_O_W_N = "UNKNOWN";
}
