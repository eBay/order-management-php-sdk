<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class InquiryInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Inquiry';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\InquiryOperations';

    public static function fixtures(): iterable
    {
        yield 'OrderInquiry'                                    => ['OrderInquiry'];
        yield 'ProcessOrderInquiryRefund'                       => ['ProcessOrderInquiryRefund'];
        yield 'ProvideShipmentInfoForItemNotReceivedInquiry'    => ['ProvideShipmentInfoForItemNotReceivedInquiry'];
        yield 'SellerOrderInquiries'                            => ['SellerOrderInquiries'];
        yield 'SendOrderInquiryMessage'                         => ['SendOrderInquiryMessage'];
        yield 'SubmitOrderInquiryReferral'                      => ['SubmitOrderInquiryReferral'];
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
