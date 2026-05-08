<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $message,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            message: $data['message'],
        );
    }

    public function toArray(): array
    {
        return [
            'returnId' => $this->returnId,
            'message'  => $this->message,
        ];
    }
}
