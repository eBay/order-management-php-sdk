<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition;

/**
 * The query fetches code/displayText at the base level plus ReturnToSpecificAddressStrategy.returnAddress.
 * We represent it as a flat struct: common fields + optional returnAddress for the specific-address case.
 */
readonly class AddressRoutingStrategy
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayText = null,
        public ?ReturnAddress $returnAddress = null,
    ) {}

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
