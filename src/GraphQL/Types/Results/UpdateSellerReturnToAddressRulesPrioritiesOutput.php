<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for updateSellerReturnToAddressRulesPriorities mutation.
 * Success has a list of returnToAddressRules; errors are raw arrays.
 */
readonly class UpdateSellerReturnToAddressRulesPrioritiesOutput
{
    public function __construct(
        public ?string $typename = null,
        public array   $returnToAddressRules = [],
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'UpdateSellerReturnToAddressRulesPrioritiesSuccess') {
            return new self(
                typename:           $typename,
                returnToAddressRules: $data['returnToAddressRules'] ?? [],
            );
        }

        return new self(
            typename: $typename,
            error:    $data,
        );
    }
}
