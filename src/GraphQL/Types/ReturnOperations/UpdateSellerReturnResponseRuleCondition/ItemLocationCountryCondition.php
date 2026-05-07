<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ItemLocationCountryCondition extends RuleCondition
{
    public function __construct(
        /** @var string[] */
        public array $itemLocationCountries = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnItemLocationCountryCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemLocationCountries: $data['itemLocationCountries'] ?? [],
        );
    }
}
