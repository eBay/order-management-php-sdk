<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class FailedPurchaseQuoteResult
{
    /**
     * @param GraphQLError[] $errors
     */
    public function __construct(
        public ?string $purchaseQuoteId = null,
        public array $errors = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            purchaseQuoteId: $data['purchaseQuoteId'] ?? null,
            errors: array_map(
                static fn(array $e) => GraphQLError::fromArray($e),
                $data['errors'] ?? []
            ),
        );
    }
}
