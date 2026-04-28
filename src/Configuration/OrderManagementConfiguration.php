<?php

namespace EBay\OrderManagement\Configuration;

final class OrderManagementConfiguration
{
    public string $fulfillmentBaseUrl = 'https://api.ebay.com';
    public string $logisticsBaseUrl   = 'https://api.ebay.com';
    public string $graphQLBaseUrl     = 'https://api.ebay.com/sell/graph/v1_beta/graphql';

    /** Static fallback token; per-call token takes precedence when provided. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_filter(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [$this->fulfillmentBaseUrl, $this->logisticsBaseUrl, $this->graphQLBaseUrl]
        )));
    }
}
