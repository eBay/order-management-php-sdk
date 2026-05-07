<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class AddressRequiredError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?CodeDisplayText $addressRoutingStrategy = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnToAddressRequiredError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:              $data['errorCode'] ?? null,
            errorMessage:           $data['errorMessage'] ?? null,
            addressRoutingStrategy: isset($data['addressRoutingStrategy'])
                ? CodeDisplayText::fromArray($data['addressRoutingStrategy'])
                : null,
        );
    }
}
