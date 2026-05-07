<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class RespondByAction
{
    public function __construct(
        public ?RespondAction $respondAction = null,
        public ?string $responseDueAt = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            respondAction: isset($data['respondAction'])
                ? RespondAction::fromArray($data['respondAction'])
                : null,
            responseDueAt: $data['responseDueAt'] ?? null,
        );
    }
}
