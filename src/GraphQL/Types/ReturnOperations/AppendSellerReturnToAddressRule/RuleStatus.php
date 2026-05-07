<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

/**
 * Represents ReturnRuleStatus union. Concrete types include ReturnRuleDisabledStatus (adds disabledBy).
 * We store all known fields; disabledBy is null for enabled/other statuses.
 */
readonly class RuleStatus
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayText = null,
        public ?string $disabledBy = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            code:        $data['code'] ?? null,
            displayText: $data['displayText'] ?? null,
            disabledBy:  $data['disabledBy'] ?? null,
        );
    }
}
