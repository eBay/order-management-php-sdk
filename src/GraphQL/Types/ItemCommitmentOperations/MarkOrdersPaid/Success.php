<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid;

readonly class Success extends Output
{
    /**
     * @param MarkedOrder[] $markPaidOrders
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
                fn(array $o) => MarkedOrder::fromArray($o),
                $data['markPaidOrders'] ?? []
            ),
        );
    }
}
