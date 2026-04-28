<?php

namespace EBay\OrderManagement\Clients\GraphQL;

use EBay\OrderManagement\Configuration\OrderManagementConfiguration;
use EBay\OrderManagement\Configuration\TokenContext;
use EBay\OrderManagement\Exceptions\GraphQLException;
use GuzzleHttp\ClientInterface;

final class DynamicGraphQLClient
{
    public function __construct(
        private readonly ClientInterface $guzzle,
        private readonly OrderManagementConfiguration $config,
    ) {}

    /** @return array<string, mixed> The `data` field of the GraphQL response. */
    public function execute(string $query, array $variables = [], ?string $accessToken = null): array
    {
        $token = $accessToken ?? TokenContext::get() ?? $this->config->accessToken
            ?? throw new \RuntimeException(
                'No access token. Pass $accessToken or set OrderManagementConfiguration::$accessToken.'
            );

        $response = $this->guzzle->request('POST', $this->config->graphQLBaseUrl, [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Content-Type'  => 'application/json',
            ],
            'json' => array_filter(['query' => $query, 'variables' => $variables ?: null]),
        ]);

        $body = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);

        if (!empty($body['errors'])) {
            throw new GraphQLException(array_column($body['errors'], 'message'));
        }

        return $body['data'] ?? [];
    }
}
