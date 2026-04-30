<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrdersByIdsCompleteFailure extends OrdersByIdsOutput
{
    /**
     * @param GraphQLError[] $failures
     */
    public function __construct(
        public array $failures = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrdersByIdsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            failures: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['failures'] ?? []
            ),
        );
    }
}
