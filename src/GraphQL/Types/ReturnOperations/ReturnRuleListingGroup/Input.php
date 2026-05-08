<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup;

readonly class Input
{
    public function __construct(
        public string $returnRuleListingGroupId,
        public ?string $cursor = null,
        public ?int $limit = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnRuleListingGroupId: $data['returnRuleListingGroupId'],
            cursor: $data['cursor'] ?? null,
            limit: isset($data['limit']) ? (int) $data['limit'] : null,
        );
    }

    public function toArray(): array
    {
        $data = ['returnRuleListingGroupId' => $this->returnRuleListingGroupId];
        if ($this->cursor !== null) {
            $data['cursor'] = $this->cursor;
        }
        if ($this->limit !== null) {
            $data['limit'] = $this->limit;
        }
        return $data;
    }
}
