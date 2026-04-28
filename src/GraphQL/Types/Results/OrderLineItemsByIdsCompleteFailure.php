<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class OrderLineItemsByIdsCompleteFailure extends OrderLineItemsByIdsOutput
{
    /**
     * @param GraphQLError[] $errors
     */
    public function __construct(
        public array $errors = [],
    ) {}

    public function getTypename(): string
    {
        return 'OrderLineItemsByIdsCompleteFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errors: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['errors'] ?? []
            ),
        );
    }
}
