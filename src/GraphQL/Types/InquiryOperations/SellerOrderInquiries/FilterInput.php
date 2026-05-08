<?php
declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries;

readonly class FilterInput
{
    public function __construct(
        public string $presets = 'AWAITING_ACTION_FROM_SELLER',
        public ?DateTimeRange $createdBetween = null,
        public ?string $listingId = null,
        public ?string $orderId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            presets: $data['presets'] ?? 'AWAITING_ACTION_FROM_SELLER',
            createdBetween: isset($data['createdBetween']) ? DateTimeRange::fromArray($data['createdBetween']) : null,
            listingId: $data['listingId'] ?? null,
            orderId: $data['orderId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $arr = ['presets' => $this->presets];
        if ($this->createdBetween !== null) {
            $arr['createdBetween'] = $this->createdBetween->toArray();
        }
        if ($this->listingId !== null) {
            $arr['listingId'] = $this->listingId;
        }
        if ($this->orderId !== null) {
            $arr['orderId'] = $this->orderId;
        }

        return $arr;
    }
}
