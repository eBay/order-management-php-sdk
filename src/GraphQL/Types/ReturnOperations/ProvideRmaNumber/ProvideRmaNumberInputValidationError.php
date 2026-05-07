<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

readonly class ProvideRmaNumberInputValidationError extends Output
{
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        /** @var Violation[] */
        public array $violations = [],
    ) {}

    public function getTypename(): string
    {
        return 'ProvideRmaNumberInputValidationError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode:    $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            violations:   array_map(
                fn(array $v) => Violation::fromArray($v),
                $data['violations'] ?? []
            ),
        );
    }
}
