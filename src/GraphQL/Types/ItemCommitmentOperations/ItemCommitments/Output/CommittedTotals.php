<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class CommittedTotals
{
    public function __construct(
        public ?CommittedTotal $committedTotal = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            committedTotal: isset($data['committedTotal'])
                ? CommittedTotal::fromArray($data['committedTotal'])
                : null,
        );
    }
}
