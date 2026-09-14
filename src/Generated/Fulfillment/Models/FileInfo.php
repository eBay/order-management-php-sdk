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

/**
 * This type is used by the <strong>files</strong> array, which shows the name, ID, file type, and upload date for each provided evidential file.
*/
class FileInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $fileId The unique identifier of the evidence file.
    */
    private ?string $fileId = null;
    
    /**
     * @var string|null $fileType The type of file uploaded. Supported file extensions are .JPEG, .JPG, and .PNG., and maximum file size allowed is 1.5 MB.
    */
    private ?string $fileType = null;
    
    /**
     * @var string|null $name The seller-provided name of the evidence file.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $uploadedDate The timestamp in this field shows the date/time when the seller uploaded the evidential document to eBay. <br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
    */
    private ?string $uploadedDate = null;
    
    /**
     * Instantiates a new FileInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileInfo {
        return new FileInfo();
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
            'fileId' => fn(ParseNode $n) => $o->setFileId($n->getStringValue()),
            'fileType' => fn(ParseNode $n) => $o->setFileType($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'uploadedDate' => fn(ParseNode $n) => $o->setUploadedDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileId property value. The unique identifier of the evidence file.
     * @return string|null
    */
    public function getFileId(): ?string {
        return $this->fileId;
    }

    /**
     * Gets the fileType property value. The type of file uploaded. Supported file extensions are .JPEG, .JPG, and .PNG., and maximum file size allowed is 1.5 MB.
     * @return string|null
    */
    public function getFileType(): ?string {
        return $this->fileType;
    }

    /**
     * Gets the name property value. The seller-provided name of the evidence file.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the uploadedDate property value. The timestamp in this field shows the date/time when the seller uploaded the evidential document to eBay. <br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @return string|null
    */
    public function getUploadedDate(): ?string {
        return $this->uploadedDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileId', $this->getFileId());
        $writer->writeStringValue('fileType', $this->getFileType());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('uploadedDate', $this->getUploadedDate());
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
     * Sets the fileId property value. The unique identifier of the evidence file.
     * @param string|null $value Value to set for the fileId property.
    */
    public function setFileId(?string $value): void {
        $this->fileId = $value;
    }

    /**
     * Sets the fileType property value. The type of file uploaded. Supported file extensions are .JPEG, .JPG, and .PNG., and maximum file size allowed is 1.5 MB.
     * @param string|null $value Value to set for the fileType property.
    */
    public function setFileType(?string $value): void {
        $this->fileType = $value;
    }

    /**
     * Sets the name property value. The seller-provided name of the evidence file.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

    /**
     * Sets the uploadedDate property value. The timestamp in this field shows the date/time when the seller uploaded the evidential document to eBay. <br><br>The timestamps returned here use the <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org " target="_blank">ISO&nbsp;8601</a> 24-hour date and time format, and the time zone used is Universal Coordinated Time (UTC), also known as Greenwich Mean Time (GMT), or Zulu. The ISO 8601 format looks like this: <em>yyyy-MM-ddThh:mm.ss.sssZ</em>. An example would be <code>2019-08-04T19:09:02.768Z</code>.
     * @param string|null $value Value to set for the uploadedDate property.
    */
    public function setUploadedDate(?string $value): void {
        $this->uploadedDate = $value;
    }

}
