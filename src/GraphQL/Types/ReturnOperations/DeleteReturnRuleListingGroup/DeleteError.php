<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup;

/**
 * Note: this error uses `code`/`message` (not `errorCode`/`errorMessage`).
 */
readonly class DeleteError extends Output
{
    public function __construct(
        public ?string $code = null,
        public ?string $message = null,
    ) {}

    public function getTypename(): string
    {
        return 'DeleteReturnRuleListingGroupError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            code:    $data['code'] ?? null,
            message: $data['message'] ?? null,
        );
    }
}
