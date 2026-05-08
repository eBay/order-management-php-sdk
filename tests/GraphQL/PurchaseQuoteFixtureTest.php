<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class PurchaseQuoteFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/output/PurchaseQuote';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\PurchaseQuoteOperations';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdatePurchaseQuotes'      => ['BulkUpdatePurchaseQuotes', 'bulkUpdatePurchaseQuotes'];
        yield 'CreatePurchaseQuote'           => ['CreatePurchaseQuote', 'createPurchaseQuote'];
        yield 'PurchaseQuoteLineItemsByIds'   => ['PurchaseQuoteLineItemsByIds', 'purchaseQuoteLineItemsByIds'];
        yield 'PurchaseQuotes'                => ['PurchaseQuotes', 'purchaseQuotes'];
        yield 'PurchaseQuotesByIds'           => ['PurchaseQuotesByIds', 'purchaseQuotesByIds'];
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
