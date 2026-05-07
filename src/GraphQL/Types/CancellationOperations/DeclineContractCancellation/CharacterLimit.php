<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation;

readonly class CharacterLimit
{
    public function __construct(
        public ?int $minLength = null,
        public ?int $maxLength = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            minLength: isset($data['minLength']) ? (int) $data['minLength'] : null,
            maxLength: isset($data['maxLength']) ? (int) $data['maxLength'] : null,
        );
    }
}
