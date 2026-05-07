<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class CommittedTotals
{
    public function __construct(
        public ?OriginalAmount $committedTotal = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            committedTotal: isset($data['committedTotal']) ? OriginalAmount::fromArray($data['committedTotal']) : null,
        );
    }
}
