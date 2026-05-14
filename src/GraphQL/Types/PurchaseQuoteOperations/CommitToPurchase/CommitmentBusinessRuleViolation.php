<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class CommitmentBusinessRuleViolation
{
    public function __construct(
        public ?string $ruleDescription = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            ruleDescription: $data['ruleDescription'] ?? null,
        );
    }
}
