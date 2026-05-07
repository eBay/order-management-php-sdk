<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class Taxes
{
    public function __construct(
        public ?TaxAddress $taxAddress = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            taxAddress: isset($data['taxAddress']) ? TaxAddress::fromArray($data['taxAddress']) : null,
        );
    }
}
