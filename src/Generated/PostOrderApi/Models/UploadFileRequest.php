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
 * The base request type for the <b>POST /post-order/v2/return/{returnId}/file/upload</b> and <b>POST /post-order/v2/return/draft/{draftId}/file/upload</b> methods.
*/
class UploadFileRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $data The input for this field is a base64-encoded binary representation of the file you are uploading.<br/><br/>For images, the system accepts BMP, GIF, JPEG, and PNG files. For shipping labels, the system accepts either an image (BMP, GIF, JPEG, and PNG files) or a PDF file.<p class="tablenote"><b>Note:</b> The <b>data</b> field supports single-time base64 encoding. For backward compatibility, the data field also presently supports double base64 encoding.</p>
    */
    private ?string $data = null;
    
    /**
     * @var string|null $fileName This field is used to name the file that is being uploaded. Naming a file may make it easier for the buyer or seller to keep track of their files, instead of having to remember the <b>fileId</b> value (which is returned in the response) of each file.
    */
    private ?string $fileName = null;
    
    /**
     * Instantiates a new UploadFileRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UploadFileRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UploadFileRequest {
        return new UploadFileRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the data property value. The input for this field is a base64-encoded binary representation of the file you are uploading.<br/><br/>For images, the system accepts BMP, GIF, JPEG, and PNG files. For shipping labels, the system accepts either an image (BMP, GIF, JPEG, and PNG files) or a PDF file.<p class="tablenote"><b>Note:</b> The <b>data</b> field supports single-time base64 encoding. For backward compatibility, the data field also presently supports double base64 encoding.</p>
     * @return string|null
    */
    public function getData(): ?string {
        return $this->data;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getStringValue()),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. This field is used to name the file that is being uploaded. Naming a file may make it easier for the buyer or seller to keep track of their files, instead of having to remember the <b>fileId</b> value (which is returned in the response) of each file.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('data', $this->getData());
        $writer->writeStringValue('fileName', $this->getFileName());
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
     * Sets the data property value. The input for this field is a base64-encoded binary representation of the file you are uploading.<br/><br/>For images, the system accepts BMP, GIF, JPEG, and PNG files. For shipping labels, the system accepts either an image (BMP, GIF, JPEG, and PNG files) or a PDF file.<p class="tablenote"><b>Note:</b> The <b>data</b> field supports single-time base64 encoding. For backward compatibility, the data field also presently supports double base64 encoding.</p>
     * @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value): void {
        $this->data = $value;
    }

    /**
     * Sets the fileName property value. This field is used to name the file that is being uploaded. Naming a file may make it easier for the buyer or seller to keep track of their files, instead of having to remember the <b>fileId</b> value (which is returned in the response) of each file.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->fileName = $value;
    }

}
