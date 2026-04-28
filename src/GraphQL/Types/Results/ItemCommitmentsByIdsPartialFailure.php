<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class ItemCommitmentsByIdsPartialFailure extends ItemCommitmentsByIdsOutput
{
    /**
     * @param ItemCommitmentData[] $itemCommitments
     * @param GraphQLError[]       $errors
     */
    public function __construct(
        public array $itemCommitments = [],
        public array $errors = [],
    ) {}

    public function getTypename(): string
    {
        return 'ItemCommitmentsByIdsPartialFailure';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitments: array_map(
                static fn(array $c) => ItemCommitmentData::fromArray($c),
                $data['itemCommitments'] ?? []
            ),
            errors: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['errors'] ?? []
            ),
        );
    }
}
