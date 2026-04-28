<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkOrdersPaidCompleteFailure extends MarkOrdersPaidOutput
{
    /**
     * @param FailedOrderResult[] $failedOrders
     */
    public function __construct(
        public array $failedOrders = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failedOrders: array_map(
                static fn(array $o) => FailedOrderResult::fromArray($o),
                $data['failedOrders'] ?? []
            ),
        );
    }
}
