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

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund;

readonly class ItemNotReceivedInquiry
{
    /**
     * @param string[] $inquirers
     * @param InquiryLineItem[] $lineItems
     * @param Refund[] $refunds
     */
    public function __construct(
        public ?string $__typename = null,
        public ?string $inquiryId = null,
        public ?InquiryStatus $status = null,
        public ?string $createdAt = null,
        public ?string $closedAt = null,
        public ?string $initiator = null,
        public ?string $responder = null,
        public array $inquirers = [],
        public array $lineItems = [],
        public ?SellerAvailableActions $sellerAvailableActions = null,
        public array $refunds = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            inquiryId: $data['inquiryId'] ?? null,
            status: isset($data['status']) ? InquiryStatus::fromArray($data['status']) : null,
            createdAt: $data['createdAt'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            initiator: $data['initiator'] ?? null,
            responder: $data['responder'] ?? null,
            inquirers: $data['inquirers'] ?? [],
            lineItems: array_map(
                fn(array $li) => InquiryLineItem::fromArray($li),
                $data['lineItems'] ?? [],
            ),
            sellerAvailableActions: isset($data['sellerAvailableActions'])
                ? SellerAvailableActions::fromArray($data['sellerAvailableActions'])
                : null,
            refunds: array_map(
                fn(array $r) => Refund::fromArray($r),
                $data['refunds'] ?? [],
            ),
        );
    }
}
