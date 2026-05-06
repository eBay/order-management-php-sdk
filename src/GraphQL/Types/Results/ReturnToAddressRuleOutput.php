<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for mutations that return ReturnToAddressRule on success.
 * Covers: appendSellerReturnToAddressRule, updateSellerReturnToAddressRuleCondition.
 * Complex addressRoutingStrategy and conditionSet stored as raw arrays.
 */
readonly class ReturnToAddressRuleOutput
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int    $priority = null,
        public ?string $statusCode = null,
        public ?array  $addressRoutingStrategy = null,
        public ?array  $conditionSet = null,
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'ReturnToAddressRule') {
            return new self(
                __typename:              $typename,
                ruleId:                $data['ruleId'] ?? null,
                name:                  $data['name'] ?? null,
                priority:              isset($data['priority']) ? (int) $data['priority'] : null,
                statusCode:            $data['status']['code'] ?? null,
                addressRoutingStrategy: $data['addressRoutingStrategy'] ?? null,
                conditionSet:          $data['conditionSet'] ?? null,
            );
        }

        return new self(
            __typename: $typename,
            error:    $data,
        );
    }
}
