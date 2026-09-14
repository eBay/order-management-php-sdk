<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\OrderManagement\Generated\PostOrderApi\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used to provide the history of events associated with an INR inquiry or a case.
*/
class ClaimHistoryResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ClaimHistoryEventModel>|null $history This array contains one or more events or actions associated with an INR inquiry or a case.
    */
    private ?array $history = null;
    
    /**
     * @var ShipmentTrackingDetailType|null $shipmentTrackingDetails This type is used to show detailed shipment tracking information if an INR item is being shipped to the buyer, or if the buyer is returning an item to the seller.
    */
    private ?ShipmentTrackingDetailType $shipmentTrackingDetails = null;
    
    /**
     * Instantiates a new ClaimHistoryResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClaimHistoryResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClaimHistoryResponse {
        return new ClaimHistoryResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'history' => fn(ParseNode $n) => $o->setHistory($n->getCollectionOfObjectValues([ClaimHistoryEventModel::class, 'createFromDiscriminatorValue'])),
            'shipmentTrackingDetails' => fn(ParseNode $n) => $o->setShipmentTrackingDetails($n->getObjectValue([ShipmentTrackingDetailType::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the history property value. This array contains one or more events or actions associated with an INR inquiry or a case.
     * @return array<ClaimHistoryEventModel>|null
    */
    public function getHistory(): ?array {
        return $this->history;
    }

    /**
     * Gets the shipmentTrackingDetails property value. This type is used to show detailed shipment tracking information if an INR item is being shipped to the buyer, or if the buyer is returning an item to the seller.
     * @return ShipmentTrackingDetailType|null
    */
    public function getShipmentTrackingDetails(): ?ShipmentTrackingDetailType {
        return $this->shipmentTrackingDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('history', $this->getHistory());
        $writer->writeObjectValue('shipmentTrackingDetails', $this->getShipmentTrackingDetails());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the history property value. This array contains one or more events or actions associated with an INR inquiry or a case.
     * @param array<ClaimHistoryEventModel>|null $value Value to set for the history property.
    */
    public function setHistory(?array $value): void {
        $this->history = $value;
    }

    /**
     * Sets the shipmentTrackingDetails property value. This type is used to show detailed shipment tracking information if an INR item is being shipped to the buyer, or if the buyer is returning an item to the seller.
     * @param ShipmentTrackingDetailType|null $value Value to set for the shipmentTrackingDetails property.
    */
    public function setShipmentTrackingDetails(?ShipmentTrackingDetailType $value): void {
        $this->shipmentTrackingDetails = $value;
    }

}
