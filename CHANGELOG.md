# ChangeLog

## 0.3.0 (11/26/2026)

### Breaking changes

- eBay lists the Post-Order API as legacy, so it is removed. For returns, cancellations and inquiries, use the GraphQL operations.
- The return rule listing group and in-store return operations are no longer in eBay's GraphQL schema, so they are removed.

- The following clients were removed:
  - `PostOrderApiClient`
- The following operations were removed from `OrderManagementGraphQLClient`:
  - `addListingsToReturnRuleListingGroup`
  - `createInStoreReturn`
  - `createReturnRuleListingGroup`
  - `deleteReturnRuleListingGroup`
  - `returnRuleListingGroup`
- The following members were removed from `OrderManagementClient`:
  - `$postOrderApi`
- The following operations changed signature on `FulfillmentClient`:
| Operation | Previous signature | New signature |
| --- | --- | --- |
| `getOrder` | `getOrder(string orderId, ?string fieldGroups, ?string accessToken, ?RequestOptions requestOptions)` | `getOrder(string orderId, ?\EBay\OrderManagement\Generated\Fulfillment\Order\Item\GetFieldGroupsQueryParameterType fieldGroups, ?string accessToken, ?RequestOptions requestOptions)` |
| `getOrders` | `getOrders(?string fieldGroups, ?string filter, ?string limit, ?string offset, ?string orderIds, ?string accessToken, ?RequestOptions requestOptions)` | `getOrders(?\EBay\OrderManagement\Generated\Fulfillment\Order\GetFieldGroupsQueryParameterType fieldGroups, ?string filter, ?string limit, ?string offset, ?string orderIds, ?string accessToken, ?RequestOptions requestOptions)` |

### Security

- `KiotaAuthProvider` created with an empty `$allowedHosts` list no longer returns the access token for every host. It now requires the URL's host to be in the list.

### Added

- The following operations were added to `FulfillmentClient`:
  - `createAdditionalShippingFulfillment`

- Local mock servers: a base URL may use plain `http` when its host is a loopback host (`127.0.0.1`, `::1` or `localhost`) that you also pass in `$allowedHosts`, for example `allowedHosts: ['127.0.0.1']`. Every other host still requires `https`. `OrderManagementConfiguration::LOOPBACK_HOSTS` lists the loopback hosts.
- `OrderManagementConfiguration::untrustedReason()` says why a URL may not receive the access token, and `OrderManagementConfiguration::normalizeHost()` normalizes a host the same way the SDK compares hosts.

### Changed

- Updated the `fulfillment` OpenAPI document to the latest definitions.
- Updated the GraphQL schema to the latest definitions.
- Hosts are compared lowercased and without IPv6 brackets, so `[::1]` and `::1` match.
- A rejected base URL now says whether the scheme or the host is not trusted.
- Fixed multipart uploads so `uploadEvidenceFile` send the file through Kiota.
- Multipart upload methods accept a string or a PSR-7 stream and require `microsoft/kiota-abstractions` 2.3 or later.

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`FulfillmentClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `uploadEvidenceFile` | `(string $paymentDisputeId, ?string $accessToken, ?RequestOptions $requestOptions)` | `(string $paymentDisputeId, mixed $body, ?string $accessToken, ?RequestOptions $requestOptions)` |

`LogisticsClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createFromShippingQuote` | `(CreateShipmentFromQuoteRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(CreateShipmentFromQuoteRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |
| `createShippingQuote` | `(ShippingQuoteRequest $body, ?string $accessToken, ?RequestOptions $requestOptions)` | `(ShippingQuoteRequest $body, ?string $xEBAYCMARKETPLACEID, ?string $accessToken, ?RequestOptions $requestOptions)` |

`OrderManagementGraphQLClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `purchaseQuotes` | `(?string $accessToken, ?RequestOptions $requestOptions)` | `(PurchaseQuotesInput $input, ?string $accessToken, ?RequestOptions $requestOptions)` |

### Added

- REST client `PostOrderApiClient` and its `OrderManagementClient::$postOrderApi` member.
