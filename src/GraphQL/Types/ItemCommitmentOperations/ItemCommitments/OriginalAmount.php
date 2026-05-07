<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments;

readonly class OriginalAmount
{
    public function __construct(
        public ?MoneyAmount $original = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            original: isset($data['original']) ? MoneyAmount::fromArray($data['original']) : null,
        );
    }
}
