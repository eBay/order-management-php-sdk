<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CreatePurchaseQuoteCancellationSuccess extends CreatePurchaseQuoteCancellationOutput
{
    public function __construct(
        public ?CancellationData $purchaseQuoteCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreatePurchaseQuoteCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteCancellation: isset($data['purchaseQuoteCancellation'])
                ? CancellationData::fromArray($data['purchaseQuoteCancellation'])
                : null,
        );
    }
}
