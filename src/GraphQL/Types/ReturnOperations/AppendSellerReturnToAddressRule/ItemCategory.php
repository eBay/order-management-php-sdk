<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule;

readonly class ItemCategory
{
    public function __construct(
        public ?string $categoryId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(categoryId: $data['categoryId'] ?? null);
    }
}
