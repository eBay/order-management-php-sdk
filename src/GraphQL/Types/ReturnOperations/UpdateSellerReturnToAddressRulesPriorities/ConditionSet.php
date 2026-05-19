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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

/**
 * Minimal ConditionSet — priorities response only fetches __typename of conditions.
 */
readonly class ConditionSet
{
    public function __construct(
        public ?string $operator = null,
        /** @var string[] raw __typename values */
        public array $conditionTypenames = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            operator:           $data['operator'] ?? null,
            conditionTypenames: array_map(
                fn(array $c) => $c['__typename'] ?? '',
                $data['conditions'] ?? []
            ),
        );
    }
}
