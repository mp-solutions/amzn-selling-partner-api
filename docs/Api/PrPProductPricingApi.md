# MPSolutions\AmznSellingPartnerApi\PrPProductPricingApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCompetitivePricing()**](PrPProductPricingApi.md#getCompetitivePricing) | **GET** /products/pricing/v0/competitivePrice | 
[**getItemOffers()**](PrPProductPricingApi.md#getItemOffers) | **GET** /products/pricing/v0/items/{Asin}/offers | 
[**getListingOffers()**](PrPProductPricingApi.md#getListingOffers) | **GET** /products/pricing/v0/listings/{SellerSKU}/offers | 
[**getPricing()**](PrPProductPricingApi.md#getPricing) | **GET** /products/pricing/v0/price | 


## `getCompetitivePricing()`

```php
getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type): \MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetPricingResponse
```



Returns competitive pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 20 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrPProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$customer_type = 'customer_type_example'; // string | Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer.

try {
    $result = $apiInstance->getCompetitivePricing($marketplace_id, $item_type, $asins, $skus, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrPProductPricingApi->getCompetitivePricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. |
 **asins** | [**string[]**](../Model/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **customer_type** | **string**| Indicates whether to request pricing information from the point of view of Consumer or Business buyers. Default is Consumer. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetPricingResponse**](../Model/PrPGetPricingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemOffers()`

```php
getItemOffers($marketplace_id, $item_condition, $asin, $customer_type): \MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetOffersResponse
```



Returns the lowest priced offers for a single item based on ASIN.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrPProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$customer_type = 'customer_type_example'; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getItemOffers($marketplace_id, $item_condition, $asin, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrPProductPricingApi->getItemOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetOffersResponse**](../Model/PrPGetOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingOffers()`

```php
getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type): \MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetOffersResponse
```



Returns the lowest priced offers for a single SKU listing.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 10 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrPProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$seller_sku = 'seller_sku_example'; // string | Identifies an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
$customer_type = 'customer_type_example'; // string | Indicates whether to request Consumer or Business offers. Default is Consumer.

try {
    $result = $apiInstance->getListingOffers($marketplace_id, $item_condition, $seller_sku, $customer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrPProductPricingApi->getListingOffers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. |
 **seller_sku** | **string**| Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. |
 **customer_type** | **string**| Indicates whether to request Consumer or Business offers. Default is Consumer. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetOffersResponse**](../Model/PrPGetOffersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPricing()`

```php
getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type): \MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetPricingResponse
```



Returns pricing information for a seller's offer listings based on seller SKU or ASIN.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 10 | 20 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\PrPProductPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marketplace_id = 'marketplace_id_example'; // string | A marketplace identifier. Specifies the marketplace for which prices are returned.
$item_type = 'item_type_example'; // string | Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter.
$asins = array('asins_example'); // string[] | A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace.
$skus = array('skus_example'); // string[] | A list of up to twenty seller SKU values used to identify items in the given marketplace.
$item_condition = 'item_condition_example'; // string | Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club.
$offer_type = 'offer_type_example'; // string | Indicates whether to request pricing information for the seller's B2C or B2B offers. Default is B2C.

try {
    $result = $apiInstance->getPricing($marketplace_id, $item_type, $asins, $skus, $item_condition, $offer_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrPProductPricingApi->getPricing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketplace_id** | **string**| A marketplace identifier. Specifies the marketplace for which prices are returned. |
 **item_type** | **string**| Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. |
 **asins** | [**string[]**](../Model/string.md)| A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. | [optional]
 **skus** | [**string[]**](../Model/string.md)| A list of up to twenty seller SKU values used to identify items in the given marketplace. | [optional]
 **item_condition** | **string**| Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. | [optional]
 **offer_type** | **string**| Indicates whether to request pricing information for the seller&#39;s B2C or B2B offers. Default is B2C. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ProductPricing\PrPGetPricingResponse**](../Model/PrPGetPricingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
