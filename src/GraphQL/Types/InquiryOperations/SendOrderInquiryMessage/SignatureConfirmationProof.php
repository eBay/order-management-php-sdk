<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class SignatureConfirmationProof
{
    public function __construct(
        public ?string $documentId = null,
        public ?string $filenameExtension = null,
        public ?string $documentName = null,
        public ?string $uploadedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            documentId: $data['documentId'] ?? null,
            filenameExtension: $data['filenameExtension'] ?? null,
            documentName: $data['documentName'] ?? null,
            uploadedAt: $data['uploadedAt'] ?? null,
        );
    }
}
