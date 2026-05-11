<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ApproveContractCancellation\Input as ApproveContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\ContractCancellation\Input as ContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateItemCommitmentCancellation\Input as CreateItemCommitmentCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreateOrderCancellation\Input as CreateOrderCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\CreatePurchaseQuoteCancellation\Input as CreatePurchaseQuoteCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\DeclineContractCancellation\Input as DeclineContractCancellationInput;
use EBay\OrderManagement\GraphQL\Types\CancellationOperations\SellerContractCancellations\Input as SellerContractCancellationsInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class CancellationInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Cancellation';

    public static function fixtures(): iterable
    {
        yield 'ApproveContractCancellation'      => ['ApproveContractCancellation', ApproveContractCancellationInput::class];
        yield 'ContractCancellation'             => ['ContractCancellation', ContractCancellationInput::class];
        yield 'CreateItemCommitmentCancellation' => ['CreateItemCommitmentCancellation', CreateItemCommitmentCancellationInput::class];
        yield 'CreateOrderCancellation'          => ['CreateOrderCancellation', CreateOrderCancellationInput::class];
        yield 'CreatePurchaseQuoteCancellation'  => ['CreatePurchaseQuoteCancellation', CreatePurchaseQuoteCancellationInput::class];
        yield 'DeclineContractCancellation'      => ['DeclineContractCancellation', DeclineContractCancellationInput::class];
        yield 'SellerContractCancellations'      => ['SellerContractCancellations', SellerContractCancellationsInput::class];
    }

    #[DataProvider('fixtures')]
    public function testFromArrayToArrayRoundtrip(string $operation, string $class): void
    {
        // Decode without assoc so {} stays stdClass (not []) — required to distinguish object vs array.
        $cases = json_decode(file_get_contents(self::$fixturesDir . '/' . $operation . '.json'))->cases;

        foreach ($cases as $case) {
            $input    = json_decode(json_encode($case->input), true);
            $instance = $class::fromArray($input);

            $this->assertJsonStringEqualsJsonString(
                json_encode($case->expected),
                json_encode((object)$instance->toArray()),
                "Round-trip failed for case: {$case->label}",
            );
        }
    }
}
