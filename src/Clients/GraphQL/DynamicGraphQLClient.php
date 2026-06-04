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

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\RequestOptions;
use EBay\OrderManagement\Configuration\TokenContext;
use EBay\OrderManagement\Exceptions\GraphQLException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;

final class DynamicGraphQLClient
{
    public function __construct(
        private readonly ClientInterface $guzzle,
        private readonly OrderManagementConfiguration $config,
    ) {}

    /**
     * Execute a GraphQL query or mutation.
     *
     * @param array<string, mixed> $variables
     * @return array<string, mixed> The `data` field of the GraphQL response.
     * @throws GraphQLException On HTTP errors or GraphQL `errors` in the response.
     */
    public function execute(string $query, array $variables = [], ?string $accessToken = null, ?RequestOptions $requestOptions = null): array
    {
        $token = $accessToken ?? TokenContext::get() ?? $this->config->accessToken
            ?? throw new \RuntimeException(
                'No access token. Pass $accessToken or set OrderManagementConfiguration::$accessToken.'
            );

        if (empty($token)) {
            throw new \RuntimeException(
                'No access token. Pass $accessToken per-call or set OrderManagementConfiguration::$accessToken.'
            );
        }

        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Content-Type'  => 'application/json',
        ];

        // Apply default headers first (tryAdd semantics: do not overwrite existing)
        foreach ($this->config->defaultRequestOptions->headers as $key => $value) {
            if (!isset($headers[$key])) {
                $headers[$key] = $value;
            }
        }

        // Apply per-call headers (overwrite defaults but not built-ins like Auth/Content-Type)
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                if (!isset($headers[$key])) {
                    $headers[$key] = $value;
                }
            }
        }

        if ($this->config->diagnosticLogging) {
            error_log(sprintf(
                '[OrderManagement][GraphQL] POST %s | query_length=%d | variables=%s',
                $this->config->graphQLBaseUrl,
                strlen($query),
                json_encode(array_keys($variables))
            ));
        }

        try {
            $response = $this->guzzle->request('POST', $this->config->graphQLBaseUrl, [
                'headers' => $headers,
                'json'    => array_filter(['query' => $query, 'variables' => $variables ?: null]),
            ]);
        } catch (BadResponseException $e) {
            $status = $e->getResponse()->getStatusCode();
            $body   = (string) $e->getResponse()->getBody();
            throw new GraphQLException(
                ["HTTP {$status}: {$body}"],
                $status
            );
        }

        $statusCode = $response->getStatusCode();
        $bodyContents = $response->getBody()->getContents();

        if ($this->config->diagnosticLogging) {
            error_log(sprintf(
                '[OrderManagement][GraphQL] Response status=%d | body_length=%d',
                $statusCode,
                strlen($bodyContents)
            ));
        }

        if ($statusCode >= 400) {
            throw new GraphQLException(
                ["HTTP {$statusCode}: {$bodyContents}"],
                $statusCode
            );
        }

        $body = json_decode($bodyContents, true, 512, JSON_THROW_ON_ERROR);

        if (!empty($body['errors'])) {
            throw new GraphQLException(array_column($body['errors'], 'message'));
        }

        return $body['data'] ?? [];
    }
}
