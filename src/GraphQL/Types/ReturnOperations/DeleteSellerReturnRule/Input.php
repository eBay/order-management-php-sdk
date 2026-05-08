<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule;

readonly class Input
{
    public function __construct(
        public string $ruleId,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ruleId: $data['ruleId'],
        );
    }

    public function toArray(): array
    {
        return ['ruleId' => $this->ruleId];
    }
}
