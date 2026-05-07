<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities;

readonly class InvalidRuleIdsError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var string[] */
        public array $invalidRuleIds = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleInvalidRuleIdsError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:      $data['errorCode'] ?? null,
            errorMessage:   $data['errorMessage'] ?? null,
            invalidRuleIds: $data['invalidRuleIds'] ?? [],
        );
    }
}
