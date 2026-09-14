# ChangeLog

## 0.2.0 (09/14/2026)

### Breaking changes

#### Changed signatures

`FulfillmentClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `uploadEvidenceFile` | `(string, ?string, ?RequestOptions)` | `(string, mixed, ?string, ?RequestOptions)` |

`LogisticsClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `createFromShippingQuote` | `(CreateShipmentFromQuoteRequest, ?string, ?RequestOptions)` | `(CreateShipmentFromQuoteRequest, ?string, ?string, ?RequestOptions)` |
| `createShippingQuote` | `(ShippingQuoteRequest, ?string, ?RequestOptions)` | `(ShippingQuoteRequest, ?string, ?string, ?RequestOptions)` |

`OrderManagementGraphQLClient`:

| Operation | Previous parameters | Current parameters |
| --- | --- | --- |
| `purchaseQuotes` | `(?string, ?RequestOptions)` | `(PurchaseQuotesInput, ?string, ?RequestOptions)` |

### Added

- REST client `PostOrderApiClient` and its `OrderManagementClient::$postOrderApi` member.
