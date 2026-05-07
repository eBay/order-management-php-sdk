<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

readonly class Success extends Output
{
    public function __construct(
        /** @var ReturnToAddressRule[] */
        public array $returnToAddressRules = [],
    ) {}

    public function getTypename(): string
    {
        return 'UpdateSellerReturnToAddressRulesPrioritiesSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnToAddressRules: array_map(
                fn(array $r) => ReturnToAddressRule::fromArray($r),
                $data['returnToAddressRules'] ?? []
            ),
        );
    }
}
