<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Output;

readonly class CommittedTotal
{
    public function __construct(
        public ?OriginalAmount $original = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original: isset($data['original'])
                ? OriginalAmount::fromArray($data['original'])
                : null,
        );
    }
}
