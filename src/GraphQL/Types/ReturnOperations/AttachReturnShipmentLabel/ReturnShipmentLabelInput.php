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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel;

readonly class ReturnShipmentLabelInput
{
    public function __construct(
        public string $documentId,
        public ReturnShippingCarrierInput $shippingCarrier,
        public ?string $trackingNumber = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            documentId: $data['documentId'],
            shippingCarrier: ReturnShippingCarrierInput::fromArray($data['shippingCarrier']),
            trackingNumber: $data['trackingNumber'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'documentId'      => $this->documentId,
            'shippingCarrier' => $this->shippingCarrier->toArray(),
        ];
        if ($this->trackingNumber !== null) {
            $data['trackingNumber'] = $this->trackingNumber;
        }
        return $data;
    }
}
