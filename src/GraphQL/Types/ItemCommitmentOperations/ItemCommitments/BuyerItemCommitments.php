<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class BuyerItemCommitments
{
    /**
     * @param ItemCommitment[] $itemCommitments
     */
    public function __construct(
        public array $itemCommitments = [],
        public ?Pagination $pagination = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            itemCommitments: array_map(
                fn(array $ic) => ItemCommitment::fromArray($ic),
                $data['itemCommitments'] ?? []
            ),
            pagination: isset($data['pagination']) ? Pagination::fromArray($data['pagination']) : null,
        );
    }
}
