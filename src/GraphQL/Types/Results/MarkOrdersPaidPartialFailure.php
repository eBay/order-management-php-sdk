<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkOrdersPaidPartialFailure extends MarkOrdersPaidOutput
{
    /**
     * @param PaidOrderResult[]   $successfulOrders
     * @param FailedOrderResult[] $failedOrders
     */
    public function __construct(
        public array $successfulOrders = [],
        public array $failedOrders = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            successfulOrders: array_map(
                static fn(array $o) => PaidOrderResult::fromArray($o),
                $data['successfulOrders'] ?? []
            ),
            failedOrders: array_map(
                static fn(array $o) => FailedOrderResult::fromArray($o),
                $data['failedOrders'] ?? []
            ),
        );
    }
}
