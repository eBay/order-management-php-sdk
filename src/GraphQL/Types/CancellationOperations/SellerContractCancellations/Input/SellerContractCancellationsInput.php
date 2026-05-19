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

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input;

final class SellerContractCancellationsInput
{
    public function __construct(
        public readonly ?InitialPageInput $initialPage = null,
        public readonly ?PageInfoInput $pageInfo = null,
    ) {
    }

    public static function fromArray(array $data): self
    {
        return new self(
            initialPage: isset($data['initialPage']) ? InitialPageInput::fromArray($data['initialPage']) : null,
            pageInfo: isset($data['pageInfo']) ? PageInfoInput::fromArray($data['pageInfo']) : null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'initialPage' => $this->initialPage?->toArray(),
            'pageInfo' => $this->pageInfo?->toArray(),
        ], static fn($v) => $v !== null);
    }
}
