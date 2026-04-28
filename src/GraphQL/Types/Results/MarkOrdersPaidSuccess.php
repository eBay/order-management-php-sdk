<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkOrdersPaidSuccess extends MarkOrdersPaidOutput
{
    /**
     * @param PaidOrderResult[] $orders
     */
    public function __construct(
        public array $orders = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            orders: array_map(
                static fn(array $o) => PaidOrderResult::fromArray($o),
                $data['orders'] ?? []
            ),
        );
    }
}
