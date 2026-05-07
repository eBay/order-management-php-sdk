<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

readonly class Input
{
    public function __construct(
        /** @var string[] */
        public array $ruleIds = [],
    ) {}

    public function toArray(): array
    {
        return ['ruleIds' => $this->ruleIds];
    }
}
