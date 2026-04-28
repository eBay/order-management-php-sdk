<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type is used by the <strong>taxIdentifier</strong> container that is returned in <strong>getOrder</strong>. The <strong>taxIdentifier</strong> container consists of taxpayer identification information for buyers from Italy, Spain, or Guatemala. It is currently only returned for orders occurring on the eBay Italy or eBay Spain marketplaces.<br><br><span class="tablenote"><strong>Note:</strong> Currently, the <strong>taxIdentifier</strong> container is only returned in <strong>getOrder</strong> and not in <strong>getOrders</strong>. So, if a seller wanted to view a buyer's tax information for a particular order returned in <strong>getOrders</strong>, that seller would need to use the <strong>orderId</strong> value for that particular order, and then run a <strong>getOrder</strong> call against that order ID. </span>
*/
class TaxIdentifier implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $issuingCountry This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type, or in the  <a href="https://www.iso.org/iso-3166-country-codes.html ">ISO 3166</a> standard. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
    */
    private ?string $issuingCountry = null;
    
    /**
     * @var string|null $taxIdentifierType This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxIdentifierTypeEnum'>eBay API documentation</a>
    */
    private ?string $taxIdentifierType = null;
    
    /**
     * @var string|null $taxpayerId This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
    */
    private ?string $taxpayerId = null;
    
    /**
     * Instantiates a new TaxIdentifier and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaxIdentifier
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaxIdentifier {
        return new TaxIdentifier();
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
            'issuingCountry' => fn(ParseNode $n) => $o->setIssuingCountry($n->getStringValue()),
            'taxIdentifierType' => fn(ParseNode $n) => $o->setTaxIdentifierType($n->getStringValue()),
            'taxpayerId' => fn(ParseNode $n) => $o->setTaxpayerId($n->getStringValue()),
        ];
    }

    /**
     * Gets the issuingCountry property value. This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type, or in the  <a href="https://www.iso.org/iso-3166-country-codes.html ">ISO 3166</a> standard. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getIssuingCountry(): ?string {
        return $this->issuingCountry;
    }

    /**
     * Gets the taxIdentifierType property value. This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxIdentifierTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getTaxIdentifierType(): ?string {
        return $this->taxIdentifierType;
    }

    /**
     * Gets the taxpayerId property value. This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
     * @return string|null
    */
    public function getTaxpayerId(): ?string {
        return $this->taxpayerId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('issuingCountry', $this->getIssuingCountry());
        $writer->writeStringValue('taxIdentifierType', $this->getTaxIdentifierType());
        $writer->writeStringValue('taxpayerId', $this->getTaxpayerId());
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
     * Sets the issuingCountry property value. This two-letter code indicates the country that issued the buyer's tax ID. The country that the two-letter code represents can be found in the <strong>CountryCodeEnum</strong> type, or in the  <a href="https://www.iso.org/iso-3166-country-codes.html ">ISO 3166</a> standard. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/ba:CountryCodeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the issuingCountry property.
    */
    public function setIssuingCountry(?string $value): void {
        $this->issuingCountry = $value;
    }

    /**
     * Sets the taxIdentifierType property value. This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the <strong>TaxIdentifierTypeEnum</strong> type. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/fulfillment/types/sel:TaxIdentifierTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the taxIdentifierType property.
    */
    public function setTaxIdentifierType(?string $value): void {
        $this->taxIdentifierType = $value;
    }

    /**
     * Sets the taxpayerId property value. This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the <strong>taxIdentifierType</strong> field.
     * @param string|null $value Value to set for the taxpayerId property.
    */
    public function setTaxpayerId(?string $value): void {
        $this->taxpayerId = $value;
    }

}
