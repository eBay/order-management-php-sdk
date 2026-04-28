<?php

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type contains information about a hold placed on a payment to a seller for an order, including the reason why the buyer's payment for the order is being held, the expected release date of the funds into the seller's account, the current state of the hold, and the actual release date if the payment has been released, and possible actions the seller can take to expedite the payout of funds into their account.
*/
class PaymentHold implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $expectedReleaseDate The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $expectedReleaseDate = null;
    
    /**
     * @var Amount|null $holdAmount This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
    */
    private ?Amount $holdAmount = null;
    
    /**
     * @var string|null $holdReason The reason that the payment is being held. A seller's payment may be held for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as described' case is pending against the seller. This field is always returned with the <strong>paymentHolds</strong> array.
    */
    private ?string $holdReason = null;
    
    /**
     * @var string|null $holdState The current stage or condition of the hold. This field is always returned with the <strong>paymentHolds</strong> array.<br><br><b>Applicable values:</b><ul><li><code>HELD</code></li><li><code>HELD_PENDING</code></li><li><code>NOT_HELD</code></li><li><code>RELEASE_CONFIRMED</code></li><li><code>RELEASE_FAILED</code></li><li><code>RELEASE_PENDING</code></li><li><code>RELEASED</code></li></ul>
    */
    private ?string $holdState = null;
    
    /**
     * @var string|null $releaseDate The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller's payment is actually released into the seller's account.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
    */
    private ?string $releaseDate = null;
    
    /**
     * @var array<SellerActionsToRelease>|null $sellerActionsToRelease A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
    */
    private ?array $sellerActionsToRelease = null;
    
    /**
     * Instantiates a new PaymentHold and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaymentHold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaymentHold {
        return new PaymentHold();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the expectedReleaseDate property value. The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getExpectedReleaseDate(): ?string {
        return $this->expectedReleaseDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expectedReleaseDate' => fn(ParseNode $n) => $o->setExpectedReleaseDate($n->getStringValue()),
            'holdAmount' => fn(ParseNode $n) => $o->setHoldAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'holdReason' => fn(ParseNode $n) => $o->setHoldReason($n->getStringValue()),
            'holdState' => fn(ParseNode $n) => $o->setHoldState($n->getStringValue()),
            'releaseDate' => fn(ParseNode $n) => $o->setReleaseDate($n->getStringValue()),
            'sellerActionsToRelease' => fn(ParseNode $n) => $o->setSellerActionsToRelease($n->getCollectionOfObjectValues([SellerActionsToRelease::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the holdAmount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @return Amount|null
    */
    public function getHoldAmount(): ?Amount {
        return $this->holdAmount;
    }

    /**
     * Gets the holdReason property value. The reason that the payment is being held. A seller's payment may be held for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as described' case is pending against the seller. This field is always returned with the <strong>paymentHolds</strong> array.
     * @return string|null
    */
    public function getHoldReason(): ?string {
        return $this->holdReason;
    }

    /**
     * Gets the holdState property value. The current stage or condition of the hold. This field is always returned with the <strong>paymentHolds</strong> array.<br><br><b>Applicable values:</b><ul><li><code>HELD</code></li><li><code>HELD_PENDING</code></li><li><code>NOT_HELD</code></li><li><code>RELEASE_CONFIRMED</code></li><li><code>RELEASE_FAILED</code></li><li><code>RELEASE_PENDING</code></li><li><code>RELEASED</code></li></ul>
     * @return string|null
    */
    public function getHoldState(): ?string {
        return $this->holdState;
    }

    /**
     * Gets the releaseDate property value. The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller's payment is actually released into the seller's account.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @return string|null
    */
    public function getReleaseDate(): ?string {
        return $this->releaseDate;
    }

    /**
     * Gets the sellerActionsToRelease property value. A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
     * @return array<SellerActionsToRelease>|null
    */
    public function getSellerActionsToRelease(): ?array {
        return $this->sellerActionsToRelease;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expectedReleaseDate', $this->getExpectedReleaseDate());
        $writer->writeObjectValue('holdAmount', $this->getHoldAmount());
        $writer->writeStringValue('holdReason', $this->getHoldReason());
        $writer->writeStringValue('holdState', $this->getHoldState());
        $writer->writeStringValue('releaseDate', $this->getReleaseDate());
        $writer->writeCollectionOfObjectValues('sellerActionsToRelease', $this->getSellerActionsToRelease());
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
     * Sets the expectedReleaseDate property value. The date and time that the payment being held is expected to be released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field will be returned if known by eBay. <br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the expectedReleaseDate property.
    */
    public function setExpectedReleaseDate(?string $value): void {
        $this->expectedReleaseDate = $value;
    }

    /**
     * Sets the holdAmount property value. This type defines the monetary value of an amount. It can provide the amount in both the currency used on the eBay site where an item is being offered and the conversion of that value into another currency, if applicable.
     * @param Amount|null $value Value to set for the holdAmount property.
    */
    public function setHoldAmount(?Amount $value): void {
        $this->holdAmount = $value;
    }

    /**
     * Sets the holdReason property value. The reason that the payment is being held. A seller's payment may be held for a number of reasons, including when the seller is new, the seller's level is below standard, or if a return case or 'Significantly not as described' case is pending against the seller. This field is always returned with the <strong>paymentHolds</strong> array.
     * @param string|null $value Value to set for the holdReason property.
    */
    public function setHoldReason(?string $value): void {
        $this->holdReason = $value;
    }

    /**
     * Sets the holdState property value. The current stage or condition of the hold. This field is always returned with the <strong>paymentHolds</strong> array.<br><br><b>Applicable values:</b><ul><li><code>HELD</code></li><li><code>HELD_PENDING</code></li><li><code>NOT_HELD</code></li><li><code>RELEASE_CONFIRMED</code></li><li><code>RELEASE_FAILED</code></li><li><code>RELEASE_PENDING</code></li><li><code>RELEASED</code></li></ul>
     * @param string|null $value Value to set for the holdState property.
    */
    public function setHoldState(?string $value): void {
        $this->holdState = $value;
    }

    /**
     * Sets the releaseDate property value. The date and time that the payment being held was actually released to the seller. This timestamp is in ISO 8601 format, which uses the 24-hour Universal Coordinated Time (UTC) clock. This field is not returned until the seller's payment is actually released into the seller's account.<br><br><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code> <br><b>Example:</b> <code>2015-08-04T19:09:02.768Z</code>
     * @param string|null $value Value to set for the releaseDate property.
    */
    public function setReleaseDate(?string $value): void {
        $this->releaseDate = $value;
    }

    /**
     * Sets the sellerActionsToRelease property value. A list of one or more possible actions that the seller can take to expedite the release of the payment hold.
     * @param array<SellerActionsToRelease>|null $value Value to set for the sellerActionsToRelease property.
    */
    public function setSellerActionsToRelease(?array $value): void {
        $this->sellerActionsToRelease = $value;
    }

}
