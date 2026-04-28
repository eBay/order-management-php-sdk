<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Top-level result for the itemCommitments query.
 * The query shape is: { itemCommitments { sellerItemCommitments(input:{}) { itemCommitments { ... } pagination { ... } } } }
 */
readonly class ItemCommitmentsOutput
{
    public function __construct(
        public ?SellerItemCommitmentsResult $sellerItemCommitments = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            sellerItemCommitments: isset($data['sellerItemCommitments'])
                ? SellerItemCommitmentsResult::fromArray($data['sellerItemCommitments'])
                : null,
        );
    }
}
