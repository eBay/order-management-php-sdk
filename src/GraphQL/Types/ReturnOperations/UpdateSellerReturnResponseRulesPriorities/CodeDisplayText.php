<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

readonly class CodeDisplayText
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayText = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            code:        $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
        );
    }
}
