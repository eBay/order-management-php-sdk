<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus;

readonly class Input
{
    public function __construct(
        public string $ruleId,
        public string $statusCode,
    ) {}

    public function toArray(): array
    {
        return [
            'ruleId'     => $this->ruleId,
            'statusCode' => $this->statusCode,
        ];
    }
}
