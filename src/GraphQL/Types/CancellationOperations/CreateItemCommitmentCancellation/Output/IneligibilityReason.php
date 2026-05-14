<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class IneligibilityReason
{
    private ?string $__typename = null;
    public ?string $code = null;
    public ?string $displayMessage = null;
    public ?string $itemCommitmentId = null;
    /** @var AvailableReason[] */
    public array $availableReasons = [];

    public function getTypename(): string
    {
        return $this->__typename ?? '';
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->__typename = $data['__typename'] ?? null;
        $instance->code = $data['code'] ?? null;
        $instance->displayMessage = $data['displayMessage'] ?? null;
        $instance->itemCommitmentId = $data['itemCommitmentId'] ?? null;
        $instance->availableReasons = array_map(
            static fn($r) => AvailableReason::fromArray($r),
            $data['availableReasons'] ?? []
        );
        return $instance;
    }
}
