<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid;

readonly class PartialFailure extends Output
{
    /**
     * @param MarkedOrder[] $markPaidOrders
     * @param Failure[] $failures
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $markPaidOrders = [],
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            markPaidOrders: array_map(
                fn(array $o) => MarkedOrder::fromArray($o),
                $data['markPaidOrders'] ?? []
            ),
            failures: array_map(
                fn(array $f) => Failure::fromArray($f),
                $data['failures'] ?? []
            ),
        );
    }
}
