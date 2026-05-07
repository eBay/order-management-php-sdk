<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class ReturnIneligibleReasonNotAllowed extends IneligibilityReason
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?OrderLineItemRef $orderLineItem = null,
        /** @var AllowedReason[] */
        public array $allowedReasons = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnIneligibleReasonNotAllowed';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:          $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
            orderLineItem: isset($data['orderLineItem'])
                ? OrderLineItemRef::fromArray($data['orderLineItem'])
                : null,
            allowedReasons: array_map(
                fn(array $r) => AllowedReason::fromArray($r),
                $data['allowedReasons'] ?? []
            ),
        );
    }
}
