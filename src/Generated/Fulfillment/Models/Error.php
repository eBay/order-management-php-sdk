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

namespace EBay\OrderManagement\Generated\Fulfillment\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type contains a error or warning related to a call request. 
*/
class Error implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $category The context or source of this error or warning.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $domain The name of the domain containing the service or application. For example, <code>sell</code> is a domain.
    */
    private ?string $domain = null;
    
    /**
     * @var int|null $errorId A positive integer that uniquely identifies the specific error condition that occurred. Your application can use these values as error code identifiers in your customized error-handling algorithms.
    */
    private ?int $errorId = null;
    
    /**
     * @var array<string>|null $inputRefIds A list of one or more specific request elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
    */
    private ?array $inputRefIds = null;
    
    /**
     * @var string|null $longMessage An expanded version of the <b>message</b> field. <br><br><b>Maximum length:</b> 200 characters
    */
    private ?string $longMessage = null;
    
    /**
     * @var string|null $message A message about the error or warning which is device agnostic and readable by end users and application developers. It explains what the error or warning is, and how to fix it (in a general sense). If applicable, the value is localized to the end user's requested locale. <br><br><b>Maximum length:</b> 50 characters
    */
    private ?string $message = null;
    
    /**
     * @var array<string>|null $outputRefIds A list of one or more specific response elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
    */
    private ?array $outputRefIds = null;
    
    /**
     * @var array<ErrorParameter>|null $parameters Contains a list of name-value pairs that provide additional information concerning this error or warning. Each item in the list is an input parameter that contributed to the error or warning condition.
    */
    private ?array $parameters = null;
    
    /**
     * @var string|null $subdomain The name of the domain's subsystem or subdivision. For example, <code>fulfillment</code> is a subdomain in the <code>sell</code> domain.
    */
    private ?string $subdomain = null;
    
    /**
     * Instantiates a new Error and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Error
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Error {
        return new Error();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The context or source of this error or warning.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the domain property value. The name of the domain containing the service or application. For example, <code>sell</code> is a domain.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the errorId property value. A positive integer that uniquely identifies the specific error condition that occurred. Your application can use these values as error code identifiers in your customized error-handling algorithms.
     * @return int|null
    */
    public function getErrorId(): ?int {
        return $this->errorId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'errorId' => fn(ParseNode $n) => $o->setErrorId($n->getIntegerValue()),
            'inputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInputRefIds($val);
            },
            'longMessage' => fn(ParseNode $n) => $o->setLongMessage($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'outputRefIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOutputRefIds($val);
            },
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([ErrorParameter::class, 'createFromDiscriminatorValue'])),
            'subdomain' => fn(ParseNode $n) => $o->setSubdomain($n->getStringValue()),
        ];
    }

    /**
     * Gets the inputRefIds property value. A list of one or more specific request elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @return array<string>|null
    */
    public function getInputRefIds(): ?array {
        return $this->inputRefIds;
    }

    /**
     * Gets the longMessage property value. An expanded version of the <b>message</b> field. <br><br><b>Maximum length:</b> 200 characters
     * @return string|null
    */
    public function getLongMessage(): ?string {
        return $this->longMessage;
    }

    /**
     * Gets the message property value. A message about the error or warning which is device agnostic and readable by end users and application developers. It explains what the error or warning is, and how to fix it (in a general sense). If applicable, the value is localized to the end user's requested locale. <br><br><b>Maximum length:</b> 50 characters
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the outputRefIds property value. A list of one or more specific response elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @return array<string>|null
    */
    public function getOutputRefIds(): ?array {
        return $this->outputRefIds;
    }

    /**
     * Gets the parameters property value. Contains a list of name-value pairs that provide additional information concerning this error or warning. Each item in the list is an input parameter that contributed to the error or warning condition.
     * @return array<ErrorParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the subdomain property value. The name of the domain's subsystem or subdivision. For example, <code>fulfillment</code> is a subdomain in the <code>sell</code> domain.
     * @return string|null
    */
    public function getSubdomain(): ?string {
        return $this->subdomain;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeIntegerValue('errorId', $this->getErrorId());
        $writer->writeCollectionOfPrimitiveValues('inputRefIds', $this->getInputRefIds());
        $writer->writeStringValue('longMessage', $this->getLongMessage());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeCollectionOfPrimitiveValues('outputRefIds', $this->getOutputRefIds());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeStringValue('subdomain', $this->getSubdomain());
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
     * Sets the category property value. The context or source of this error or warning.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->category = $value;
    }

    /**
     * Sets the domain property value. The name of the domain containing the service or application. For example, <code>sell</code> is a domain.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->domain = $value;
    }

    /**
     * Sets the errorId property value. A positive integer that uniquely identifies the specific error condition that occurred. Your application can use these values as error code identifiers in your customized error-handling algorithms.
     * @param int|null $value Value to set for the errorId property.
    */
    public function setErrorId(?int $value): void {
        $this->errorId = $value;
    }

    /**
     * Sets the inputRefIds property value. A list of one or more specific request elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @param array<string>|null $value Value to set for the inputRefIds property.
    */
    public function setInputRefIds(?array $value): void {
        $this->inputRefIds = $value;
    }

    /**
     * Sets the longMessage property value. An expanded version of the <b>message</b> field. <br><br><b>Maximum length:</b> 200 characters
     * @param string|null $value Value to set for the longMessage property.
    */
    public function setLongMessage(?string $value): void {
        $this->longMessage = $value;
    }

    /**
     * Sets the message property value. A message about the error or warning which is device agnostic and readable by end users and application developers. It explains what the error or warning is, and how to fix it (in a general sense). If applicable, the value is localized to the end user's requested locale. <br><br><b>Maximum length:</b> 50 characters
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

    /**
     * Sets the outputRefIds property value. A list of one or more specific response elements (if any) associated with the error or warning. The format of these strings depends on the request payload format. For JSON, use JSONPath notation.
     * @param array<string>|null $value Value to set for the outputRefIds property.
    */
    public function setOutputRefIds(?array $value): void {
        $this->outputRefIds = $value;
    }

    /**
     * Sets the parameters property value. Contains a list of name-value pairs that provide additional information concerning this error or warning. Each item in the list is an input parameter that contributed to the error or warning condition.
     * @param array<ErrorParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->parameters = $value;
    }

    /**
     * Sets the subdomain property value. The name of the domain's subsystem or subdivision. For example, <code>fulfillment</code> is a subdomain in the <code>sell</code> domain.
     * @param string|null $value Value to set for the subdomain property.
    */
    public function setSubdomain(?string $value): void {
        $this->subdomain = $value;
    }

}
