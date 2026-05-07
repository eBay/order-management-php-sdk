<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn;

readonly class AvailableAction
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $code = null,
        public ?string $displayText = null,
        /** @var ReferralReason[] */
        public array $referralReasons = [],
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            __typename:     $data['__typename'] ?? null,
            code:           $data['code'] ?? null,
            displayText:    $data['displayText'] ?? null,
            referralReasons: array_map(
                fn(array $r) => ReferralReason::fromArray($r),
                $data['referralReasons'] ?? []
            ),
        );
    }
}
