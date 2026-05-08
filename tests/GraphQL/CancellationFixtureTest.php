<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class CancellationFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/Cancellation';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\CancellationOperations';

    public static function fixtures(): iterable
    {
        yield 'ApproveContractCancellation' => ['ApproveContractCancellation', 'approveContractCancellation'];
        yield 'ContractCancellation'        => ['ContractCancellation', 'contractCancellation'];
        yield 'CreateItemCommitmentCancellation' => ['CreateItemCommitmentCancellation', 'createItemCommitmentCancellation'];
        yield 'CreateOrderCancellation'     => ['CreateOrderCancellation', 'createOrderCancellation'];
        yield 'CreatePurchaseQuoteCancellation' => ['CreatePurchaseQuoteCancellation', 'createPurchaseQuoteCancellation'];
        yield 'DeclineContractCancellation' => ['DeclineContractCancellation', 'declineContractCancellation'];
        yield 'SellerContractCancellations' => ['SellerContractCancellations', 'sellerContractCancellations'];
    }

    /** @dataProvider fixtures */
    public function testFixtureParsing(string $operation, string $key): void
    {
        $json = file_get_contents(self::$fixturesDir . '/' . $operation . '.json');
        $data = json_decode($json, true);

        $class = self::$namespace . '\\' . $operation . '\\Output';
        $result = $class::fromArray($data[$key]);

        $this->assertNotNull($result);
    }
}
