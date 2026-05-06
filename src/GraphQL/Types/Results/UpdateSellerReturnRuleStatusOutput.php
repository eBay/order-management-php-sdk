<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for updateSellerReturnRuleStatus mutation.
 * Can return ReturnToAddressRule, ReturnResponseRule, or an error.
 * Complex addressRoutingStrategy stored as raw array.
 */
readonly class UpdateSellerReturnRuleStatusOutput
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $ruleId = null,
        public ?string $name = null,
        public ?int    $priority = null,
        public ?string $statusCode = null,
        public ?array  $addressRoutingStrategy = null,
        public ?string $responseStrategyCode = null,
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if (in_array($typename, ['ReturnToAddressRule', 'ReturnResponseRule'], true)) {
            return new self(
                __typename:              $typename,
                ruleId:                $data['ruleId'] ?? null,
                name:                  $data['name'] ?? null,
                priority:              isset($data['priority']) ? (int) $data['priority'] : null,
                statusCode:            $data['status']['code'] ?? null,
                addressRoutingStrategy: $data['addressRoutingStrategy'] ?? null,
                responseStrategyCode:  $data['responseStrategy']['code'] ?? null,
            );
        }

        return new self(
            __typename: $typename,
            error:    $data,
        );
    }
}
