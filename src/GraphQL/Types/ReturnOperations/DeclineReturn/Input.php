<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public ?string $note = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            note: $data['note'] ?? null,
        );
    }

    public function toArray(): array
    {
        $arr = ['returnId' => $this->returnId];
        if ($this->note !== null) {
            $arr['note'] = $this->note;
        }
        return $arr;
    }
}
