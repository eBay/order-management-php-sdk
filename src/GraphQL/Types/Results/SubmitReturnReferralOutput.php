<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract class SubmitReturnReferralOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): SubmitReturnReferralSuccess|SubmitReturnReferralError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                               => SubmitReturnReferralSuccess::fromArray($data),
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError',
            'SubmitReturnReferralInputValidationError'  => SubmitReturnReferralError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
