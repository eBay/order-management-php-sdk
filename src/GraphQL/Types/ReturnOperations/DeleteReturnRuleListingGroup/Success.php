<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup;

readonly class Success extends Output
{
    public function __construct(
        public ?string $groupId = null,
        public ?string $name = null,
    ) {}

    public function getTypename(): string
    {
        return 'DeleteReturnRuleListingGroupSuccess';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            groupId: $data['groupId'] ?? null,
            name:    $data['name'] ?? null,
        );
    }
}
