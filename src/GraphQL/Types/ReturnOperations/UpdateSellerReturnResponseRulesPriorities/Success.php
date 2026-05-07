<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

readonly class Success extends Output
{
    public function __construct(
        /** @var ReturnResponseRule[] */
        public array $returnResponseRules = [],
    ) {}

    public function getTypename(): string
    {
        return 'UpdateSellerReturnResponseRulesPrioritiesSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnResponseRules: array_map(
                fn(array $r) => ReturnResponseRule::fromArray($r),
                $data['returnResponseRules'] ?? []
            ),
        );
    }
}
