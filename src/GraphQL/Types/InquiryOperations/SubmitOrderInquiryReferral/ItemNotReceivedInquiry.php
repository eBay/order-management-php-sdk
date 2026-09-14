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

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class ItemNotReceivedInquiry
{
    public function __construct(
        public ?string $inquiryId = null,
        public ?OrderInquiryStatus $status = null,
        public ?string $createdAt = null,
        public ?string $closedAt = null,
        public ?string $initiator = null,
        public ?string $responder = null,
        /** @var array<int, mixed> */
        public array $inquirers = [],
        /** @var OrderInquiryLineItem[] */
        public array $lineItems = [],
        public ?OrderInquiryActions $sellerAvailableActions = null,
        /** @var PostPurchaseCase[] */
        public array $cases = [],
        /** @var Refund[] */
        public array $refunds = [],
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            inquiryId: $data['inquiryId'] ?? null,
            status: isset($data['status']) ? OrderInquiryStatus::fromArray($data['status']) : null,
            createdAt: $data['createdAt'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            initiator: $data['initiator'] ?? null,
            responder: $data['responder'] ?? null,
            inquirers: $data['inquirers'] ?? [],
            lineItems: array_map(fn($item) => OrderInquiryLineItem::fromArray($item), $data['lineItems'] ?? []),
            sellerAvailableActions: isset($data['sellerAvailableActions']) ? OrderInquiryActions::fromArray($data['sellerAvailableActions']) : null,
            cases: array_map(fn($item) => PostPurchaseCase::fromArray($item), $data['cases'] ?? []),
            refunds: array_map(fn($item) => Refund::fromArray($item), $data['refunds'] ?? []),
        );
    }
}
