<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class GenericIneligibilityReason extends IneligibilityReason
{
    public function __construct(
        private string $typename,
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?OrderLineItemRef $orderLineItem = null,
    ) {}

    public function getTypename(): string
    {
        return $this->typename;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            typename:      $data['__typename'] ?? 'UnknownIneligibilityReason',
            code:          $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            orderLineItem: isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem'])
                : null,
        );
    }
}
