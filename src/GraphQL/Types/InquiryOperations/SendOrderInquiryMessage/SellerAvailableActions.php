<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage;

readonly class SellerAvailableActions
{
    /**
     * @param SecondaryAction[] $secondaryActions
     */
    public function __construct(
        public ?RespondByAction $respondByAction = null,
        public array $secondaryActions = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            respondByAction: isset($data['respondByAction'])
                ? RespondByAction::fromArray($data['respondByAction'])
                : null,
            secondaryActions: array_map(
                fn(array $a) => SecondaryAction::fromArray($a),
                $data['secondaryActions'] ?? [],
            ),
        );
    }
}
