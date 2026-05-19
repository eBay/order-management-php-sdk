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

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input;

final readonly class DeclineContractCancellationInput
{
    public function __construct(
        public string $cancellationId,
        public ?FulfillmentDetails $fulfillmentDetails = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            cancellationId: $data['cancellationId'],
            fulfillmentDetails: isset($data['fulfillmentDetails'])
                ? FulfillmentDetails::fromArray($data['fulfillmentDetails'])
                : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'cancellationId' => $this->cancellationId,
            'fulfillmentDetails' => $this->fulfillmentDetails?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
