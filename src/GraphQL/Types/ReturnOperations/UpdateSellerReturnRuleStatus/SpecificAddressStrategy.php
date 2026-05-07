<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus;

readonly class SpecificAddressStrategy extends AddressRoutingStrategy
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayText = null,
        public ?ReturnAddress $returnAddress = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnToSpecificAddressStrategy';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:          $data['code'] ?? null,
            displayText:   $data['displayText'] ?? null,
            returnAddress: isset($data['returnAddress'])
                ? ReturnAddress::fromArray($data['returnAddress'])
                : null,
        );
    }
}
