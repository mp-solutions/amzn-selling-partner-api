# MPSolutions\AmznSellingPartnerApi\Lit20210801ListingsApi

All URIs are relative to https://sellingpartnerapi-na.amazon.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteListingsItem()**](Lit20210801ListingsApi.md#deleteListingsItem) | **DELETE** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**getListingsItem()**](Lit20210801ListingsApi.md#getListingsItem) | **GET** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**patchListingsItem()**](Lit20210801ListingsApi.md#patchListingsItem) | **PATCH** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**putListingsItem()**](Lit20210801ListingsApi.md#putListingsItem) | **PUT** /listings/2021-08-01/items/{sellerId}/{sku} | 
[**searchListingsItems()**](Lit20210801ListingsApi.md#searchListingsItems) | **GET** /listings/2021-08-01/items/{sellerId} | 


## `deleteListingsItem()`

```php
deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale): \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse
```



Delete a listings item for a selling partner.  **Note:** The parameters associated with this operation may contain special characters that must be encoded to successfully call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Lit20210801ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.

try {
    $result = $apiInstance->deleteListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lit20210801ListingsApi->deleteListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: &#x60;en_US&#x60;, &#x60;fr_CA&#x60;, &#x60;fr_FR&#x60;. Localized messages default to &#x60;en_US&#x60; when a localization is not available in the specified locale. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse**](../Model/Lit20210801ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListingsItem()`

```php
getListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale, $included_data): \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801Item
```



Returns details about a listings item for a selling partner.  **Note:** The parameters associated with this operation may contain special characters that must be encoded to successfully call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Lit20210801ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.
$included_data = summaries; // string[] | A comma-delimited list of data sets to include in the response. Default: `summaries`.

try {
    $result = $apiInstance->getListingsItem($seller_id, $sku, $marketplace_ids, $issue_locale, $included_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lit20210801ListingsApi->getListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: &#x60;en_US&#x60;, &#x60;fr_CA&#x60;, &#x60;fr_FR&#x60;. Localized messages default to &#x60;en_US&#x60; when a localization is not available in the specified locale. | [optional]
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: &#x60;summaries&#x60;. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801Item**](../Model/Lit20210801Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchListingsItem()`

```php
patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $included_data, $mode, $issue_locale): \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse
```



Partially update (patch) a listings item for a selling partner. Only top-level listings item attributes can be patched. Patching nested attributes is not supported.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The preceding table indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput can receive higher rate and burst values then those shown here. For more information, refer to [Usage Plans and Rate Limits](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api) in the Selling Partner API documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Lit20210801ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPatchRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPatchRequest | The request body schema for the `patchListingsItem` operation.
$included_data = issues; // string[] | A comma-delimited list of data sets to include in the response. Default: `issues`.
$mode = VALIDATION_PREVIEW; // string | The mode of operation for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.

try {
    $result = $apiInstance->patchListingsItem($seller_id, $sku, $marketplace_ids, $body, $included_data, $mode, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lit20210801ListingsApi->patchListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPatchRequest**](../Model/Lit20210801ListingsItemPatchRequest.md)| The request body schema for the &#x60;patchListingsItem&#x60; operation. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: &#x60;issues&#x60;. | [optional]
 **mode** | **string**| The mode of operation for the request. | [optional]
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: &#x60;en_US&#x60;, &#x60;fr_CA&#x60;, &#x60;fr_FR&#x60;. Localized messages default to &#x60;en_US&#x60; when a localization is not available in the specified locale. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse**](../Model/Lit20210801ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putListingsItem()`

```php
putListingsItem($seller_id, $sku, $marketplace_ids, $body, $included_data, $mode, $issue_locale): \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse
```



Creates or fully updates an existing listings item for a selling partner.  **Note:** This operation has a throttling rate of one request per second when `mode` is `VALIDATION_PREVIEW`.  **Note:** The parameters associated with this operation may contain special characters that must be encoded to successfully call the API. To avoid errors with SKUs when encoding URLs, refer to [URL Encoding](https://developer-docs.amazon.com/sp-api/docs/url-encoding).  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 10 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that were applied to the requested operation, when available. The table above indicates the default rate and burst values for this operation. Selling partners whose business demands require higher throughput may see higher rate and burst values than those shown here. For more information, see [Usage Plans and Rate Limits in the Selling Partner API](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Lit20210801ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$sku = 'sku_example'; // string | A selling partner provided identifier for an Amazon listing.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$body = new \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPutRequest(); // \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPutRequest | The request body schema for the `putListingsItem` operation.
$included_data = issues; // string[] | A comma-delimited list of data sets to include in the response. Default: `issues`.
$mode = VALIDATION_PREVIEW; // string | The mode of operation for the request.
$issue_locale = en_US; // string | A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: `en_US`, `fr_CA`, `fr_FR`. Localized messages default to `en_US` when a localization is not available in the specified locale.

try {
    $result = $apiInstance->putListingsItem($seller_id, $sku, $marketplace_ids, $body, $included_data, $mode, $issue_locale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lit20210801ListingsApi->putListingsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **sku** | **string**| A selling partner provided identifier for an Amazon listing. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **body** | [**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemPutRequest**](../Model/Lit20210801ListingsItemPutRequest.md)| The request body schema for the &#x60;putListingsItem&#x60; operation. |
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of data sets to include in the response. Default: &#x60;issues&#x60;. | [optional]
 **mode** | **string**| The mode of operation for the request. | [optional]
 **issue_locale** | **string**| A locale for localization of issues. When not provided, the default language code of the first marketplace is used. Examples: &#x60;en_US&#x60;, &#x60;fr_CA&#x60;, &#x60;fr_FR&#x60;. Localized messages default to &#x60;en_US&#x60; when a localization is not available in the specified locale. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ListingsItemSubmissionResponse**](../Model/Lit20210801ListingsItemSubmissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchListingsItems()`

```php
searchListingsItems($seller_id, $marketplace_ids, $issue_locale, $included_data, $identifiers, $identifiers_type, $variation_parent_sku, $package_hierarchy_sku, $created_after, $created_before, $last_updated_after, $last_updated_before, $with_issue_severity, $with_status, $without_status, $sort_by, $sort_order, $page_size, $page_token): \MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemSearchResults
```



Search for and return a list of selling partner listings items and their respective details.  **Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | | 5 | 5 |  The `x-amzn-RateLimit-Limit` response header returns the usage plan rate limits that are applied to the requested operation, when available. The preceding table contains the default rate and burst values for this operation. Selling partners whose business demands require higher throughput might have higher rate and burst values than those shown here. For more information, refer to [Usage Plans and Rate Limits](https://developer-docs.amazon.com/sp-api/docs/usage-plans-and-rate-limits-in-the-sp-api).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new MPSolutions\AmznSellingPartnerApi\Api\Lit20210801ListingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$seller_id = 'seller_id_example'; // string | A selling partner identifier, such as a merchant account or vendor code.
$marketplace_ids = ATVPDKIKX0DER; // string[] | A comma-delimited list of Amazon marketplace identifiers for the request.
$issue_locale = en_US; // string | A locale that is used to localize issues. When not provided, the default language code of the first marketplace is used. Examples: \"en_US\", \"fr_CA\", \"fr_FR\". When a localization is not available in the specified locale, localized messages default to \"en_US\".
$included_data = summaries; // string[] | A comma-delimited list of datasets that you want to include in the response. Default: `summaries`.
$identifiers = GM-ZDPI-9B4E; // string[] | A comma-delimited list of product identifiers that you can use to search for listings items.   **Note**:  1. This is required when you specify `identifiersType`. 2. You cannot use 'identifiers' if you specify `variationParentSku` or `packageHierarchySku`.
$identifiers_type = SKU; // string | A type of product identifiers that you can use to search for listings items.   **Note**:  This is required when `identifiers` is provided.
$variation_parent_sku = GM-ZDPI-9B4E; // string | Filters results to include listing items that are variation children of the specified SKU.   **Note**: You cannot use `variationParentSku` if you include `identifiers` or `packageHierarchySku` in your request.
$package_hierarchy_sku = GM-ZDPI-9B4E; // string | Filter results to include listing items that contain or are contained by the specified SKU.   **Note**: You cannot use `packageHierarchySku` if you include `identifiers` or `variationParentSku` in your request.
$created_after = 2024-03-01T01:30:00.000Z; // \DateTime | A date-time that is used to filter listing items. The response includes listings items that were created at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
$created_before = 2024-03-31T21:45:00.000Z; // \DateTime | A date-time that is used to filter listing items. The response includes listings items that were created at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
$last_updated_after = 2024-05-05T23:45:00.000Z; // \DateTime | A date-time that is used to filter listing items. The response includes listings items that were last updated at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
$last_updated_before = 2024-05-01T01:15:00.000Z; // \DateTime | A date-time that is used to filter listing items. The response includes listings items that were last updated at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format.
$with_issue_severity = WARNING; // string[] | Filter results to include only listing items that have issues that match one or more of the specified severity levels.
$with_status = DISCOVERABLE; // string[] | Filter results to include only listing items that have the specified status.
$without_status = BUYABLE; // string[] | Filter results to include only listing items that don't contain the specified statuses.
$sort_by = lastUpdatedDate; // string | An attribute by which to sort the returned listing items.
$sort_order = DESC; // string | The order in which to sort the result items.
$page_size = 9; // int | The number of results that you want to include on each page.
$page_token = sdlkj234lkj234lksjdflkjwdflkjsfdlkj234234234234; // string | A token that you can use to fetch a specific page when there are multiple pages of results.

try {
    $result = $apiInstance->searchListingsItems($seller_id, $marketplace_ids, $issue_locale, $included_data, $identifiers, $identifiers_type, $variation_parent_sku, $package_hierarchy_sku, $created_after, $created_before, $last_updated_after, $last_updated_before, $with_issue_severity, $with_status, $without_status, $sort_by, $sort_order, $page_size, $page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Lit20210801ListingsApi->searchListingsItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **string**| A selling partner identifier, such as a merchant account or vendor code. |
 **marketplace_ids** | [**string[]**](../Model/string.md)| A comma-delimited list of Amazon marketplace identifiers for the request. |
 **issue_locale** | **string**| A locale that is used to localize issues. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. When a localization is not available in the specified locale, localized messages default to \&quot;en_US\&quot;. | [optional]
 **included_data** | [**string[]**](../Model/string.md)| A comma-delimited list of datasets that you want to include in the response. Default: &#x60;summaries&#x60;. | [optional]
 **identifiers** | [**string[]**](../Model/string.md)| A comma-delimited list of product identifiers that you can use to search for listings items.   **Note**:  1. This is required when you specify &#x60;identifiersType&#x60;. 2. You cannot use &#39;identifiers&#39; if you specify &#x60;variationParentSku&#x60; or &#x60;packageHierarchySku&#x60;. | [optional]
 **identifiers_type** | **string**| A type of product identifiers that you can use to search for listings items.   **Note**:  This is required when &#x60;identifiers&#x60; is provided. | [optional]
 **variation_parent_sku** | **string**| Filters results to include listing items that are variation children of the specified SKU.   **Note**: You cannot use &#x60;variationParentSku&#x60; if you include &#x60;identifiers&#x60; or &#x60;packageHierarchySku&#x60; in your request. | [optional]
 **package_hierarchy_sku** | **string**| Filter results to include listing items that contain or are contained by the specified SKU.   **Note**: You cannot use &#x60;packageHierarchySku&#x60; if you include &#x60;identifiers&#x60; or &#x60;variationParentSku&#x60; in your request. | [optional]
 **created_after** | **\DateTime**| A date-time that is used to filter listing items. The response includes listings items that were created at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
 **created_before** | **\DateTime**| A date-time that is used to filter listing items. The response includes listings items that were created at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
 **last_updated_after** | **\DateTime**| A date-time that is used to filter listing items. The response includes listings items that were last updated at or after this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
 **last_updated_before** | **\DateTime**| A date-time that is used to filter listing items. The response includes listings items that were last updated at or before this time. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. | [optional]
 **with_issue_severity** | [**string[]**](../Model/string.md)| Filter results to include only listing items that have issues that match one or more of the specified severity levels. | [optional]
 **with_status** | [**string[]**](../Model/string.md)| Filter results to include only listing items that have the specified status. | [optional]
 **without_status** | [**string[]**](../Model/string.md)| Filter results to include only listing items that don&#39;t contain the specified statuses. | [optional]
 **sort_by** | **string**| An attribute by which to sort the returned listing items. | [optional] [default to &#39;lastUpdatedDate&#39;]
 **sort_order** | **string**| The order in which to sort the result items. | [optional] [default to &#39;DESC&#39;]
 **page_size** | **int**| The number of results that you want to include on each page. | [optional] [default to 10]
 **page_token** | **string**| A token that you can use to fetch a specific page when there are multiple pages of results. | [optional]

### Return type

[**\MPSolutions\AmznSellingPartnerApi\Models\ListingsItems20210801\Lit20210801ItemSearchResults**](../Model/Lit20210801ItemSearchResults.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
