# MPSolutions\AmznSellingPartnerApi\CIt20201201CatalogApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCatalogItem()**](CIt20201201CatalogApi.md#getCatalogItem) | **GET** /catalog/2020-12-01/items/{asin} | 
[**searchCatalogItems()**](CIt20201201CatalogApi.md#searchCatalogItems) | **GET** /catalog/2020-12-01/items | 


## `getCatalogItem()`

```php
getCatalogItem($asin, $marketplace_ids, $included_data, $locale): \MPSolutions\AmznSellingPartnerApi\Models\CatalogItems20201201\CIt20201201Item
```



Retrieves details for an item in the Amazon catalog.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 5 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\CIt20201201CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asin = 'asin_example'; // string | The Amazon Standard Identification Number (ASIN) of the item.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->getCatalogItem($asin, $marketplace_ids, $included_data, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CIt20201201CatalogApi->getCatalogItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **asin** | **string**| The Amazon Standard Identification Number (ASIN) of the item. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers. Data sets in the response contain data only for the specified marketplaces. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems20201201\CIt20201201Item**](../Model/CIt20201201Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchCatalogItems()`

```php
searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale): \MPSolutions\AmznSellingPartnerApi\Models\CatalogItems20201201\CIt20201201ItemSearchResults
```



Search for and return a list of Amazon catalog items and associated information.  **Usage Plans:**  | Plan type | Rate (requests per second) | Burst | | ---- | ---- | ---- | |Default| 5 | 5 | |Selling partner specific| Variable | Variable |  The x-amzn-RateLimit-Limit response header returns the usage plan rate limits that were applied to the requested operation. Rate limits for some selling partners will vary from the default rate and burst shown in the table above. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](doc:usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\CIt20201201CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keywords = shoes; // string[] | A comma-delimited list of words or item identifiers to search the Amazon catalog for.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: summaries.
$brand_names = Beautiful Boats; // string[] | A comma-delimited list of brand names to limit the search to.
$classification_ids = 12345678; // string[] | A comma-delimited list of classification identifiers to limit the search to.
$page_size = 9; // int | Number of results to be returned per page.
$page_token = sdlkj234lkj234lksjdflkjwdflkjsfdlkj234234234234; // string | A token to fetch a certain page when there are multiple pages worth of results.
$keywords_locale = en_US; // string | The language the keywords are provided in. Defaults to the primary locale of the marketplace.
$locale = en_US; // string | Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace.

try {
    $result = $apiInstance->searchCatalogItems($keywords, $marketplace_ids, $included_data, $brand_names, $classification_ids, $page_size, $page_token, $keywords_locale, $locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CIt20201201CatalogApi->searchCatalogItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keywords** | [**string[]**](../Model/string.md)| A comma-delimited list of words or item identifiers to search the Amazon catalog for. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: summaries. | [optional]
 **brand_names** | [**string[]**](../Model/string.md)| A comma-delimited list of brand names to limit the search to. | [optional]
 **classification_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of classification identifiers to limit the search to. | [optional]
 **page_size** | **int**| Number of results to be returned per page. | [optional] [default to 10]
 **page_token** | **string**| A token to fetch a certain page when there are multiple pages worth of results. | [optional]
 **keywords_locale** | **string**| The language the keywords are provided in. Defaults to the primary locale of the marketplace. | [optional]
 **locale** | **string**| Locale for retrieving localized summaries. Defaults to the primary locale of the marketplace. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\CatalogItems20201201\CIt20201201ItemSearchResults**](../Model/CIt20201201ItemSearchResults.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
