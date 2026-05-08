<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class ItemCommitmentInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/ItemCommitment';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\ItemCommitmentOperations';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdateItemCommitmentTags' => ['BulkUpdateItemCommitmentTags'];
        yield 'ItemCommitments'              => ['ItemCommitments'];
        yield 'ItemCommitmentsByIds'         => ['ItemCommitmentsByIds'];
        yield 'MarkItemCommitmentsPaid'      => ['MarkItemCommitmentsPaid'];
        yield 'MarkOrdersPaid'               => ['MarkOrdersPaid'];
        yield 'OrderLineItemsByIds'          => ['OrderLineItemsByIds'];
        yield 'Orders'                       => ['Orders'];
        yield 'OrdersByIds'                  => ['OrdersByIds'];
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
