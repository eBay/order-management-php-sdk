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

class BuyerCloseReasonEnum extends Enum {
    public const I_T_E_M__A_R_R_I_V_E_D = "ITEM_ARRIVED";
    public const W_O_R_K_E_D__O_U_T__W_I_T_H__S_E_L_L_E_R = "WORKED_OUT_WITH_SELLER";
    public const W_O_U_L_D__R_A_T_H_E_R__K_E_E_P__T_H_E__I_T_E_M = "WOULD_RATHER_KEEP_THE_ITEM";
    public const O_T_H_E_R = "OTHER";
}
