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

readonly class Input
{
    public function __construct(
        public ?InitialPageInput $initialPage = null,
        public ?PageInfoInput $pageInfo = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            initialPage: isset($data['initialPage']) ? InitialPageInput::fromArray($data['initialPage']) : null,
            pageInfo: isset($data['pageInfo']) ? PageInfoInput::fromArray($data['pageInfo']) : null,
        );
    }

    public function toArray(): array
    {
        $arr = [];
        if ($this->initialPage !== null) {
            $arr['initialPage'] = $this->initialPage->toArray();
        }
        if ($this->pageInfo !== null) {
            $arr['pageInfo'] = $this->pageInfo->toArray();
        }

        return $arr;
    }
}
