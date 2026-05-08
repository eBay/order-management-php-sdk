<?php

declare(strict_types=1);

namespace EBay\OrderManagement\Tests\GraphQL;

use PHPUnit\Framework\TestCase;

class ReturnFixtureTest extends TestCase
{
    private static string $fixturesDir = __DIR__ . '/../../fixtures/Return';
    private static string $namespace = 'EBay\\OrderManagement\\GraphQL\\Types\\ReturnOperations';

    public static function fixtures(): iterable
    {
        yield 'AddListingsToReturnRuleListingGroup'        => ['AddListingsToReturnRuleListingGroup', 'addListingsToReturnRuleListingGroup'];
        yield 'AppendSellerReturnResponseRule'             => ['AppendSellerReturnResponseRule', 'appendSellerReturnResponseRule'];
        yield 'AppendSellerReturnToAddressRule'            => ['AppendSellerReturnToAddressRule', 'appendSellerReturnToAddressRule'];
        yield 'ApproveReturn'                              => ['ApproveReturn', 'approveReturn'];
        yield 'AttachReturnShipmentLabel'                  => ['AttachReturnShipmentLabel', 'attachReturnShipmentLabel'];
        yield 'CreateInStoreReturn'                        => ['CreateInStoreReturn', 'createInStoreReturn'];
        yield 'CreateReturnRuleListingGroup'               => ['CreateReturnRuleListingGroup', 'createReturnRuleListingGroup'];
        yield 'DeclineReturn'                              => ['DeclineReturn', 'declineReturn'];
        yield 'DeleteReturnRuleListingGroup'               => ['DeleteReturnRuleListingGroup', 'deleteReturnRuleListingGroup'];
        yield 'DeleteSellerReturnRule'                     => ['DeleteSellerReturnRule', 'deleteSellerReturnRule'];
        yield 'OrderReturn'                                => ['OrderReturn', 'orderReturn'];
        yield 'ProcessReturnRefund'                        => ['ProcessReturnRefund', 'processReturnRefund'];
        yield 'ProposeKeepItemWithPartialRefund'           => ['ProposeKeepItemWithPartialRefund', 'proposeKeepItemWithPartialRefund'];
        yield 'ProvideRmaNumber'                           => ['ProvideRmaNumber', 'provideRmaNumber'];
        yield 'RecordReturnLabelSentOffline'               => ['RecordReturnLabelSentOffline', 'recordReturnLabelSentOffline'];
        yield 'RecordReturnReceived'                       => ['RecordReturnReceived', 'recordReturnReceived'];
        yield 'ReturnRuleListingGroup'                     => ['ReturnRuleListingGroup', 'returnRuleListingGroup'];
        yield 'SellerOrderReturns'                         => ['SellerOrderReturns', 'sellerOrderReturns'];
        yield 'SellerReturnPreference'                     => ['SellerReturnPreference', 'sellerReturnPreference'];
        yield 'SendReturnMessage'                          => ['SendReturnMessage', 'sendReturnMessage'];
        yield 'SubmitReturnReferral'                       => ['SubmitReturnReferral', 'submitReturnReferral'];
        yield 'UpdateSellerReturnResponseRuleCondition'    => ['UpdateSellerReturnResponseRuleCondition', 'updateSellerReturnResponseRuleCondition'];
        yield 'UpdateSellerReturnResponseRulesPriorities'  => ['UpdateSellerReturnResponseRulesPriorities', 'updateSellerReturnResponseRulesPriorities'];
        yield 'UpdateSellerReturnRuleStatus'               => ['UpdateSellerReturnRuleStatus', 'updateSellerReturnRuleStatus'];
        yield 'UpdateSellerReturnToAddressRuleCondition'   => ['UpdateSellerReturnToAddressRuleCondition', 'updateSellerReturnToAddressRuleCondition'];
        yield 'UpdateSellerReturnToAddressRulesPriorities' => ['UpdateSellerReturnToAddressRulesPriorities', 'updateSellerReturnToAddressRulesPriorities'];
        yield 'UpdateSellerRmaPreference'                  => ['UpdateSellerRmaPreference', 'updateSellerRmaPreference'];
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
