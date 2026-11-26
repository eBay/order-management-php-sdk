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
use Microsoft\Kiota\Abstractions\MultiPartBody;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * A multipart/form-data body holding one file, for Kiota request builders. Kiota's multipart
 * serializer alters the file bytes, so this body writes a Guzzle multipart stream with Kiota's boundary.
 *
 * @internal
 */
final class MultipartFile extends MultiPartBody
{
    private readonly MultipartStream $stream;

    /**
     * @param mixed $file File contents: a string or a PSR-7 stream.
     */
    public function __construct(string $partName, mixed $file)
    {
        if (!is_string($file) && !$file instanceof StreamInterface) {
            throw new \InvalidArgumentException("{$partName} must be a string or a PSR-7 stream.");
        }
        parent::__construct();
        $this->stream = new MultipartStream(
            [['name' => $partName, 'contents' => $file, 'headers' => ['Content-Type' => 'application/octet-stream']]],
            $this->getBoundary(),
        );
    }

    public function serialize(SerializationWriter $writer): void
    {
        $writer->writeBinaryContent(null, $this->stream);
    }
}
