<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

abstract readonly class Output
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): self
    {
        return match ($data['__typename'] ?? null) {
            'SendOrderInquiryMessageSuccess' => Success::fromArray($data),
            'OrderInquiryNotFoundError' => NotFoundError::fromArray($data),
            'OrderInquiryActionNotPermittedError' => ActionNotPermittedError::fromArray($data),
            'SendOrderInquiryMessageInputValidationError' => InputValidationError::fromArray($data),
            default => throw new \UnexpectedValueException('Unknown __typename: ' . ($data['__typename'] ?? 'null')),
        };
    }
}
