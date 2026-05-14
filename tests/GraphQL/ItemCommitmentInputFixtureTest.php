<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateItemCommitmentTags\Input as BulkUpdateItemCommitmentTagsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\BulkUpdateOrderTags\Input as BulkUpdateOrderTagsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitments\Input\ItemCommitmentsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\ItemCommitmentsByIds\Input as ItemCommitmentsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkItemCommitmentsPaid\Input as MarkItemCommitmentsPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\MarkOrdersPaid\Input as MarkOrdersPaidInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrderLineItemsByIds\Input as OrderLineItemsByIdsInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\Orders\Input as OrdersInput;
use EBay\OrderManagement\GraphQL\Types\ItemCommitmentOperations\OrdersByIds\Input as OrdersByIdsInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ItemCommitmentInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input';

    public static function fixtures(): iterable
    {
        yield 'BulkUpdateItemCommitmentTags' => ['BulkUpdateItemCommitmentTags', BulkUpdateItemCommitmentTagsInput::class];
        yield 'BulkUpdateOrderTags'          => ['BulkUpdateOrderTags', BulkUpdateOrderTagsInput::class];
        yield 'ItemCommitments'              => ['ItemCommitments', ItemCommitmentsInput::class];
        yield 'ItemCommitmentsByIds'         => ['ItemCommitmentsByIds', ItemCommitmentsByIdsInput::class];
        yield 'MarkItemCommitmentsPaid'      => ['MarkItemCommitmentsPaid', MarkItemCommitmentsPaidInput::class];
        yield 'MarkOrdersPaid'               => ['MarkOrdersPaid', MarkOrdersPaidInput::class];
        yield 'OrderLineItemsByIds'          => ['OrderLineItemsByIds', OrderLineItemsByIdsInput::class];
        yield 'Orders'                       => ['Orders', OrdersInput::class];
        yield 'OrdersByIds'                  => ['OrdersByIds', OrdersByIdsInput::class];
    }

    #[DataProvider('fixtures')]
    public function testFromArrayToArrayRoundtrip(string $operation, string $class): void
    {
        // Decode without assoc so {} stays stdClass (not []) — required to distinguish object vs array.
        $fixture = json_decode(file_get_contents(self::$fixturesDir . '/' . lcfirst($operation) . '.json'));

        if (isset($fixture->cases)) {
            foreach ($fixture->cases as $case) {
                $input    = json_decode(json_encode($case->input), true);
                $instance = $class::fromArray($input);

                $this->assertJsonStringEqualsJsonString(
                    json_encode($case->expected),
                    json_encode((object)$instance->toArray()),
                    "Round-trip failed for case: {$case->label}",
                );
            }
        } else {
            // Simple {"input": {...}} format: verify parsing succeeds without errors.
            $instance = $class::fromArray(json_decode(json_encode($fixture->input), true));
            $this->assertNotNull($instance);
        }
    }
}
