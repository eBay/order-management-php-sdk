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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags;

readonly class UpdateItemCommitmentTagInput
{
    /**
     * @param string[] $tags
     */
    public function __construct(
        public string $action,
        public string $itemCommitment,
        public array $tags,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            action: $data['action'],
            itemCommitment: $data['itemCommitment'],
            tags: $data['tags'],
        );
    }

    public function toArray(): array
    {
        return [
            'action'          => $this->action,
            'itemCommitment'  => $this->itemCommitment,
            'tags'            => $this->tags,
        ];
    }
}
