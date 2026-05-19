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

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds;

readonly class ItemCommitmentState
{
    public function __construct(
        private string $typename,
        public ?string $label = null,
        public ?string $cancelledAt = null,
        public ?string $reason = null,
        public ?FundingState $fundingState = null,
        public ?FulfillmentState $fulfillmentState = null,
        public ?CancelState $cancelState = null,
        public ?ReturnState $returnState = null,
    ) {}

    public function getTypename(): string
    {
        return $this->typename;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            typename: $data['__typename'] ?? 'Unknown',
            label: $data['label'] ?? null,
            cancelledAt: $data['cancelledAt'] ?? null,
            reason: $data['reason'] ?? null,
            fundingState: isset($data['fundingState']) ? FundingState::fromArray($data['fundingState']) : null,
            fulfillmentState: isset($data['fulfillmentState']) ? FulfillmentState::fromArray($data['fulfillmentState']) : null,
            cancelState: isset($data['cancelState']) ? CancelState::fromArray($data['cancelState']) : null,
            returnState: isset($data['returnState']) ? ReturnState::fromArray($data['returnState']) : null,
        );
    }
}
