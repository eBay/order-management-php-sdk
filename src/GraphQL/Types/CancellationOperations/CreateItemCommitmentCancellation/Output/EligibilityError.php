<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Output;

class EligibilityError extends CreateItemCommitmentCancellationOutput
{
    public ?string $errorCode = null;
    public ?string $errorMessage = null;
    /** @var IneligibilityReason[] */
    public array $ineligibilityReasons = [];

    public function getTypename(): string
    {
        return 'ItemCommitmentCancellationEligibilityError';
    }

    public static function fromArray(array $data): static
    {
        $instance = new static();
        $instance->errorCode = $data['errorCode'] ?? null;
        $instance->errorMessage = $data['errorMessage'] ?? null;
        $instance->ineligibilityReasons = array_map(
            static fn($r) => IneligibilityReason::fromArray($r),
            $data['ineligibilityReasons'] ?? []
        );
        return $instance;
    }
}
