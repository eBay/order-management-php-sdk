<?php

namespace EBay\OrderManagement\GraphQL\Operations;

final class ReturnOperations
{
    public static function APPROVE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/Return/ApproveReturn.graphql');
    }

    public static function ATTACH_RETURN_SHIPMENT_LABEL(): string
    {
        return file_get_contents(__DIR__ . '/Return/AttachReturnShipmentLabel.graphql');
    }

    public static function DECLINE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/Return/DeclineReturn.graphql');
    }

    public static function ORDER_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/Return/OrderReturn.graphql');
    }

    public static function PROCESS_RETURN_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/Return/ProcessReturnRefund.graphql');
    }

    public static function PROPOSE_KEEP_ITEM_WITH_PARTIAL_REFUND(): string
    {
        return file_get_contents(__DIR__ . '/Return/ProposeKeepItemWithPartialRefund.graphql');
    }

    public static function PROVIDE_RMA_NUMBER(): string
    {
        return file_get_contents(__DIR__ . '/Return/ProvideRmaNumber.graphql');
    }

    public static function RECORD_RETURN_LABEL_SENT_OFFLINE(): string
    {
        return file_get_contents(__DIR__ . '/Return/RecordReturnLabelSentOffline.graphql');
    }

    public static function RECORD_RETURN_RECEIVED(): string
    {
        return file_get_contents(__DIR__ . '/Return/RecordReturnReceived.graphql');
    }

    public static function SELLER_ORDER_RETURNS(): string
    {
        return file_get_contents(__DIR__ . '/Return/SellerOrderReturns.graphql');
    }

    public static function SELLER_RETURN_PREFERENCE(): string
    {
        return file_get_contents(__DIR__ . '/Return/SellerReturnPreference.graphql');
    }

    public static function SEND_RETURN_MESSAGE(): string
    {
        return file_get_contents(__DIR__ . '/Return/SendReturnMessage.graphql');
    }

    public static function SUBMIT_RETURN_REFERRAL(): string
    {
        return file_get_contents(__DIR__ . '/Return/SubmitReturnReferral.graphql');
    }

    public static function UPDATE_SELLER_RMA_PREFERENCE(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerRmaPreference.graphql');
    }

    public static function CREATE_IN_STORE_RETURN(): string
    {
        return file_get_contents(__DIR__ . '/Return/CreateInStoreReturn.graphql');
    }

    public static function RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/Return/ReturnRuleListingGroup.graphql');
    }

    public static function CREATE_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/Return/CreateReturnRuleListingGroup.graphql');
    }

    public static function ADD_LISTINGS_TO_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/Return/AddListingsToReturnRuleListingGroup.graphql');
    }

    public static function DELETE_RETURN_RULE_LISTING_GROUP(): string
    {
        return file_get_contents(__DIR__ . '/Return/DeleteReturnRuleListingGroup.graphql');
    }

    public static function DELETE_SELLER_RETURN_RULE(): string
    {
        return file_get_contents(__DIR__ . '/Return/DeleteSellerReturnRule.graphql');
    }

    public static function APPEND_SELLER_RETURN_RESPONSE_RULE(): string
    {
        return file_get_contents(__DIR__ . '/Return/AppendSellerReturnResponseRule.graphql');
    }

    public static function APPEND_SELLER_RETURN_TO_ADDRESS_RULE(): string
    {
        return file_get_contents(__DIR__ . '/Return/AppendSellerReturnToAddressRule.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULE_CONDITION(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerReturnResponseRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RESPONSE_RULES_PRIORITIES(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerReturnResponseRulesPriorities.graphql');
    }

    public static function UPDATE_SELLER_RETURN_RULE_STATUS(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerReturnRuleStatus.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULE_CONDITION(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerReturnToAddressRuleCondition.graphql');
    }

    public static function UPDATE_SELLER_RETURN_TO_ADDRESS_RULES_PRIORITIES(): string
    {
        return file_get_contents(__DIR__ . '/Return/UpdateSellerReturnToAddressRulesPriorities.graphql');
    }
}
