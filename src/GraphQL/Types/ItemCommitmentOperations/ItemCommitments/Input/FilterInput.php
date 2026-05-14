<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input;

readonly class FilterInput
{
    public function __construct(
        public bool $includeAbandoned = false,
        public bool $includeActive = true,
        public bool $includeCancelled = false,
        public bool $includeCompleted = false,
        public bool $includeLocked = false,
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            includeAbandoned: $data['includeAbandoned'] ?? false,
            includeActive: $data['includeActive'] ?? true,
            includeCancelled: $data['includeCancelled'] ?? false,
            includeCompleted: $data['includeCompleted'] ?? false,
            includeLocked: $data['includeLocked'] ?? false,
            listingId: $data['listingId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'includeAbandoned' => $this->includeAbandoned,
            'includeActive' => $this->includeActive,
            'includeCancelled' => $this->includeCancelled,
            'includeCompleted' => $this->includeCompleted,
            'includeLocked' => $this->includeLocked,
        ];
        if ($this->listingId !== null) {
            $result['listingId'] = $this->listingId;
        }
        return $result;
    }
}
