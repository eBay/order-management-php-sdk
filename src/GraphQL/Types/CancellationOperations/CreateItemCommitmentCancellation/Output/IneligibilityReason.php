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

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class IneligibilityReason
{
    private ?string $__typename = null;
    public ?string $code = null;
    public ?string $displayMessage = null;
    public ?string $itemCommitmentId = null;
    /** @var AvailableReason[] */
    public array $availableReasons = [];

    public function getTypename(): string
    {
        return $this->__typename ?? '';
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->__typename = $data['__typename'] ?? null;
        $instance->code = $data['code'] ?? null;
        $instance->displayMessage = $data['displayMessage'] ?? null;
        $instance->itemCommitmentId = $data['itemCommitmentId'] ?? null;
        $instance->availableReasons = array_map(
            static fn($r) => AvailableReason::fromArray($r),
            $data['availableReasons'] ?? []
        );
        return $instance;
    }
}
