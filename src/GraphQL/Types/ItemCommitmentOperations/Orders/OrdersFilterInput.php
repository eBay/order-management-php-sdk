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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrdersFilterInput
{
    public function __construct(
        public bool $includeAbandoned,
        public bool $includeCancelled,
        public bool $includeConfirmed,
        public bool $includePlaced,
        public ?bool $fulfilled = null,
        public ?bool $funded = null,
        public ?string $listingId = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            fulfilled: $data['fulfilled'] ?? null,
            funded: $data['funded'] ?? null,
            includeAbandoned: $data['includeAbandoned'],
            includeCancelled: $data['includeCancelled'],
            includeConfirmed: $data['includeConfirmed'],
            includePlaced: $data['includePlaced'],
            listingId: $data['listingId'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'fulfilled' => $this->fulfilled,
                'funded' => $this->funded,
                'includeAbandoned' => $this->includeAbandoned,
                'includeCancelled' => $this->includeCancelled,
                'includeConfirmed' => $this->includeConfirmed,
                'includePlaced' => $this->includePlaced,
                'listingId' => $this->listingId,
            ],
            static fn($value) => $value !== null,
        );
    }
}
