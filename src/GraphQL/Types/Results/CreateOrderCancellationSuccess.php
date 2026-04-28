<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class CreateOrderCancellationSuccess extends CreateOrderCancellationOutput
{
    public function __construct(
        public ?CancellationData $orderCancellation = null,
    ) {}

    public function getTypename(): string
    {
        return 'CreateOrderCancellationSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orderCancellation: isset($data['orderCancellation'])
                ? CancellationData::fromArray($data['orderCancellation'])
                : null,
        );
    }
}
