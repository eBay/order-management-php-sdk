<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class PurchaseQuoteInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/PurchaseQuote';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\PurchaseQuoteOperations';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdatePurchaseQuotes'    => ['BulkUpdatePurchaseQuotes'];
        yield 'CreatePurchaseQuote'         => ['CreatePurchaseQuote'];
        yield 'PurchaseQuoteLineItemsByIds' => ['PurchaseQuoteLineItemsByIds'];
        yield 'PurchaseQuotesByIds'         => ['PurchaseQuotesByIds'];
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
