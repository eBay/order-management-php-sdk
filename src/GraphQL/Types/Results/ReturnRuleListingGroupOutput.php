<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for returnRuleListingGroup query and listing-group mutations.
 * The success case returns ReturnRuleListingGroup; errors are raw arrays.
 */
readonly class ReturnRuleListingGroupOutput
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $returnRuleListingGroupId = null,
        public ?string $groupName = null,
        public array   $listings = [],
        public ?PaginationOutput $pagination = null,
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'ReturnRuleListingGroup') {
            return new self(
                __typename:                $typename,
                returnRuleListingGroupId: $data['returnRuleListingGroupId'] ?? null,
                groupName:               $data['groupName'] ?? null,
                listings:                $data['listings'] ?? [],
                pagination:              isset($data['pagination'])
                    ? PaginationOutput::fromArray($data['pagination'])
                    : null,
            );
        }

        return new self(
            __typename: $typename,
            error:    $data,
        );
    }
}
