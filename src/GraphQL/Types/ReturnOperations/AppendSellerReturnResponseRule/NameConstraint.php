<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule;

readonly class NameConstraint
{
    public function __construct(
        public ?int $minLength = null,
        public ?int $maxLength = null,
        public ?string $allowedPattern = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            minLength:      $data['characterLimit']['minLength'] ?? null,
            maxLength:      $data['characterLimit']['maxLength'] ?? null,
            allowedPattern: $data['allowedPattern'] ?? null,
        );
    }
}
