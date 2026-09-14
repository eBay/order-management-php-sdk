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
 * This type contains information about the pagination of a  response payload. The entries (data records) returned by the request are grouped into <i>pages</i>, which are limited in size according to the number of entries per page as specified by the <b>limit</b> field.
*/
class PaginationOutput implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $limit The maximum number of entries to return per request. This value is set through the <b>limit</b> query parameter in the request (or the default value is used if this query parameter is omitted). <br/><br/>The value of the <b>totalEntries</b> field divided by the value of this field determines the value of the <b>totalPages</b> field. 
    */
    private ?int $limit = null;
    
    /**
     * @var int|null $offset The offset value indicates the number of entries to skip in the results set before returning the first entry in the paginated response. The <b>offset</b> query parameter is paired with the <b>limit</b> query parameter to control the number of entries returned in the response, and which entries appear on that page of data. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 entries from the results set. If the <b>offset</b> was set to <code>10</code> and the <b>limit</b> was set to <code>20</code>, the first page of the results set would contain entries 11-30. <br/><br/>The <b>offset</b> value defaults to <code>0</code> if the <b>offset</b> query parameter is omitted from the request.
    */
    private ?int $offset = null;
    
    /**
     * @var int|null $totalEntries The total number of entries that match the current input criteria of the request. This value divided by the value of the <b>limit</b> field determines the value of the <b>totalPages</b> field.
    */
    private ?int $totalEntries = null;
    
    /**
     * @var int|null $totalPages The total number of pages of entries that match the current input criteria of the request.  <br/><br/>This value is determined by dividing the value of the <b>totalEntries</b> field by the value of the <b>limit</b> field. If <b>totalPages</b> is more than <code>1</code>, subsequent calls must be used to view subsequent pages in the results set.
    */
    private ?int $totalPages = null;
    
    /**
     * Instantiates a new PaginationOutput and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PaginationOutput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PaginationOutput {
        return new PaginationOutput();
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
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'totalEntries' => fn(ParseNode $n) => $o->setTotalEntries($n->getIntegerValue()),
            'totalPages' => fn(ParseNode $n) => $o->setTotalPages($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the limit property value. The maximum number of entries to return per request. This value is set through the <b>limit</b> query parameter in the request (or the default value is used if this query parameter is omitted). <br/><br/>The value of the <b>totalEntries</b> field divided by the value of this field determines the value of the <b>totalPages</b> field. 
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the offset property value. The offset value indicates the number of entries to skip in the results set before returning the first entry in the paginated response. The <b>offset</b> query parameter is paired with the <b>limit</b> query parameter to control the number of entries returned in the response, and which entries appear on that page of data. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 entries from the results set. If the <b>offset</b> was set to <code>10</code> and the <b>limit</b> was set to <code>20</code>, the first page of the results set would contain entries 11-30. <br/><br/>The <b>offset</b> value defaults to <code>0</code> if the <b>offset</b> query parameter is omitted from the request.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the totalEntries property value. The total number of entries that match the current input criteria of the request. This value divided by the value of the <b>limit</b> field determines the value of the <b>totalPages</b> field.
     * @return int|null
    */
    public function getTotalEntries(): ?int {
        return $this->totalEntries;
    }

    /**
     * Gets the totalPages property value. The total number of pages of entries that match the current input criteria of the request.  <br/><br/>This value is determined by dividing the value of the <b>totalEntries</b> field by the value of the <b>limit</b> field. If <b>totalPages</b> is more than <code>1</code>, subsequent calls must be used to view subsequent pages in the results set.
     * @return int|null
    */
    public function getTotalPages(): ?int {
        return $this->totalPages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeIntegerValue('totalEntries', $this->getTotalEntries());
        $writer->writeIntegerValue('totalPages', $this->getTotalPages());
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
     * Sets the limit property value. The maximum number of entries to return per request. This value is set through the <b>limit</b> query parameter in the request (or the default value is used if this query parameter is omitted). <br/><br/>The value of the <b>totalEntries</b> field divided by the value of this field determines the value of the <b>totalPages</b> field. 
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the offset property value. The offset value indicates the number of entries to skip in the results set before returning the first entry in the paginated response. The <b>offset</b> query parameter is paired with the <b>limit</b> query parameter to control the number of entries returned in the response, and which entries appear on that page of data. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 entries from the results set. If the <b>offset</b> was set to <code>10</code> and the <b>limit</b> was set to <code>20</code>, the first page of the results set would contain entries 11-30. <br/><br/>The <b>offset</b> value defaults to <code>0</code> if the <b>offset</b> query parameter is omitted from the request.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the totalEntries property value. The total number of entries that match the current input criteria of the request. This value divided by the value of the <b>limit</b> field determines the value of the <b>totalPages</b> field.
     * @param int|null $value Value to set for the totalEntries property.
    */
    public function setTotalEntries(?int $value): void {
        $this->totalEntries = $value;
    }

    /**
     * Sets the totalPages property value. The total number of pages of entries that match the current input criteria of the request.  <br/><br/>This value is determined by dividing the value of the <b>totalEntries</b> field by the value of the <b>limit</b> field. If <b>totalPages</b> is more than <code>1</code>, subsequent calls must be used to view subsequent pages in the results set.
     * @param int|null $value Value to set for the totalPages property.
    */
    public function setTotalPages(?int $value): void {
        $this->totalPages = $value;
    }

}
