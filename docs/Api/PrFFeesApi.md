# MPSolutions\AmznSellingPartnerApi\PrFFeesApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyFeesEstimateForASIN()**](PrFFeesApi.md#getMyFeesEstimateForASIN) | **POST** /products/fees/v0/items/{Asin}/feesEstimate | 
[**getMyFeesEstimateForSKU()**](PrFFeesApi.md#getMyFeesEstimateForSKU) | **POST** /products/fees/v0/listings/{SellerSKU}/feesEstimate | 
[**getMyFeesEstimates()**](PrFFeesApi.md#getMyFeesEstimates) | **POST** /products/fees/v0/feesEstimate | 


## `getMyFeesEstimateForASIN()`

```php
getMyFeesEstimateForASIN($asin, $body): \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateResponse
```



Returns the estimated fees for the item indicated by the specified ASIN in the marketplace specified in the request body.  You can call `getMyFeesEstimateForASIN` for an item on behalf of a selling partner before the selling partner sets the item's price. The selling partner can then take estimated fees into account. Each fees request must include an original identifier. This identifier is included in the fees estimate so you can correlate a fees estimate with the original request.  **Note:** This identifier value is only an estimate, actual costs may vary. Search \"fees\" in [Seller Central](https://sellercentral.amazon.com/) and consult the store-specific fee schedule for the most up-to-date information.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 20 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrFFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest

try {
    $result = $apiInstance->getMyFeesEstimateForASIN($asin, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrFFeesApi->getMyFeesEstimateForASIN: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest**](../Model/PrFGetMyFeesEstimateRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateResponse**](../Model/PrFGetMyFeesEstimateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyFeesEstimateForSKU()`

```php
getMyFeesEstimateForSKU($seller_sku, $body): \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateResponse
```



Returns the estimated fees for the item indicated by the specified seller SKU in the marketplace specified in the request body.  You can call `getMyFeesEstimateForSKU` for an item on behalf of a selling partner before the selling partner sets the item's price. The selling partner can then take any estimated fees into account. Each fees estimate request must include an original identifier. This identifier is included in the fees estimate so that you can correlate a fees estimate with the original request.  **Note:** The identifier value is only an estimate, actual costs may vary. Search \"fees\" in [Seller Central](https://sellercentral.amazon.com/) and consult the store-specific fee schedule for the most up-to-date information.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 10 | 20 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrFFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_sku = 'seller_sku_example'; // string | Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest

try {
    $result = $apiInstance->getMyFeesEstimateForSKU($seller_sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrFFeesApi->getMyFeesEstimateForSKU: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateRequest**](../Model/PrFGetMyFeesEstimateRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFGetMyFeesEstimateResponse**](../Model/PrFGetMyFeesEstimateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMyFeesEstimates()`

```php
getMyFeesEstimates($body): \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFFeesEstimateResult[]
```



Returns the estimated fees for a list of products.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 1 | 1 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrFFeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFFeesEstimateByIdRequest()); // \MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFFeesEstimateByIdRequest[]

try {
    $result = $apiInstance->getMyFeesEstimates($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrFFeesApi->getMyFeesEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFFeesEstimateByIdRequest[]**](../Model/PrFFeesEstimateByIdRequest.md)|  |

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductFees\PrFFeesEstimateResult[]**](../Model/PrFFeesEstimateResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
