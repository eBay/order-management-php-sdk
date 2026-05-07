<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral;

readonly class InputValidationError extends Output
{
    /**
     * @param Violation[] $violations
     */
    public function __construct(
        public ?string $errorCode = null,
        public ?string $errorMessage = null,
        public array $violations = [],
    ) {}

    public function getTypename(): string
    {
        return 'SubmitOrderInquiryReferralInputValidationError';
    }

    public static function fromArray(array $data): self
    {
        return new self(
            errorCode: $data['errorCode'] ?? null,
            errorMessage: $data['errorMessage'] ?? null,
            violations: array_map(
                fn(array $v) => Violation::fromArray($v),
                $data['violations'] ?? [],
            ),
        );
    }
}
