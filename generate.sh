#!/usr/bin/env bash
set -euo pipefail

echo "Regenerating REST clients via Kiota..."

kiota generate -l php \
  -d specs/sell_fulfillment_v1_oas3.yaml \
  -c FulfillmentApiClient \
  -n 'EBay\OrderManagement\Generated\Fulfillment' \
  -o src/Generated/Fulfillment \
  --ebc --co

kiota generate -l php \
  -d specs/sell_logistics_v1_oas3.yaml \
  -c LogisticsApiClient \
  -n 'EBay\OrderManagement\Generated\Logistics' \
  -o src/Generated/Logistics \
  --ebc --co

echo "Done. Run 'composer dump-autoload' if new namespaces were added."
