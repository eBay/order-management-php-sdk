<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations;

readonly class CancellationFilter
{
    /**
     * @param string[] $statuses
     */
    public function __construct(
        public ?DateTimeRange $createdBetween = null,
        public array $statuses = [],
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            createdBetween: isset($data['createdBetween']) ? DateTimeRange::fromArray($data['createdBetween']) : null,
            statuses: $data['statuses'] ?? [],
        );
    }

    public function toArray(): array
    {
        $result = [];
        if ($this->createdBetween !== null) {
            $result['createdBetween'] = $this->createdBetween->toArray();
        }
        if ($this->statuses !== []) {
            $result['statuses'] = $this->statuses;
        }
        return $result;
    }
}
