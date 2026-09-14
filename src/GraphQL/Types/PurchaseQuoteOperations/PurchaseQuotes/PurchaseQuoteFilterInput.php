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

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotes;

readonly class PurchaseQuoteFilterInput
{
    public function __construct(
        public bool $includeActive,
        public bool $includeCancelled,
        public bool $includeCompleted,
        public bool $includeInvalid,
        public bool $includeLocked,
        public bool $includeRequested,
        public ?string $listingId = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            includeActive: $data['includeActive'],
            includeCancelled: $data['includeCancelled'],
            includeCompleted: $data['includeCompleted'],
            includeInvalid: $data['includeInvalid'],
            includeLocked: $data['includeLocked'],
            includeRequested: $data['includeRequested'],
            listingId: $data['listingId'] ?? null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'includeActive' => $this->includeActive,
                'includeCancelled' => $this->includeCancelled,
                'includeCompleted' => $this->includeCompleted,
                'includeInvalid' => $this->includeInvalid,
                'includeLocked' => $this->includeLocked,
                'includeRequested' => $this->includeRequested,
                'listingId' => $this->listingId,
            ],
            static fn($value) => $value !== null,
        );
    }
}
