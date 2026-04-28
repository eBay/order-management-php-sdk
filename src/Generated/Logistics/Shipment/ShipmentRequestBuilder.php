<?php

namespace EBay\OrderManagement\Generated\Logistics\Shipment;

use EBay\OrderManagement\Generated\Logistics\Shipment\Create_from_shipping_quote\Create_from_shipping_quoteRequestBuilder;
use EBay\OrderManagement\Generated\Logistics\Shipment\Item\WithShipmentItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /shipment
*/
class ShipmentRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The create_from_shipping_quote property
    */
    public function create_from_shipping_quote(): Create_from_shipping_quoteRequestBuilder {
        return new Create_from_shipping_quoteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/OrderManagement/Generated/Logistics.shipment.item collection
     * @param string $shipmentId This path parameter specifies the unique eBay-assigned identifier of the shipment you want to retrieve.<br><br>The <b>shipmentId</b> value is generated and returned by the <a href="/api-docs/sell/logistics/resources/shipment/methods/createFromShippingQuote" target="_blank">createFromShippingQuote</a> method.
     * @return WithShipmentItemRequestBuilder
    */
    public function byShipmentId(string $shipmentId): WithShipmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['shipmentId'] = $shipmentId;
        return new WithShipmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ShipmentRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shipment');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
