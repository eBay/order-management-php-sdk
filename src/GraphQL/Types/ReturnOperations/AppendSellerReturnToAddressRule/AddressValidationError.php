<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class AddressValidationError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?string $invalidAddressId = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnToAddressValidationError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:        $data['errorCode'] ?? null,
            errorMessage:     $data['errorMessage'] ?? null,
            invalidAddressId: $data['invalidAddressId'] ?? null,
        );
    }
}
