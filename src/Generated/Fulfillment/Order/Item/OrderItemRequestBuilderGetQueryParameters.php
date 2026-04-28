<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Order\Item;

/**
 * Use this call to retrieve the contents of an order based on its unique identifier, <i>orderId</i>. This value was returned in the <b> getOrders</b> call's <b>orders.orderId</b> field when you searched for orders by creation date, modification date, or fulfillment status. Include the optional <b>fieldGroups</b> query parameter set to <code>TAX_BREAKDOWN</code> to return a breakdown of the taxes and fees. <br><br> The returned <b>Order</b> object contains information you can use to create and process fulfillments, including: <ul> <li>Information about the buyer and seller</li> <li>Information about the order's line items</li> <li> The plans for packaging, addressing and shipping the order</li> <li>The status of payment, packaging, addressing, and shipping the order</li> <li>A summary of monetary amounts specific to the order such as pricing, payments, and shipping costs</li> <li>A summary of applied taxes and fees, and optionally a breakdown of each </li></ul>
*/
class OrderItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><b>Note:</b> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
    */
    public ?string $fieldGroups = null;
    
    /**
     * Instantiates a new OrderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $fieldGroups This parameter lets you control what is returned in the response.<br><br><span class="tablenote"><b>Note:</b> The only presently supported value is <code>TAX_BREAKDOWN</code>. This field group adds addition fields to the response that return a breakdown of taxes and fees.</span>
    */
    public function __construct(?string $fieldGroups = null) {
        $this->fieldGroups = $fieldGroups;
    }

}
