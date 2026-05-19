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

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class Input
{
    public function __construct(
        public string $name,
        public AddressRouteInput $addressRoute,
        public ?ConditionSetInput $conditionSet = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            name:         $data['name'],
            addressRoute: AddressRouteInput::fromArray($data['addressRoute']),
            conditionSet: isset($data['conditionSet'])
                ? ConditionSetInput::fromArray($data['conditionSet'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'name'         => $this->name,
            'addressRoute' => $this->addressRoute->toArray(),
        ];
        if ($this->conditionSet !== null) {
            $data['conditionSet'] = $this->conditionSet->toArray();
        }
        return $data;
    }
}
