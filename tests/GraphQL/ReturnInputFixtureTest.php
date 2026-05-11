<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AddListingsToReturnRuleListingGroup\Input as AddListingsToReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnResponseRule\Input as AppendSellerReturnResponseRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AppendSellerReturnToAddressRule\Input as AppendSellerReturnToAddressRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ApproveReturn\Input as ApproveReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\AttachReturnShipmentLabel\Input as AttachReturnShipmentLabelInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateInStoreReturn\Input as CreateInStoreReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\CreateReturnRuleListingGroup\Input as CreateReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeclineReturn\Input as DeclineReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteReturnRuleListingGroup\Input as DeleteReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\DeleteSellerReturnRule\Input as DeleteSellerReturnRuleInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\OrderReturn\Input as OrderReturnInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProcessReturnRefund\Input as ProcessReturnRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProposeKeepItemWithPartialRefund\Input as ProposeKeepItemWithPartialRefundInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ProvideRmaNumber\Input as ProvideRmaNumberInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnLabelSentOffline\Input as RecordReturnLabelSentOfflineInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\RecordReturnReceived\Input as RecordReturnReceivedInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\ReturnRuleListingGroup\Input as ReturnRuleListingGroupInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerOrderReturns\Input as SellerOrderReturnsInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SellerReturnPreference\Input as SellerReturnPreferenceInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SendReturnMessage\Input as SendReturnMessageInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\SubmitReturnReferral\Input as SubmitReturnReferralInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRuleCondition\Input as UpdateSellerReturnResponseRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnResponseRulesPriorities\Input as UpdateSellerReturnResponseRulesPrioritiesInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnRuleStatus\Input as UpdateSellerReturnRuleStatusInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRuleCondition\Input as UpdateSellerReturnToAddressRuleConditionInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerReturnToAddressRulesPriorities\Input as UpdateSellerReturnToAddressRulesPrioritiesInput;
use EBay\OrderManagement\GraphQL\Types\ReturnOperations\UpdateSellerRmaPreference\Input as UpdateSellerRmaPreferenceInput;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ReturnInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Return';

    public static function fixtures(): iterable
    {
        yield 'AddListingsToReturnRuleListingGroup'        => ['AddListingsToReturnRuleListingGroup', AddListingsToReturnRuleListingGroupInput::class];
        yield 'AppendSellerReturnResponseRule'             => ['AppendSellerReturnResponseRule', AppendSellerReturnResponseRuleInput::class];
        yield 'AppendSellerReturnToAddressRule'            => ['AppendSellerReturnToAddressRule', AppendSellerReturnToAddressRuleInput::class];
        yield 'ApproveReturn'                              => ['ApproveReturn', ApproveReturnInput::class];
        yield 'AttachReturnShipmentLabel'                  => ['AttachReturnShipmentLabel', AttachReturnShipmentLabelInput::class];
        yield 'CreateInStoreReturn'                        => ['CreateInStoreReturn', CreateInStoreReturnInput::class];
        yield 'CreateReturnRuleListingGroup'               => ['CreateReturnRuleListingGroup', CreateReturnRuleListingGroupInput::class];
        yield 'DeclineReturn'                              => ['DeclineReturn', DeclineReturnInput::class];
        yield 'DeleteReturnRuleListingGroup'               => ['DeleteReturnRuleListingGroup', DeleteReturnRuleListingGroupInput::class];
        yield 'DeleteSellerReturnRule'                     => ['DeleteSellerReturnRule', DeleteSellerReturnRuleInput::class];
        yield 'OrderReturn'                                => ['OrderReturn', OrderReturnInput::class];
        yield 'ProcessReturnRefund'                        => ['ProcessReturnRefund', ProcessReturnRefundInput::class];
        yield 'ProposeKeepItemWithPartialRefund'           => ['ProposeKeepItemWithPartialRefund', ProposeKeepItemWithPartialRefundInput::class];
        yield 'ProvideRmaNumber'                           => ['ProvideRmaNumber', ProvideRmaNumberInput::class];
        yield 'RecordReturnLabelSentOffline'               => ['RecordReturnLabelSentOffline', RecordReturnLabelSentOfflineInput::class];
        yield 'RecordReturnReceived'                       => ['RecordReturnReceived', RecordReturnReceivedInput::class];
        yield 'ReturnRuleListingGroup'                     => ['ReturnRuleListingGroup', ReturnRuleListingGroupInput::class];
        yield 'SellerOrderReturns'                         => ['SellerOrderReturns', SellerOrderReturnsInput::class];
        yield 'SellerReturnPreference'                     => ['SellerReturnPreference', SellerReturnPreferenceInput::class];
        yield 'SendReturnMessage'                          => ['SendReturnMessage', SendReturnMessageInput::class];
        yield 'SubmitReturnReferral'                       => ['SubmitReturnReferral', SubmitReturnReferralInput::class];
        yield 'UpdateSellerReturnResponseRuleCondition'    => ['UpdateSellerReturnResponseRuleCondition', UpdateSellerReturnResponseRuleConditionInput::class];
        yield 'UpdateSellerReturnResponseRulesPriorities'  => ['UpdateSellerReturnResponseRulesPriorities', UpdateSellerReturnResponseRulesPrioritiesInput::class];
        yield 'UpdateSellerReturnRuleStatus'               => ['UpdateSellerReturnRuleStatus', UpdateSellerReturnRuleStatusInput::class];
        yield 'UpdateSellerReturnToAddressRuleCondition'   => ['UpdateSellerReturnToAddressRuleCondition', UpdateSellerReturnToAddressRuleConditionInput::class];
        yield 'UpdateSellerReturnToAddressRulesPriorities' => ['UpdateSellerReturnToAddressRulesPriorities', UpdateSellerReturnToAddressRulesPrioritiesInput::class];
        yield 'UpdateSellerRmaPreference'                  => ['UpdateSellerRmaPreference', UpdateSellerRmaPreferenceInput::class];
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
