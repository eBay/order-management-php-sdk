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

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base request type of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
*/
class ProvideLabelRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $carrierEnum One of the values defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition must be used in this field to indicate the shipping carrier that will be used to ship the return item. This field is conditionally required if the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method is being used to initiate an eBay shipping label. Otherwise, the <b>carrierName</b> field can be used to indicate which shipping carrier will be used. <br/><br/>Note that the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type defines enumeration values for some popular shipping carriers for the US, UK, Germany, Canada, and Australia, but it is not a complete global list. 
    */
    private ?string $carrierEnum = null;
    
    /**
     * @var string|null $carrierName This field is used to show the name of the shipping carrier.
    */
    private ?string $carrierName = null;
    
    /**
     * @var Text|null $comments This type is used by all containers that consist of text that is input by the buyer or seller.
    */
    private ?Text $comments = null;
    
    /**
     * @var string|null $fileId The unique ID of a file attached to the return request. This field may be used if the seller has associated a shipping label related file to the return request.
    */
    private ?string $fileId = null;
    
    /**
     * @var bool|null $forwardShippingLabelProvided This field should be provided and set to <code>true</code> if the seller has already provided the buyer with a return shipping label. This field is generally provided if the <b>labelAction</b> value is set to <code>MARK_AS_SENT</code>.
    */
    private ?bool $forwardShippingLabelProvided = null;
    
    /**
     * @var LabelActionEnum|null $labelAction This enumerated type lists the actions that may be specified in the <b>labelAction</b> field in the request of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
    */
    private ?LabelActionEnum $labelAction = null;
    
    /**
     * @var DateTime|null $labelSentDate This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
    */
    private ?DateTime $labelSentDate = null;
    
    /**
     * @var NoSellerUploadLabelReasonEnum|null $noLabelReason This enumerated type lists the possible values that a seller  can provide in the <b>noLabelReason</b> field of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> to indicate the reason why a shipping label is not being supplied to the buyer.
    */
    private ?NoSellerUploadLabelReasonEnum $noLabelReason = null;
    
    /**
     * @var Amount|null $returnLabelCost This type is used to expressed dollar amounts and the currency used.
    */
    private ?Amount $returnLabelCost = null;
    
    /**
     * @var string|null $trackingNumber The tracking number on the shipping label. If providing the tracking number, the shipping carrier must also be provided through the <b>carrierEnum</b> field.
    */
    private ?string $trackingNumber = null;
    
    /**
     * Instantiates a new ProvideLabelRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProvideLabelRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProvideLabelRequest {
        return new ProvideLabelRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the carrierEnum property value. One of the values defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition must be used in this field to indicate the shipping carrier that will be used to ship the return item. This field is conditionally required if the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method is being used to initiate an eBay shipping label. Otherwise, the <b>carrierName</b> field can be used to indicate which shipping carrier will be used. <br/><br/>Note that the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type defines enumeration values for some popular shipping carriers for the US, UK, Germany, Canada, and Australia, but it is not a complete global list. 
     * @return string|null
    */
    public function getCarrierEnum(): ?string {
        return $this->carrierEnum;
    }

    /**
     * Gets the carrierName property value. This field is used to show the name of the shipping carrier.
     * @return string|null
    */
    public function getCarrierName(): ?string {
        return $this->carrierName;
    }

    /**
     * Gets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @return Text|null
    */
    public function getComments(): ?Text {
        return $this->comments;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'carrierEnum' => fn(ParseNode $n) => $o->setCarrierEnum($n->getStringValue()),
            'carrierName' => fn(ParseNode $n) => $o->setCarrierName($n->getStringValue()),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getObjectValue([Text::class, 'createFromDiscriminatorValue'])),
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
            'forwardShippingLabelProvided' => fn(ParseNode $n) => $o->setForwardShippingLabelProvided($n->getBooleanValue()),
            'labelAction' => fn(ParseNode $n) => $o->setLabelAction($n->getEnumValue(LabelActionEnum::class)),
            'labelSentDate' => fn(ParseNode $n) => $o->setLabelSentDate($n->getDateTimeValue()),
            'noLabelReason' => fn(ParseNode $n) => $o->setNoLabelReason($n->getEnumValue(NoSellerUploadLabelReasonEnum::class)),
            'returnLabelCost' => fn(ParseNode $n) => $o->setReturnLabelCost($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'trackingNumber' => fn(ParseNode $n) => $o->setTrackingNumber($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. The unique ID of a file attached to the return request. This field may be used if the seller has associated a shipping label related file to the return request.
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->fileId;
    }

    /**
     * Gets the forwardShippingLabelProvided property value. This field should be provided and set to <code>true</code> if the seller has already provided the buyer with a return shipping label. This field is generally provided if the <b>labelAction</b> value is set to <code>MARK_AS_SENT</code>.
     * @return bool|null
    */
    public function getForwardShippingLabelProvided(): ?bool {
        return $this->forwardShippingLabelProvided;
    }

    /**
     * Gets the labelAction property value. This enumerated type lists the actions that may be specified in the <b>labelAction</b> field in the request of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
     * @return LabelActionEnum|null
    */
    public function getLabelAction(): ?LabelActionEnum {
        return $this->labelAction;
    }

    /**
     * Gets the labelSentDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @return DateTime|null
    */
    public function getLabelSentDate(): ?DateTime {
        return $this->labelSentDate;
    }

    /**
     * Gets the noLabelReason property value. This enumerated type lists the possible values that a seller  can provide in the <b>noLabelReason</b> field of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> to indicate the reason why a shipping label is not being supplied to the buyer.
     * @return NoSellerUploadLabelReasonEnum|null
    */
    public function getNoLabelReason(): ?NoSellerUploadLabelReasonEnum {
        return $this->noLabelReason;
    }

    /**
     * Gets the returnLabelCost property value. This type is used to expressed dollar amounts and the currency used.
     * @return Amount|null
    */
    public function getReturnLabelCost(): ?Amount {
        return $this->returnLabelCost;
    }

    /**
     * Gets the trackingNumber property value. The tracking number on the shipping label. If providing the tracking number, the shipping carrier must also be provided through the <b>carrierEnum</b> field.
     * @return string|null
    */
    public function getTrackingNumber(): ?string {
        return $this->trackingNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('carrierEnum', $this->getCarrierEnum());
        $writer->writeStringValue('carrierName', $this->getCarrierName());
        $writer->writeObjectValue('comments', $this->getComments());
        $writer->writeStringValue('fileId', $this->getFileId());
        $writer->writeBooleanValue('forwardShippingLabelProvided', $this->getForwardShippingLabelProvided());
        $writer->writeEnumValue('labelAction', $this->getLabelAction());
        $writer->writeDateTimeValue('labelSentDate', $this->getLabelSentDate());
        $writer->writeEnumValue('noLabelReason', $this->getNoLabelReason());
        $writer->writeObjectValue('returnLabelCost', $this->getReturnLabelCost());
        $writer->writeStringValue('trackingNumber', $this->getTrackingNumber());
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
     * Sets the carrierEnum property value. One of the values defined in the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type definition must be used in this field to indicate the shipping carrier that will be used to ship the return item. This field is conditionally required if the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method is being used to initiate an eBay shipping label. Otherwise, the <b>carrierName</b> field can be used to indicate which shipping carrier will be used. <br/><br/>Note that the <a href="/devzone/post-order/types/ShippingCarrierEnum.html">ShippingCarrierEnum</a> type defines enumeration values for some popular shipping carriers for the US, UK, Germany, Canada, and Australia, but it is not a complete global list. 
     * @param string|null $value Value to set for the carrierEnum property.
    */
    public function setCarrierEnum(?string $value): void {
        $this->carrierEnum = $value;
    }

    /**
     * Sets the carrierName property value. This field is used to show the name of the shipping carrier.
     * @param string|null $value Value to set for the carrierName property.
    */
    public function setCarrierName(?string $value): void {
        $this->carrierName = $value;
    }

    /**
     * Sets the comments property value. This type is used by all containers that consist of text that is input by the buyer or seller.
     * @param Text|null $value Value to set for the comments property.
    */
    public function setComments(?Text $value): void {
        $this->comments = $value;
    }

    /**
     * Sets the fileId property value. The unique ID of a file attached to the return request. This field may be used if the seller has associated a shipping label related file to the return request.
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->fileId = $value;
    }

    /**
     * Sets the forwardShippingLabelProvided property value. This field should be provided and set to <code>true</code> if the seller has already provided the buyer with a return shipping label. This field is generally provided if the <b>labelAction</b> value is set to <code>MARK_AS_SENT</code>.
     * @param bool|null $value Value to set for the forwardShippingLabelProvided property.
    */
    public function setForwardShippingLabelProvided(?bool $value): void {
        $this->forwardShippingLabelProvided = $value;
    }

    /**
     * Sets the labelAction property value. This enumerated type lists the actions that may be specified in the <b>labelAction</b> field in the request of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> method.
     * @param LabelActionEnum|null $value Value to set for the labelAction property.
    */
    public function setLabelAction(?LabelActionEnum $value): void {
        $this->labelAction = $value;
    }

    /**
     * Sets the labelSentDate property value. This type is used by all fields that require a timestamp, both in UTC and as a formatted value.
     * @param DateTime|null $value Value to set for the labelSentDate property.
    */
    public function setLabelSentDate(?DateTime $value): void {
        $this->labelSentDate = $value;
    }

    /**
     * Sets the noLabelReason property value. This enumerated type lists the possible values that a seller  can provide in the <b>noLabelReason</b> field of the <b>POST /post-order/v2/return/{returnId}/add_shipping_label</b> to indicate the reason why a shipping label is not being supplied to the buyer.
     * @param NoSellerUploadLabelReasonEnum|null $value Value to set for the noLabelReason property.
    */
    public function setNoLabelReason(?NoSellerUploadLabelReasonEnum $value): void {
        $this->noLabelReason = $value;
    }

    /**
     * Sets the returnLabelCost property value. This type is used to expressed dollar amounts and the currency used.
     * @param Amount|null $value Value to set for the returnLabelCost property.
    */
    public function setReturnLabelCost(?Amount $value): void {
        $this->returnLabelCost = $value;
    }

    /**
     * Sets the trackingNumber property value. The tracking number on the shipping label. If providing the tracking number, the shipping carrier must also be provided through the <b>carrierEnum</b> field.
     * @param string|null $value Value to set for the trackingNumber property.
    */
    public function setTrackingNumber(?string $value): void {
        $this->trackingNumber = $value;
    }

}
