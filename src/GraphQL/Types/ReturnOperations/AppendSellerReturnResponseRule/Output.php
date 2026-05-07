<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'ReturnResponseRule'              => ReturnResponseRule::fromArray($data),
            'ReturnRuleLimitExceededError'    => LimitExceededError::fromArray($data),
            'ReturnRuleInvalidConditionsError' => InvalidConditionsError::fromArray($data),
            'ReturnRuleNameError'             => NameError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
