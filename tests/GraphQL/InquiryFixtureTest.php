<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class InquiryFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/Inquiry';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\InquiryOperations';

    public static function fixtures(): iterable
    {
        yield 'OrderInquiry'                                    => ['OrderInquiry', 'orderInquiry'];
        yield 'ProcessOrderInquiryRefund'                       => ['ProcessOrderInquiryRefund', 'processOrderInquiryRefund'];
        yield 'ProvideShipmentInfoForItemNotReceivedInquiry'    => ['ProvideShipmentInfoForItemNotReceivedInquiry', 'provideShipmentInfoForItemNotReceivedInquiry'];
        yield 'SellerOrderInquiries'                            => ['SellerOrderInquiries', 'sellerOrderInquiries'];
        yield 'SendOrderInquiryMessage'                         => ['SendOrderInquiryMessage', 'sendOrderInquiryMessage'];
        yield 'SubmitOrderInquiryReferral'                      => ['SubmitOrderInquiryReferral', 'submitOrderInquiryReferral'];
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
