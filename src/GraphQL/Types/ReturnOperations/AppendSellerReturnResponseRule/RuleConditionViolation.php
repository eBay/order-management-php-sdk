<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

readonly class RuleConditionViolation
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $code = null,
        public ?string $displayMessage = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename:     $data['__typename'] ?? null,
            code:           $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
        );
    }
}
