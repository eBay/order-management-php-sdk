<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber;

readonly class RmaNumberConstraint
{
    public function __construct(
        public ?bool $rmaNumberRequired = null,
        public ?CharacterLimit $characterLimit = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            rmaNumberRequired: $data['rmaNumberRequired'] ?? null,
            characterLimit:    isset($data['characterLimit'])
                ? CharacterLimit::fromArray($data['characterLimit'])
                : null,
        );
    }
}
