<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class SellerItemCommitmentsResult
{
    /**
     * @param ItemCommitmentData[] $itemCommitments
     */
    public function __construct(
        public array $itemCommitments = [],
        public ?PaginationOutput $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $nested = $data['sellerItemCommitments'] ?? $data;

        return new self(
            itemCommitments: array_map(
                static fn(array $c) => ItemCommitmentData::fromArray($c),
                $nested['itemCommitments'] ?? []
            ),
            pagination: isset($nested['pagination'])
                ? PaginationOutput::fromArray($nested['pagination'])
                : null,
        );
    }
}
