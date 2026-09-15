# ChangeLog

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
