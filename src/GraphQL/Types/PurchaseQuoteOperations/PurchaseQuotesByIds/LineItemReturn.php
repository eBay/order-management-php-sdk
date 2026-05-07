<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds;

readonly class LineItemReturn
{
    public function __construct(
        public ?ReturnRef $return = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            return: isset($data['return']) ? ReturnRef::fromArray($data['return']) : null,
        );
    }
}
