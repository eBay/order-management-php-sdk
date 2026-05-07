<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule;

readonly class Success extends Output
{
    public function __construct(
        public ?string $ruleId = null,
        public ?string $name = null,
    ) {}

    public function getTypename(): string
    {
        return 'DeleteSellerReturnRuleSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            ruleId: $data['ruleId'] ?? null,
            name:   $data['name'] ?? null,
        );
    }
}
