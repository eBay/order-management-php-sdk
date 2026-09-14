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
 * This type is used by all containers that consist of text that is input by the buyer or seller.
*/
class Text implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $content This field displays the actual textual content in the language specified in the <b>language</b> field. This field is always used for containers using the <b>Text</b> type.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $language This two-letter code indicates the language used to display the content in the <b>content</b> field. The language will default to the language used on the eBay site if a specific language is not specified through the <b>Accept-Language</b> HTTP header. This field is always used for containers using the <b>Text</b> type.<br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
    */
    private ?string $language = null;
    
    /**
     * @var string|null $translatedFromContent If language translation/localization is required, this field displays the actual textual content in the language specified in the <b>translatedFromLanguage</b> field. If language translation was not required, this field is not applicable. 
    */
    private ?string $translatedFromContent = null;
    
    /**
     * @var string|null $translatedFromLanguage If language translation/localization is required, this two-letter code indicates the language used to display the content in the <b>translatedFromContent</b> field. If language translation was not required, this field is not applicable. <br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
    */
    private ?string $translatedFromLanguage = null;
    
    /**
     * Instantiates a new Text and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Text
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Text {
        return new Text();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. This field displays the actual textual content in the language specified in the <b>language</b> field. This field is always used for containers using the <b>Text</b> type.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'language' => fn(ParseNode $n) => $o->setLanguage($n->getStringValue()),
            'translatedFromContent' => fn(ParseNode $n) => $o->setTranslatedFromContent($n->getStringValue()),
            'translatedFromLanguage' => fn(ParseNode $n) => $o->setTranslatedFromLanguage($n->getStringValue()),
        ];
    }

    /**
     * Gets the language property value. This two-letter code indicates the language used to display the content in the <b>content</b> field. The language will default to the language used on the eBay site if a specific language is not specified through the <b>Accept-Language</b> HTTP header. This field is always used for containers using the <b>Text</b> type.<br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
     * @return string|null
    */
    public function getLanguage(): ?string {
        return $this->language;
    }

    /**
     * Gets the translatedFromContent property value. If language translation/localization is required, this field displays the actual textual content in the language specified in the <b>translatedFromLanguage</b> field. If language translation was not required, this field is not applicable. 
     * @return string|null
    */
    public function getTranslatedFromContent(): ?string {
        return $this->translatedFromContent;
    }

    /**
     * Gets the translatedFromLanguage property value. If language translation/localization is required, this two-letter code indicates the language used to display the content in the <b>translatedFromContent</b> field. If language translation was not required, this field is not applicable. <br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
     * @return string|null
    */
    public function getTranslatedFromLanguage(): ?string {
        return $this->translatedFromLanguage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('language', $this->getLanguage());
        $writer->writeStringValue('translatedFromContent', $this->getTranslatedFromContent());
        $writer->writeStringValue('translatedFromLanguage', $this->getTranslatedFromLanguage());
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
     * Sets the content property value. This field displays the actual textual content in the language specified in the <b>language</b> field. This field is always used for containers using the <b>Text</b> type.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the language property value. This two-letter code indicates the language used to display the content in the <b>content</b> field. The language will default to the language used on the eBay site if a specific language is not specified through the <b>Accept-Language</b> HTTP header. This field is always used for containers using the <b>Text</b> type.<br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
     * @param string|null $value Value to set for the language property.
    */
    public function setLanguage(?string $value): void {
        $this->language = $value;
    }

    /**
     * Sets the translatedFromContent property value. If language translation/localization is required, this field displays the actual textual content in the language specified in the <b>translatedFromLanguage</b> field. If language translation was not required, this field is not applicable. 
     * @param string|null $value Value to set for the translatedFromContent property.
    */
    public function setTranslatedFromContent(?string $value): void {
        $this->translatedFromContent = $value;
    }

    /**
     * Sets the translatedFromLanguage property value. If language translation/localization is required, this two-letter code indicates the language used to display the content in the <b>translatedFromContent</b> field. If language translation was not required, this field is not applicable. <br/><br/>The full list of language enumeration values are defined in the <a href="/devzone/post-order/types/LanguageEnum.html">LanguageEnum</a> type definition.
     * @param string|null $value Value to set for the translatedFromLanguage property.
    */
    public function setTranslatedFromLanguage(?string $value): void {
        $this->translatedFromLanguage = $value;
    }

}
