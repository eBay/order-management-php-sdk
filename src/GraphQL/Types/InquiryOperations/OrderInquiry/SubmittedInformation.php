<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry;

/**
 * Union of OrderInquiryShipmentTracking | OrderInquirySignatureConfirmation.
 * Discriminated by __typename.
 */
readonly class SubmittedInformation
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $trackingNumber = null,
        public ?ShippingCarrier $shippingCarrier = null,
        public ?SignatureConfirmationProof $signatureConfirmationProof = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            trackingNumber: $data['trackingNumber'] ?? null,
            shippingCarrier: isset($data['shippingCarrier'])
                ? ShippingCarrier::fromArray($data['shippingCarrier'])
                : null,
            signatureConfirmationProof: isset($data['signatureConfirmationProof'])
                ? SignatureConfirmationProof::fromArray($data['signatureConfirmationProof'])
                : null,
        );
    }
}
