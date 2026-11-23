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

declare(strict_types=1);

namespace EBay\OrderManagement\Clients\Rest;

use GuzzleHttp\Psr7\MultipartStream;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\Serialization\ParseNodeFactory;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriterFactory;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactory;
use Psr\Http\Message\StreamInterface;

/**
 * Sends one file as a multipart/form-data part on the request it forwards.
 * Kiota's request builder still builds the request and maps error responses; this adapter
 * only replaces the request body before the wrapped adapter sends it. It uses a Guzzle
 * multipart stream because kiota-abstractions 2.0.x builds MultiPartBody boundaries from
 * raw random bytes, which are not valid in a header.
 *
 * @internal
 */
final class MultipartFileRequestAdapter implements RequestAdapter
{
    /** @var string|resource|StreamInterface */
    private mixed $file;

    /**
     * @param string|resource|StreamInterface|null $file File contents.
     */
    public function __construct(
        private readonly RequestAdapter $delegate,
        private readonly string $partName,
        mixed $file,
    ) {
        if (!is_string($file) && !is_resource($file) && !$file instanceof StreamInterface) {
            throw new \InvalidArgumentException(
                "{$partName} must be a string, a stream resource, or a PSR-7 stream."
            );
        }
        $this->file = $file;
    }

    private function attach(RequestInformation $requestInfo): RequestInformation
    {
        $multipart = new MultipartStream([['name' => $this->partName, 'contents' => $this->file]]);
        // Kiota only adds its Content-Type when none is set, and ours carries the boundary.
        $requestInfo->removeHeader('Content-Type');
        $requestInfo->setStreamContent($multipart, 'multipart/form-data; boundary=' . $multipart->getBoundary());
        return $requestInfo;
    }

    public function sendAsync(RequestInformation $requestInfo, array $targetCallable, ?array $errorMappings = null): Promise
    {
        return $this->delegate->sendAsync($this->attach($requestInfo), $targetCallable, $errorMappings);
    }

    public function getSerializationWriterFactory(): SerializationWriterFactory
    {
        return $this->delegate->getSerializationWriterFactory();
    }

    public function getParseNodeFactory(): ParseNodeFactory
    {
        return $this->delegate->getParseNodeFactory();
    }

    public function sendCollectionAsync(RequestInformation $requestInfo, array $targetCallable, ?array $errorMappings = null): Promise
    {
        return $this->delegate->sendCollectionAsync($this->attach($requestInfo), $targetCallable, $errorMappings);
    }

    public function sendPrimitiveAsync(RequestInformation $requestInfo, string $primitiveType, ?array $errorMappings = null): Promise
    {
        return $this->delegate->sendPrimitiveAsync($this->attach($requestInfo), $primitiveType, $errorMappings);
    }

    public function sendPrimitiveCollectionAsync(RequestInformation $requestInfo, string $primitiveType, ?array $errorMappings = null): Promise
    {
        return $this->delegate->sendPrimitiveCollectionAsync($this->attach($requestInfo), $primitiveType, $errorMappings);
    }

    public function sendNoContentAsync(RequestInformation $requestInfo, ?array $errorMappings = null): Promise
    {
        return $this->delegate->sendNoContentAsync($this->attach($requestInfo), $errorMappings);
    }

    public function enableBackingStore(BackingStoreFactory $backingStoreFactory): void
    {
        $this->delegate->enableBackingStore($backingStoreFactory);
    }

    public function setBaseUrl(string $baseUrl): void
    {
        $this->delegate->setBaseUrl($baseUrl);
    }

    public function getBaseUrl(): string
    {
        return $this->delegate->getBaseUrl();
    }

    public function convertToNative(RequestInformation $requestInformation): Promise
    {
        return $this->delegate->convertToNative($this->attach($requestInformation));
    }
}
