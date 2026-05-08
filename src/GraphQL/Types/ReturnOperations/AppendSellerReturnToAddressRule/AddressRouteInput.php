<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class AddressRouteInput
{
    public function __construct(
        public string $returnToAddressRoutingStrategy,
        public ?string $addressId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            returnToAddressRoutingStrategy: $data['returnToAddressRoutingStrategy'],
            addressId:                      $data['addressId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $data = ['returnToAddressRoutingStrategy' => $this->returnToAddressRoutingStrategy];
        if ($this->addressId !== null) {
            $data['addressId'] = $this->addressId;
        }
        return $data;
    }
}
