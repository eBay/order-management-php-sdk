<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class ItemCommitmentFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/ItemCommitment';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\ItemCommitmentOperations';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdateItemCommitmentTags' => ['BulkUpdateItemCommitmentTags', 'bulkUpdateItemCommitmentTags'];
        yield 'ItemCommitments'              => ['ItemCommitments', 'itemCommitments'];
        yield 'ItemCommitmentsByIds'         => ['ItemCommitmentsByIds', 'itemCommitmentsByIds'];
        yield 'MarkItemCommitmentsPaid'      => ['MarkItemCommitmentsPaid', 'markItemCommitmentsPaid'];
        yield 'MarkOrdersPaid'               => ['MarkOrdersPaid', 'markOrdersPaid'];
        yield 'OrderLineItemsByIds'          => ['OrderLineItemsByIds', 'orderLineItemsByIds'];
        yield 'Orders'                       => ['Orders', 'orders'];
        yield 'OrdersByIds'                  => ['OrdersByIds', 'ordersByIds'];
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
