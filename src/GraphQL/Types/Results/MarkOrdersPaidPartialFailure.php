<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class MarkOrdersPaidPartialFailure extends MarkOrdersPaidOutput
{
    /**
     * @param PaidOrder[]    $markPaidOrders
     * @param GraphQLError[] $failures
     */
    public function __construct(
        public array $markPaidOrders = [],
        public array $failures = [],
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'MarkOrdersPaidPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            markPaidOrders: array_map(
                static fn(array $o) => PaidOrder::fromArray($o),
                $data['markPaidOrders'] ?? []
            ),
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
        );
    }
}
