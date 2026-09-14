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

class AppointmentStatusEnum extends Enum {
    public const O_N__H_O_L_D = "ON_HOLD";
    public const C_O_N_F_I_R_M_E_D = "CONFIRMED";
    public const C_A_N_C_E_L_L_E_D = "CANCELLED";
    public const F_U_L_F_I_L_L_E_D = "FULFILLED";
}
