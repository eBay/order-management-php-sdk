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

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class OrderInquiry
{
    public function __construct(
        public ?string $closedAt = null,
        public ?string $createdAt = null,
        public ?string $initiator = null,
        /** @var array<int, mixed> */
        public array $inquirers = [],
        public ?string $inquiryId = null,
        /** @var OrderInquiryInformation[] */
        public array $providedInformation = [],
        /** @var OrderInquiryInformationRequested[] */
        public array $requestedInformation = [],
        public ?string $responder = null,
        public ?OrderInquiryStatus $status = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            closedAt: $data['closedAt'] ?? null,
            createdAt: $data['createdAt'] ?? null,
            initiator: $data['initiator'] ?? null,
            inquirers: $data['inquirers'] ?? [],
            inquiryId: $data['inquiryId'] ?? null,
            providedInformation: array_map(fn($item) => OrderInquiryInformation::fromArray($item), $data['providedInformation'] ?? []),
            requestedInformation: array_map(fn($item) => OrderInquiryInformationRequested::fromArray($item), $data['requestedInformation'] ?? []),
            responder: $data['responder'] ?? null,
            status: isset($data['status']) ? OrderInquiryStatus::fromArray($data['status']) : null,
        );
    }
}
