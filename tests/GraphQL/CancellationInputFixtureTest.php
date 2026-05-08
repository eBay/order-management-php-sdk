<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class CancellationInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Cancellation';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\CancellationOperations';

    public static function fixtures(): iterable
    {
        yield 'ApproveContractCancellation'     => ['ApproveContractCancellation'];
        yield 'ContractCancellation'            => ['ContractCancellation'];
        yield 'CreateItemCommitmentCancellation' => ['CreateItemCommitmentCancellation'];
        yield 'CreateOrderCancellation'         => ['CreateOrderCancellation'];
        yield 'CreatePurchaseQuoteCancellation' => ['CreatePurchaseQuoteCancellation'];
        yield 'DeclineContractCancellation'     => ['DeclineContractCancellation'];
        yield 'SellerContractCancellations'     => ['SellerContractCancellations'];
    }

    /** @dataProvider fixtures */
    public function testFixtureParsing(string $operation): void
    {
        $json = file_get_contents(self::$fixturesDir . '/' . $operation . '.json');
        $data = json_decode($json, true);

        $class = self::$namespace . '\\' . $operation . '\\Input';
        $result = $class::fromArray($data['input']);

        $this->assertNotNull($result);
    }
}
