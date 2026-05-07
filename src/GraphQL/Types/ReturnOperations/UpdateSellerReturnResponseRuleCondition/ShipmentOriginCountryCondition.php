<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition;

readonly class ShipmentOriginCountryCondition extends RuleCondition
{
    public function __construct(
        /** @var string[] */
        public array $returnShipmentOriginCountries = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnShipmentOriginCountryCondition';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            returnShipmentOriginCountries: $data['returnShipmentOriginCountries'] ?? [],
        );
    }
}
