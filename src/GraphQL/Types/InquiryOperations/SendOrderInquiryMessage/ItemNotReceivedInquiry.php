<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class ItemNotReceivedInquiry
{
    /**
     * @param string[] $inquirers
     * @param InquiryLineItem[] $lineItems
     * @param InquiryCase[] $cases
     * @param Refund[] $refunds
     */
    public function __construct(
        public ?string $__typename = null,
        public ?string $inquiryId = null,
        public ?InquiryStatus $status = null,
        public ?string $createdAt = null,
        public ?string $closedAt = null,
        public ?string $initiator = null,
        public ?string $responder = null,
        public array $inquirers = [],
        public array $lineItems = [],
        public ?SellerAvailableActions $sellerAvailableActions = null,
        public ?RequestedInformation $requestedInformation = null,
        public ?ProvidedInformation $providedInformation = null,
        public array $cases = [],
        public array $refunds = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename: $data['__typename'] ?? null,
            inquiryId: $data['inquiryId'] ?? null,
            status: isset($data['status']) ? InquiryStatus::fromArray($data['status']) : null,
            createdAt: $data['createdAt'] ?? null,
            closedAt: $data['closedAt'] ?? null,
            initiator: $data['initiator'] ?? null,
            responder: $data['responder'] ?? null,
            inquirers: $data['inquirers'] ?? [],
            lineItems: array_map(
                fn(array $li) => InquiryLineItem::fromArray($li),
                $data['lineItems'] ?? [],
            ),
            sellerAvailableActions: isset($data['sellerAvailableActions'])
                ? SellerAvailableActions::fromArray($data['sellerAvailableActions'])
                : null,
            requestedInformation: isset($data['requestedInformation'])
                ? RequestedInformation::fromArray($data['requestedInformation'])
                : null,
            providedInformation: isset($data['providedInformation'])
                ? ProvidedInformation::fromArray($data['providedInformation'])
                : null,
            cases: array_map(
                fn(array $c) => InquiryCase::fromArray($c),
                $data['cases'] ?? [],
            ),
            refunds: array_map(
                fn(array $r) => Refund::fromArray($r),
                $data['refunds'] ?? [],
            ),
        );
    }
}
