<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

readonly class ReturnRmaNumberViolation extends Violation
{
    public function __construct(
        public ?string $code = null,
        public ?string $displayMessage = null,
        public ?bool $containsInvalidCharacters = null,
        public ?bool $exceededLength = null,
        public ?RmaNumberConstraint $constraint = null,
    ) {}

    public function getTypename(): string
    {
        return 'ReturnRmaNumberViolation';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:                    $data['code'] ?? null,
            displayMessage:          $data['displayMessage'] ?? null,
            containsInvalidCharacters: $data['containsInvalidCharacters'] ?? null,
            exceededLength:          $data['exceededLength'] ?? null,
            constraint:              isset($data['constraint'])
                ? RmaNumberConstraint::fromArray($data['constraint'])
                : null,
        );
    }
}
