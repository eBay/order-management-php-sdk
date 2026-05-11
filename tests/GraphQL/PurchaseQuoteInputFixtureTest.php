<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\BulkUpdatePurchaseQuotes\Input as BulkUpdatePurchaseQuotesInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\CreatePurchaseQuote\Input as CreatePurchaseQuoteInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuoteLineItemsByIds\Input as PurchaseQuoteLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\PurchaseQuoteOperations\PurchaseQuotesByIds\Input as PurchaseQuotesByIdsInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class PurchaseQuoteInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/PurchaseQuote';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdatePurchaseQuotes'    => ['BulkUpdatePurchaseQuotes', BulkUpdatePurchaseQuotesInput::class];
        yield 'CreatePurchaseQuote'         => ['CreatePurchaseQuote', CreatePurchaseQuoteInput::class];
        yield 'PurchaseQuoteLineItemsByIds' => ['PurchaseQuoteLineItemsByIds', PurchaseQuoteLineItemsByIdsInput::class];
        yield 'PurchaseQuotesByIds'         => ['PurchaseQuotesByIds', PurchaseQuotesByIdsInput::class];
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
