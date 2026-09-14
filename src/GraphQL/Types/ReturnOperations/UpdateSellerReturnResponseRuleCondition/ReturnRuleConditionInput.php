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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ReturnRuleConditionInput
{
    public function __construct(
        public ?ReturnItemCategoryConditionInput $categoryCondition = null,
        public ?ReturnItemLocationCountryConditionInput $itemLocationCountriesCondition = null,
        public ?ReturnListingGroupConditionInput $listingGroupCondition = null,
        public ?ReturnRefundRangeConditionInput $refundRangeCondition = null,
        public ?ReturnReasonConditionInput $returnReasonCondition = null,
        public ?ReturnShipmentOriginCountryConditionInput $returnShipmentOriginCountriesCondition = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            categoryCondition: isset($data['categoryCondition']) ? ReturnItemCategoryConditionInput::fromArray($data['categoryCondition']) : null,
            itemLocationCountriesCondition: isset($data['itemLocationCountriesCondition']) ? ReturnItemLocationCountryConditionInput::fromArray($data['itemLocationCountriesCondition']) : null,
            listingGroupCondition: isset($data['listingGroupCondition']) ? ReturnListingGroupConditionInput::fromArray($data['listingGroupCondition']) : null,
            refundRangeCondition: isset($data['refundRangeCondition']) ? ReturnRefundRangeConditionInput::fromArray($data['refundRangeCondition']) : null,
            returnReasonCondition: isset($data['returnReasonCondition']) ? ReturnReasonConditionInput::fromArray($data['returnReasonCondition']) : null,
            returnShipmentOriginCountriesCondition: isset($data['returnShipmentOriginCountriesCondition']) ? ReturnShipmentOriginCountryConditionInput::fromArray($data['returnShipmentOriginCountriesCondition']) : null,
        );
    }

    /** @return array<string, mixed> */
    public function toArray(): array
    {
        return array_filter(
            [
                'categoryCondition' => $this->categoryCondition !== null ? (object)$this->categoryCondition->toArray() : null,
                'itemLocationCountriesCondition' => $this->itemLocationCountriesCondition !== null ? (object)$this->itemLocationCountriesCondition->toArray() : null,
                'listingGroupCondition' => $this->listingGroupCondition !== null ? (object)$this->listingGroupCondition->toArray() : null,
                'refundRangeCondition' => $this->refundRangeCondition !== null ? (object)$this->refundRangeCondition->toArray() : null,
                'returnReasonCondition' => $this->returnReasonCondition !== null ? (object)$this->returnReasonCondition->toArray() : null,
                'returnShipmentOriginCountriesCondition' => $this->returnShipmentOriginCountriesCondition !== null ? (object)$this->returnShipmentOriginCountriesCondition->toArray() : null,
            ],
            static fn($value) => $value !== null,
        );
    }
}
