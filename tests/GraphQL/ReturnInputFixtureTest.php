<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class ReturnInputFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/input/Return';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\ReturnOperations';

    public static function fixtures(): iterable
    {
        yield 'AddListingsToReturnRuleListingGroup'        => ['AddListingsToReturnRuleListingGroup'];
        yield 'AppendSellerReturnResponseRule'             => ['AppendSellerReturnResponseRule'];
        yield 'AppendSellerReturnToAddressRule'            => ['AppendSellerReturnToAddressRule'];
        yield 'ApproveReturn'                              => ['ApproveReturn'];
        yield 'AttachReturnShipmentLabel'                  => ['AttachReturnShipmentLabel'];
        yield 'CreateInStoreReturn'                        => ['CreateInStoreReturn'];
        yield 'CreateReturnRuleListingGroup'               => ['CreateReturnRuleListingGroup'];
        yield 'DeclineReturn'                              => ['DeclineReturn'];
        yield 'DeleteReturnRuleListingGroup'               => ['DeleteReturnRuleListingGroup'];
        yield 'DeleteSellerReturnRule'                     => ['DeleteSellerReturnRule'];
        yield 'OrderReturn'                                => ['OrderReturn'];
        yield 'ProcessReturnRefund'                        => ['ProcessReturnRefund'];
        yield 'ProposeKeepItemWithPartialRefund'           => ['ProposeKeepItemWithPartialRefund'];
        yield 'ProvideRmaNumber'                           => ['ProvideRmaNumber'];
        yield 'RecordReturnLabelSentOffline'               => ['RecordReturnLabelSentOffline'];
        yield 'RecordReturnReceived'                       => ['RecordReturnReceived'];
        yield 'ReturnRuleListingGroup'                     => ['ReturnRuleListingGroup'];
        yield 'SellerOrderReturns'                         => ['SellerOrderReturns'];
        yield 'SellerReturnPreference'                     => ['SellerReturnPreference'];
        yield 'SendReturnMessage'                          => ['SendReturnMessage'];
        yield 'SubmitReturnReferral'                       => ['SubmitReturnReferral'];
        yield 'UpdateSellerReturnResponseRuleCondition'    => ['UpdateSellerReturnResponseRuleCondition'];
        yield 'UpdateSellerReturnResponseRulesPriorities'  => ['UpdateSellerReturnResponseRulesPriorities'];
        yield 'UpdateSellerReturnRuleStatus'               => ['UpdateSellerReturnRuleStatus'];
        yield 'UpdateSellerReturnToAddressRuleCondition'   => ['UpdateSellerReturnToAddressRuleCondition'];
        yield 'UpdateSellerReturnToAddressRulesPriorities' => ['UpdateSellerReturnToAddressRulesPriorities'];
        yield 'UpdateSellerRmaPreference'                  => ['UpdateSellerRmaPreference'];
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
