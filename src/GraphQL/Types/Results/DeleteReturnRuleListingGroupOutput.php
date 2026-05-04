<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

readonly class DeleteReturnRuleListingGroupOutput
{
    public function __construct(
        public ?string $typename = null,
        public ?string $groupId = null,
        public ?string $name = null,
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'DeleteReturnRuleListingGroupSuccess') {
            return new self(
                typename: $typename,
                groupId:  $data['groupId'] ?? null,
                name:     $data['name'] ?? null,
            );
        }

        return new self(
            typename: $typename,
            error:    $data,
        );
    }
}
