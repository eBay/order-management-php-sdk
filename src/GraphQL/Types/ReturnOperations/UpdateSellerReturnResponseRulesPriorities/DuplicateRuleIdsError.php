<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities;

readonly class DuplicateRuleIdsError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var string[] */
        public array $duplicateRuleIds = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleDuplicateRuleIdsError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:        $data['errorCode'] ?? null,
            errorMessage:     $data['errorMessage'] ?? null,
            duplicateRuleIds: $data['duplicateRuleIds'] ?? [],
        );
    }
}
