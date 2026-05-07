<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry;

/**
 * Represents either a ShipmentTrackingInformationRequested or SignatureConfirmationRequested fragment.
 * The __typename discriminates which inline fragment matched.
 */
readonly class RequestedInformation
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $requester = null,
        public ?string $requestedAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            requester: $data['requester'] ?? null,
            requestedAt: $data['requestedAt'] ?? null,
        );
    }
}
