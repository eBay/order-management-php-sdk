<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

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
                static fn(array $item) => ItemCommitment::fromArray($item),
                $data['itemCommitments'] ?? [],
            ),
            pagination: isset($data['pagination'])
                ? Pagination::fromArray($data['pagination'])
                : null,
        );
    }
}
