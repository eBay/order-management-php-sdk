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
        public bool $includeAbandoned = false,
        public bool $includeCancelled = false,
        public bool $includeConfirmed = true,
        public bool $includePlaced = false,
        public ?bool $fulfilled = null,
        public ?bool $funded = null,
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            includeAbandoned: (bool)($data['includeAbandoned'] ?? false),
            includeCancelled: (bool)($data['includeCancelled'] ?? false),
            includeConfirmed: (bool)($data['includeConfirmed'] ?? true),
            includePlaced: (bool)($data['includePlaced'] ?? false),
            fulfilled: isset($data['fulfilled']) ? (bool)$data['fulfilled'] : null,
            funded: isset($data['funded']) ? (bool)$data['funded'] : null,
            listingId: $data['listingId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'includeAbandoned' => $this->includeAbandoned,
            'includeCancelled' => $this->includeCancelled,
            'includeConfirmed' => $this->includeConfirmed,
            'includePlaced'    => $this->includePlaced,
        ];

        if ($this->fulfilled !== null) {
            $result['fulfilled'] = $this->fulfilled;
        }

        if ($this->funded !== null) {
            $result['funded'] = $this->funded;
        }

        if ($this->listingId !== null) {
            $result['listingId'] = $this->listingId;
        }

        return $result;
    }
}
