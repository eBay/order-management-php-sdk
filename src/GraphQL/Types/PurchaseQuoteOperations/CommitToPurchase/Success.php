<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class Success extends Output
{
    public function __construct(
        public ?ItemCommitment $commitment = null,
    ) {}

    public function getTypename(): string
    {
        return 'CommitToPurchaseSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            commitment: isset($data['commitment']) ? ItemCommitment::fromArray($data['commitment']) : null,
        );
    }
}
