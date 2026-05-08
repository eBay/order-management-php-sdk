<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders;

readonly class OrdersFilterInput
{
    public function __construct(
        public bool $includeAbandoned = false,
        public bool $includeCancelled = false,
        public bool $includeConfirmed = true,
        public bool $includePlaced = false,
        public ?bool $fulfilled = null,
        public ?bool $funded = null,
        public ?string $listingId = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            includeAbandoned: (bool)($data['includeAbandoned'] ?? false),
            includeCancelled: (bool)($data['includeCancelled'] ?? false),
            includeConfirmed: (bool)($data['includeConfirmed'] ?? true),
            includePlaced: (bool)($data['includePlaced'] ?? false),
            fulfilled: isset($data['fulfilled']) ? (bool)$data['fulfilled'] : null,
            funded: isset($data['funded']) ? (bool)$data['funded'] : null,
            listingId: $data['listingId'] ?? null,
        );
    }

    public function toArray(): array
    {
        $result = [
            'includeAbandoned' => $this->includeAbandoned,
            'includeCancelled' => $this->includeCancelled,
            'includeConfirmed' => $this->includeConfirmed,
            'includePlaced'    => $this->includePlaced,
        ];

        if ($this->fulfilled !== null) {
            $result['fulfilled'] = $this->fulfilled;
        }

        if ($this->funded !== null) {
            $result['funded'] = $this->funded;
        }

        if ($this->listingId !== null) {
            $result['listingId'] = $this->listingId;
        }

        return $result;
    }
}
