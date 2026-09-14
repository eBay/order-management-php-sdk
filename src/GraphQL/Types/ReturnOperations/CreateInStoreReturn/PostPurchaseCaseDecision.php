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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class PostPurchaseCaseDecision
{
    public function __construct(
        public ?string $decidedAt = null,
        public ?string $decisionId = null,
        public ?string $inFavorOf = null,
        public ?string $note = null,
        /** @var PostPurchaseCaseDecisionOutcome[] */
        public array $outcomes = [],
        public ?PostPurchaseCaseDecisionReview $reviewRequest = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            decidedAt: $data['decidedAt'] ?? null,
            decisionId: $data['decisionId'] ?? null,
            inFavorOf: $data['inFavorOf'] ?? null,
            note: $data['note'] ?? null,
            outcomes: array_map(fn($item) => PostPurchaseCaseDecisionOutcome::fromArray($item), $data['outcomes'] ?? []),
            reviewRequest: isset($data['reviewRequest']) ? PostPurchaseCaseDecisionReview::fromArray($data['reviewRequest']) : null,
        );
    }
}
