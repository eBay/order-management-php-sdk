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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class Input
{
    public function __construct(
        public string $groupName,
        /** @var array<int, mixed> */
        public array $listingIds,
        public string $listingMarketplace,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        if (isset($data['input']) && is_array($data['input'])) {
            $data = array_merge($data['input'], $data);
        }
        return new self(
            groupName: $data['groupName'],
            listingIds: $data['listingIds'],
            listingMarketplace: $data['listingMarketplace'],
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return [
                'groupName' => $this->groupName,
                'listingIds' => $this->listingIds,
                'listingMarketplace' => $this->listingMarketplace,
        ];
    }
}
