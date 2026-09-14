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

namespace EBay\OrderManagement\Generated\Logistics\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PickupTypeEnum extends Enum {
    public const R_E_G_U_L_A_R__P_I_C_K_U_P = "REGULAR_PICKUP";
    public const S_C_H_E_D_U_L_E_D__P_I_C_K_U_P = "SCHEDULED_PICKUP";
    public const D_R_O_P__O_F_F = "DROP_OFF";
}
