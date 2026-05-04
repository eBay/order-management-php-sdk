<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\Results;

abstract readonly class AttachReturnShipmentLabelOutput
{
    abstract public function getTypename(): string;

    public static function fromArray(array $data): AttachReturnShipmentLabelSuccess|AttachReturnShipmentLabelError
    {
        return match ($data['__typename'] ?? null) {
            'OrderReturn'                                     => AttachReturnShipmentLabelSuccess::fromArray($data),
            'AttachReturnShipmentLabelInputValidationError',
            'MultipleReturnLabelsNotSupportedError',
            'ReturnActionNotPermittedError',
            'ReturnNotFoundError',
            'ReturnShipmentLabelNotFoundError',
            'ReturnShippingLabelRequiredError'                => AttachReturnShipmentLabelError::fromArray($data),
            default => throw new \UnexpectedValueException(
                'Unknown __typename: ' . ($data['__typename'] ?? 'null')
            ),
        };
    }
}
