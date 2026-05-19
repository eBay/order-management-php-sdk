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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class FilterInput
{
    public function __construct(
        public bool $includeAbandoned = false,
        public bool $includeActive = true,
        public bool $includeCancelled = false,
        public bool $includeCompleted = false,
        public bool $includeLocked = false,
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            includeAbandoned: $data['includeAbandoned'] ?? false,
            includeActive: $data['includeActive'] ?? true,
            includeCancelled: $data['includeCancelled'] ?? false,
            includeCompleted: $data['includeCompleted'] ?? false,
            includeLocked: $data['includeLocked'] ?? false,
            listingId: $data['listingId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'includeAbandoned' => $this->includeAbandoned,
            'includeActive' => $this->includeActive,
            'includeCancelled' => $this->includeCancelled,
            'includeCompleted' => $this->includeCompleted,
            'includeLocked' => $this->includeLocked,
        ];
        if ($this->listingId !== null) {
            $result['listingId'] = $this->listingId;
        }
        return $result;
    }
}
