<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn;

readonly class ReturnCreationNotAllowedError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var IneligibilityReason[] */
        public array $returnIneligibilityReasons = [],
    ) {}

    public function getTypename(): string
    {
        return 'ReturnCreationNotAllowedError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:                  $data['errorCode'] ?? null,
            errorMessage:               $data['errorMessage'] ?? null,
            returnIneligibilityReasons: array_map(
                fn(array $r) => IneligibilityReason::fromArray($r),
                $data['returnIneligibilityReasons'] ?? []
            ),
        );
    }
}
