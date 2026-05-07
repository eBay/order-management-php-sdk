<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup;

readonly class InvalidNameError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public ?bool $containsInvalidCharacters = null,
        public ?bool $duplicateGroupName = null,
        public ?NameConstraint $nameConstraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRuleListingGroupInvalidNameError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:                $data['errorCode'] ?? null,
            errorMessage:             $data['errorMessage'] ?? null,
            containsInvalidCharacters: $data['containsInvalidCharacters'] ?? null,
            duplicateGroupName:        $data['duplicateGroupName'] ?? null,
            nameConstraint:            isset($data['nameConstraint'])
                ? NameConstraint::fromArray($data['nameConstraint'])
                : null,
        );
    }
}
