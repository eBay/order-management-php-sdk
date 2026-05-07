<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn;

readonly class GenericViolation extends Violation
{
    public function __construct(
        private string $typename,
        public ?string $code = null,
        public ?string $displayMessage = null,
    ) {}

    public function getTypename(): string
    {
        return $this->typename;
    }

    public static function fromArray(array $data): self
    {
        return new self(
            typename:      $data['__typename'] ?? 'UnknownViolation',
            code:          $data['code'] ?? null,
            displayMessage: $data['displayMessage'] ?? null,
        );
    }
}
