<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use EBay\OrderManagement\GraphQL\Types\InquiryOperations\OrderInquiry\Input as OrderInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProcessOrderInquiryRefund\Input as ProcessOrderInquiryRefundInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\ProvideShipmentInfoForItemNotReceivedInquiry\Input as ProvideShipmentInfoForItemNotReceivedInquiryInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SellerOrderInquiries\Input as SellerOrderInquiriesInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SendOrderInquiryMessage\Input as SendOrderInquiryMessageInput;
use EBay\OrderManagement\GraphQL\Types\InquiryOperations\SubmitOrderInquiryReferral\Input as SubmitOrderInquiryReferralInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class InquiryInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Inquiry';

    public static function fixtures(): iterable
    {
        yield 'OrderInquiry'                                 => ['OrderInquiry', OrderInquiryInput::class];
        yield 'ProcessOrderInquiryRefund'                    => ['ProcessOrderInquiryRefund', ProcessOrderInquiryRefundInput::class];
        yield 'ProvideShipmentInfoForItemNotReceivedInquiry' => ['ProvideShipmentInfoForItemNotReceivedInquiry', ProvideShipmentInfoForItemNotReceivedInquiryInput::class];
        yield 'SellerOrderInquiries'                         => ['SellerOrderInquiries', SellerOrderInquiriesInput::class];
        yield 'SendOrderInquiryMessage'                      => ['SendOrderInquiryMessage', SendOrderInquiryMessageInput::class];
        yield 'SubmitOrderInquiryReferral'                   => ['SubmitOrderInquiryReferral', SubmitOrderInquiryReferralInput::class];
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
