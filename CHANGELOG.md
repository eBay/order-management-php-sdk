# ChangeLog

## 1.0.0 (09/14/2026)

**Breaking changes**
- The following operations changed signature on `FulfillmentClient`:
  - `uploadEvidenceFile`: `(string, ?string, ?RequestOptions)` → `(string, mixed, ?string, ?RequestOptions)`
- The following operations changed signature on `LogisticsClient`:
  - `createFromShippingQuote`: `(CreateShipmentFromQuoteRequest, ?string, ?RequestOptions)` → `(CreateShipmentFromQuoteRequest, ?string, ?string, ?RequestOptions)`
  - `createShippingQuote`: `(ShippingQuoteRequest, ?string, ?RequestOptions)` → `(ShippingQuoteRequest, ?string, ?string, ?RequestOptions)`
- The following operations changed signature on `OrderManagementGraphQLClient`:
  - `purchaseQuotes`: `(?string, ?RequestOptions)` → `(PurchaseQuotesInput, ?string, ?RequestOptions)`
