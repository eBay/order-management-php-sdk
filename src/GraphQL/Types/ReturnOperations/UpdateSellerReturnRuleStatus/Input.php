<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus;

readonly class Input
{
    public function __construct(
        public string $ruleId,
        public string $status,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            ruleId: $data['ruleId'],
            status: $data['status'],
        );
    }

    public function toArray(): array
    {
        return [
            'ruleId' => $this->ruleId,
            'status' => $this->status,
        ];
    }
}
