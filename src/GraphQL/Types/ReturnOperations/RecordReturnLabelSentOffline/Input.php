<?php

declare(strict_types=1);

namespace EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline;

readonly class Input
{
    public function __construct(
        public string $returnId,
        public string $offlineReturnLabelChannel,
        /** @var ReturnLabelTrackingInput[]|null */
        public ?array $trackings = null,
    ) {}

    public static function fromArray(array $data): static
    {
        return new static(
            returnId: $data['returnId'],
            offlineReturnLabelChannel: $data['offlineReturnLabelChannel'],
            trackings: isset($data['trackings'])
                ? array_map(fn(array $t) => ReturnLabelTrackingInput::fromArray($t), $data['trackings'])
                : null,
        );
    }

    public function toArray(): array
    {
        $data = [
            'returnId'                  => $this->returnId,
            'offlineReturnLabelChannel' => $this->offlineReturnLabelChannel,
        ];
        if ($this->trackings !== null) {
            $data['trackings'] = array_map(fn(ReturnLabelTrackingInput $t) => $t->toArray(), $this->trackings);
        }
        return $data;
    }
}
