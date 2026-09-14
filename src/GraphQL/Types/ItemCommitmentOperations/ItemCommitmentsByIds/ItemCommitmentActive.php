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

readonly class ItemCommitmentActive
{
    public function __construct(
        public ?string $label = null,
        public PaymentsCompleted|PaymentsFailure|PaymentsInProgress|PaymentsNotStarted|null $fundingState = null,
        public FulfillmentCompleted|FulfillmentInProgress|FulfillmentNotStarted|FulfillmentPartiallyStarted|null $fulfillmentState = null,
        public ContractCancelCompleted|ContractCancelPending|ContractCancelRejected|ContractCancelRequested|null $cancelState = null,
        public ItemCommitmentReturnClosed|ItemCommitmentReturnRequested|null $returnState = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            label: $data['label'] ?? null,
            fundingState: isset($data['fundingState']) ? PaymentsState::fromArray($data['fundingState']) : null,
            fulfillmentState: isset($data['fulfillmentState']) ? LogisticsFulfillmentState::fromArray($data['fulfillmentState']) : null,
            cancelState: isset($data['cancelState']) ? ContractCancelState::fromArray($data['cancelState']) : null,
            returnState: isset($data['returnState']) ? ItemCommitmentReturnState::fromArray($data['returnState']) : null,
        );
    }
}
