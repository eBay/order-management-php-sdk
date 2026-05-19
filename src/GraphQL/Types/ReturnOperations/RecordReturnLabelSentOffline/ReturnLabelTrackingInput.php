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

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class ReturnLabelTrackingInput
{
    public function __construct(
        public ReturnShippingCarrierInput $shippingCarrier,
        public string $trackingNumber,
        public ?string $labelSentAt = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            shippingCarrier: ReturnShippingCarrierInput::fromArray($data['shippingCarrier']),
            trackingNumber: $data['trackingNumber'],
            labelSentAt: $data['labelSentAt'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'shippingCarrier' => $this->shippingCarrier->toArray(),
            'trackingNumber'  => $this->trackingNumber,
        ];
        if ($this->labelSentAt !== null) {
            $data['labelSentAt'] = $this->labelSentAt;
        }
        return $data;
    }
}
