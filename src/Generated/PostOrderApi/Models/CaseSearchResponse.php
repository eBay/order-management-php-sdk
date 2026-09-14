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
 * The base response type of the <b>GET /post-order/v2/casemanagement/search</b> method, which is used to retrieve cases based on filter criteria in the request.
*/
class CaseSearchResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CaseSummaryType>|null $members An array of one or more cases that match the filter criteria in request.
    */
    private ?array $members = null;
    
    /**
     * @var PaginationOutput|null $paginationOutput This type contains information about the pagination of a  response payload. The entries (data records) returned by the request are grouped into <i>pages</i>, which are limited in size according to the number of entries per page as specified by the <b>limit</b> field.
    */
    private ?PaginationOutput $paginationOutput = null;
    
    /**
     * @var int|null $totalNumberOfCases This integer value indicates the total number of cases that were found based on the input filter(s) in the request.
    */
    private ?int $totalNumberOfCases = null;
    
    /**
     * Instantiates a new CaseSearchResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseSearchResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseSearchResponse {
        return new CaseSearchResponse();
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
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([CaseSummaryType::class, 'createFromDiscriminatorValue'])),
            'paginationOutput' => fn(ParseNode $n) => $o->setPaginationOutput($n->getObjectValue([PaginationOutput::class, 'createFromDiscriminatorValue'])),
            'totalNumberOfCases' => fn(ParseNode $n) => $o->setTotalNumberOfCases($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the members property value. An array of one or more cases that match the filter criteria in request.
     * @return array<CaseSummaryType>|null
    */
    public function getMembers(): ?array {
        return $this->members;
    }

    /**
     * Gets the paginationOutput property value. This type contains information about the pagination of a  response payload. The entries (data records) returned by the request are grouped into <i>pages</i>, which are limited in size according to the number of entries per page as specified by the <b>limit</b> field.
     * @return PaginationOutput|null
    */
    public function getPaginationOutput(): ?PaginationOutput {
        return $this->paginationOutput;
    }

    /**
     * Gets the totalNumberOfCases property value. This integer value indicates the total number of cases that were found based on the input filter(s) in the request.
     * @return int|null
    */
    public function getTotalNumberOfCases(): ?int {
        return $this->totalNumberOfCases;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeObjectValue('paginationOutput', $this->getPaginationOutput());
        $writer->writeIntegerValue('totalNumberOfCases', $this->getTotalNumberOfCases());
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
     * Sets the members property value. An array of one or more cases that match the filter criteria in request.
     * @param array<CaseSummaryType>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->members = $value;
    }

    /**
     * Sets the paginationOutput property value. This type contains information about the pagination of a  response payload. The entries (data records) returned by the request are grouped into <i>pages</i>, which are limited in size according to the number of entries per page as specified by the <b>limit</b> field.
     * @param PaginationOutput|null $value Value to set for the paginationOutput property.
    */
    public function setPaginationOutput(?PaginationOutput $value): void {
        $this->paginationOutput = $value;
    }

    /**
     * Sets the totalNumberOfCases property value. This integer value indicates the total number of cases that were found based on the input filter(s) in the request.
     * @param int|null $value Value to set for the totalNumberOfCases property.
    */
    public function setTotalNumberOfCases(?int $value): void {
        $this->totalNumberOfCases = $value;
    }

}
