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

readonly class ReturnRuleNameError
{
    public function __construct(
        public ?bool $containsInvalidCharacters = null,
        public ?bool $duplicateRuleName = null,
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?ReturnRuleNameConstraint $nameConstraint = null,
    ) {}

    /** @param array<string, mixed> $data */
    public static function fromArray(array $data): self
    {
        return new self(
            containsInvalidCharacters: $data['containsInvalidCharacters'] ?? null,
            duplicateRuleName: $data['duplicateRuleName'] ?? null,
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            nameConstraint: isset($data['nameConstraint']) ? ReturnRuleNameConstraint::fromArray($data['nameConstraint']) : null,
        );
    }
}
