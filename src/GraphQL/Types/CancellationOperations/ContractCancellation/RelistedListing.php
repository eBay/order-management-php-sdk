<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation;

readonly class RelistedListing
{
    public function __construct(
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            listingId: $data['listingId'] ?? null,
        );
    }
}
