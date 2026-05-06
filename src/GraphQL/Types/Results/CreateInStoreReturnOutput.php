<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

/**
 * Output for the createInStoreReturn mutation.
 * Success case returns OrderReturn; error cases are raw arrays.
 */
readonly class CreateInStoreReturnOutput
{
    public function __construct(
        public ?string $__typename = null,
        public ?string $returnId = null,
        public ?string $status = null,
        public ?array  $error = null,
    ) {}

    public static function fromArray(array $data): self
    {
        $typename = $data['__typename'] ?? null;

        if ($typename === 'OrderReturn') {
            return new self(
                __typename: $typename,
                returnId: $data['returnId'] ?? null,
                status:   $data['status']['code'] ?? null,
            );
        }

        return new self(
            __typename: $typename,
            error:    $data,
        );
    }
}
