<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkOrdersPaidSuccess extends MarkOrdersPaidOutput
{
    /**
     * @param OrderData[] $markPaidOrders
     */
    public function __construct(
        public array $markPaidOrders = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            markPaidOrders: array_map(
                static fn(array $o) => OrderData::fromArray($o),
                $data['markPaidOrders'] ?? []
            ),
        );
    }
}
