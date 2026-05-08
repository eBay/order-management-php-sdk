<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $referralReasonCode,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId:           $data['returnId'],
            referralReasonCode: $data['referralReasonCode'],
        );
    }

    public function toArray(): array
    {
        return [
            'returnId'           => $this->returnId,
            'referralReasonCode' => $this->referralReasonCode,
        ];
    }
}
