<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CommitToPurchase;

readonly class ReferenceArgumentsNotFound extends Output
{
    /**
     * @param string[] $argumentNames
     */
    public function __construct(
        public array $argumentNames = [],
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReferenceArgumentsNotFound';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            argumentNames: $data['argumentNames'] ?? [],
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
        );
    }
}
