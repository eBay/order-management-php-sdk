<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class BusinessRulesViolated extends Output
{
    /**
     * @param CommitmentBusinessRuleViolation[] $violations
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $violations = [],
    ) {}

    public function getTypename(): string
    {
        return 'CommitToPurchaseBusinessRulesViolated';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            violations: array_map(
                static fn(array $v) => CommitmentBusinessRuleViolation::fromArray($v),
                $data['violations'] ?? [],
            ),
        );
    }
}
