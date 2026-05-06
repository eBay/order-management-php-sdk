<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for updateSellerReturnResponseRulesPriorities mutation.
 * Success has a list of returnResponseRules; errors are raw arrays.
 */
readonly class UpdateSellerReturnResponseRulesPrioritiesOutput
{
    public function __construct(
        public ?string $__typename = null,
        public array   $returnResponseRules = [],
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'UpdateSellerReturnResponseRulesPrioritiesSuccess') {
            return new self(
                __typename:            $typename,
                returnResponseRules: $data['returnResponseRules'] ?? [],
            );
        }

        return new self(
            __typename: $typename,
            error:    $data,
        );
    }
}
